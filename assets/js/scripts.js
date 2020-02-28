// @ts-nocheck
// Window Resize

// Nav
  const body = document.querySelector("body");
  const mainContent = document.querySelector("#content");
  const nav = document.querySelector(".wil-nav");
  const navMenu = nav.querySelector(".nav__menu");
  const collapseButton = nav.querySelector(".nav__collapse-btn");
  const navOverlay = createElement("div", "nav__overlay");
  const defaultProps = {
    typeAnimation: "scale-down-pusher" 
    // to-slide-left, to-slide-right, reverse-slide, reveal, fall-down,
    // open-door, scale-up, rotate-3d-in, rotate-3d-out, scale-down-pusher, scale-rotate-down-pusher
  }

/**
 * 
 * @param {{typeAnimation: "to-slide-left" | "to-slide-right" | "reverse-slide" | "reveal" | "fall-down" | "open-door" | "scale-up" | "rotate-3d-in" | "rotate-3d-out" | "scale-down-pusher" | "scale-rotate-down-pusher"}} typeAnimation 
 */

  function toggleMenu({typeAnimation} = defaultProps) {
    nav.classList.toggle(typeAnimation);
    nav.appendChild(navOverlay);
    window.addEventListener("resize", () => {
      if(window.innerWidth >= 768) {
       closeMenu({typeAnimation})()
      }
    })
    return () => {
      navMenu.classList.toggle(`nav__menu--collapsed-${typeAnimation}`);
      navOverlay.classList.toggle("show");
      navOverlay.addEventListener("click", closeMenu({typeAnimation}))
      mainContent.classList.toggle(`content--collapsed-${typeAnimation}`); 
    }
  }
  collapseButton.addEventListener("click", toggleMenu())
  function closeMenu({typeAnimation} = defaultProps) {
    return () => {
      navMenu.classList.remove(`nav__menu--collapsed-${typeAnimation}`);
      navOverlay.classList.remove("show");
      mainContent.classList.remove(`content--collapsed-${typeAnimation}`); 
    }
  }

// PopUp
const videoPopUps = [...document.querySelectorAll(".video-pop-up")]; 

/**
 * 
 * @param {string} tagName 
 * @param {string} className 
 * @return HTMLElement
 * @example
 * ```
 * const button = createElement("button", "close-btn")
 * ```
 */

 function createElement(tagName, className = '') {
  const node = document.createElement(tagName);
  node.setAttribute("class", className);
  return node;
}

/**
 * 
 * @param {{className: string, src: string}} param0
 * @return HTMLElement
 * @example
 * ```
 *  const video = createIframeVideo({className: "video", src: "youtube.com"})
 * ```
 */

function createIframeVideo({className, src}) {
  const video = createElement("iframe", className);
  video.setAttribute("src", src);
  return video
}

/**
 * 
 * @param {{buttonNode: HTMLElement, videoNode: HTMLElement}} param0
 * @return HTMLElement
 * @example
 * ```
 *  const button = createElement("button", "buttonClassName")
 *  const video = createIframeVideo({className: "video", src: "youtube.com"})
 *  const popup = createPopIp({buttonNode: button, videoNode: video})
 * ```
 */

function createPopUp({buttonNode, videoNode}) {
  const popUp = createElement("div", "pop-up");
  const popUpContainer = createElement("div", "pop-up__container")
  const popUpContent = createElement("div", "embed-responsive embed-responsive-16by9");
  const closeButton = buttonNode;
  const video = videoNode; 
  popUpContent.appendChild(video);
  popUpContainer.appendChild(popUpContent);
  popUp.appendChild(closeButton);
  popUp.appendChild(popUpContainer);
  return popUp;
}

class VideoPopup {
  constructor(src, options) {
    const defaultOptions = {
      autoplay: true,
    }
    this.options = Object.assign({}, options, defaultOptions);
    this.closeBtn = createElement("button", "close-btn");
    if(this.options.autoplay) {
      this.video = createIframeVideo({className: "embed-responsive-item", src: `${src}?&autoplay=1`});
    }
    
    this.popup = createPopUp({buttonNode: this.closeBtn, videoNode: this.video});
    this.closePopUp = this.closePopUp.bind(this);
    this.showPopUp = this.showPopUp.bind(this);
  }
  closePopUp(e) {
    e.preventDefault();
    body.removeChild(this.popup);
  }
  showPopUp() {
    body.appendChild(this.popup);
    this.closeBtn.addEventListener("click", this.closePopUp);
    this.popup.addEventListener("click", this.closePopUp);
    window.addEventListener("keyup", (e) => {
    if(e.key === "Escape") {
        this.closePopUp(e);
      }
    })
  }
}

videoPopUps.forEach(videoPopUp => videoPopUp.addEventListener("click", (e) => {
  e.preventDefault();
  const dataSrc = videoPopUp.getAttribute("data-src");
  const video = new VideoPopup(dataSrc);
  video.showPopUp();
}))


// Change Section



