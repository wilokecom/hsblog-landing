// @ts-nocheck
// Window Resize
(function () {
  jQuery(document).ready(function () {
// Nav

    const body = document.querySelector("body");
    const mainContent = document.querySelector("#content");
    const nav = document.querySelector(".wil-nav");
    if (!!nav) {
      const navMenu = nav.querySelector(".nav__menu");
      const collapseButton = nav.querySelector(".nav__collapse-btn");
      const navOverlay = createElement("div", "nav__overlay");
      const defaultProps = {
        typeAnimation: "scale-down-pusher"
        // to-slide-left, to-slide-right, reverse-slide, reveal, fall-down,
        // open-door, scale-up, rotate-3d-in, rotate-3d-out, scale-down-pusher, scale-rotate-down-pusher
      };

      /**
       *
       * @param {{typeAnimation: "to-slide-left" | "to-slide-right" | "reverse-slide" | "reveal" | "fall-down" |
       *   "open-door" | "scale-up" | "rotate-3d-in" | "rotate-3d-out" | "scale-down-pusher" |
       *   "scale-rotate-down-pusher"}} typeAnimation
       */

      function toggleMenu({typeAnimation} = defaultProps) {
        nav.classList.add(typeAnimation);
        nav.appendChild(navOverlay);
        window.addEventListener("resize", () => {
          if (window.innerWidth >= 768) {
            closeMenu({typeAnimation})();
          }
        });
        return () => {
          navMenu.classList.toggle(`nav__menu--collapsed-${typeAnimation}`);
          navOverlay.classList.toggle("show");
          navOverlay.addEventListener("click", closeMenu({typeAnimation}));
          mainContent.classList.toggle(`content--collapsed-${typeAnimation}`);
        };
      }

      function closeMenu({typeAnimation} = defaultProps) {
        return () => {
          navMenu.classList.remove(`nav__menu--collapsed-${typeAnimation}`);
          navOverlay.classList.remove("show");
          mainContent.classList.remove(`content--collapsed-${typeAnimation}`);
        };
      }

      collapseButton.addEventListener("click", toggleMenu());
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
      return video;
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
      const popUpContainer = createElement("div", "pop-up__container");
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
          autoplay: true
        };
        this.options = Object.assign({}, options, defaultOptions);
        this.closeBtn = createElement("button", "close-btn");
        if (this.options.autoplay) {
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
          if (e.key === "Escape") {
            this.closePopUp(e);
          }
        });
      }
    }

    videoPopUps.forEach(videoPopUp => videoPopUp.addEventListener("click", (e) => {
      e.preventDefault();
      const dataSrc = videoPopUp.getAttribute("data-src");
      const video = new VideoPopup(dataSrc);
      video.showPopUp();
    }));


    // Section Demo

    const backgroundUrl = {
      musicdemo: 'https://images.pexels.com/photos/3683056/pexels-photo-3683056.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500 1x, https://images.pexels.com/photos/3683056/pexels-photo-3683056.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500 2',
      fashiondemo: 'https://images.pexels.com/photos/4108271/pexels-photo-4108271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500 1x, https://images.pexels.com/photos/4108271/pexels-photo-4108271.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500 2x',
      bueatydemo: 'https://images.pexels.com/photos/3989816/pexels-photo-3989816.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500 1x, https://images.pexels.com/photos/3989816/pexels-photo-3989816.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500 2x',
      fooddemo: 'https://images.pexels.com/photos/1713953/pexels-photo-1713953.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500 1x, https://images.pexels.com/photos/1713953/pexels-photo-1713953.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500 2x',
      techdemo: 'https://images.pexels.com/photos/3024995/pexels-photo-3024995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500 1x, https://images.pexels.com/photos/3024995/pexels-photo-3024995.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500 2x',
    }

    const sectionDemos = document.querySelector('.section-demos');
    const buttonsFilter = [...sectionDemos.querySelectorAll('.wil-btn')];
    buttonsFilter.forEach(btn => {
      const attr = btn.getAttribute('data-filter');
      btn.addEventListener('click', () => {
        sectionDemos.style.backgroundImage = `url('${backgroundUrl[attr.slice(1, attr.length)]}')`
      })
    })    




    var $isotope = jQuery('.wil-isotope-wrapper');
    $isotope.each(function () {
      var $grid = jQuery(this).find('.grid');

      $grid.isotope({
        // options...
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
      });

      // bind filter button click
      var $wilSort = jQuery(this).find('.wil-sort');
      jQuery(this).find('.wil-sort').on('click', 'button', function () {
        $wilSort.find('button').removeClass('is-checked');

        var filterValue = jQuery(this).attr('data-filter');
        // use filterFn if matches value
        $grid.isotope({filter: filterValue});
        jQuery(this).addClass('is-checked');
      });

      $wilSort.find('.is-checked').trigger('click');
    });
  });
})(jQuery);
// Change Section
