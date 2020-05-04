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
        };
      }

      function closeMenu({typeAnimation} = defaultProps) {
        return () => {
          navMenu.classList.remove(`nav__menu--collapsed-${typeAnimation}`);
          navOverlay.classList.remove("show");
        };
      }

      collapseButton.addEventListener("click", toggleMenu());
    }

    // Section Demo

    jQuery('.section-demos').find('.wil-btn').click(function() {
        const attrBg = jQuery(this).data('bg');
        jQuery('.section-demos').css('background-image', `url('${attrBg}')`);
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
