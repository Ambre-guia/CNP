jQuery(document).ready(function () {
  init();
});

function init() {
  initEvents();
  initTriggers();
}

function initEvents() {
  //menu top
  jQuery(".mast-head .hamburger").click(function (event) {
    jQuery(this).toggleClass("is-active");

    jQuery("body").toggleClass("menu-collapse");
    jQuery(".ui-helper-hidden-accessible").hide();
  });

  jQuery(".mast-head nav .search").click(function (event) {
    event.preventDefault();
    jQuery(".mast-head .search-wrapper").show();
  });

  jQuery(".mast-head .search-wrapper form button.close").click(function (
    event
  ) {
    event.preventDefault();
    jQuery(".mast-head .search-wrapper").hide();
  });

  //submenu top
  jQuery("body .mast-head nav a").click(function (event) {
    // console.log('ok');
    if (jQuery(".hamburger").hasClass("is-active")) {
      jQuery(".hamburger").toggleClass("is-active");
      jQuery("body").toggleClass("menu-collapse");
    }
  });

  // menu latéral
  jQuery(".sidebar-nav > ul > li > a").click(function (event) {
    event.preventDefault();
    console.log("ok");
    jQuery(this).parent("li").children("div").slideToggle();
    jQuery(this).toggleClass("active");
  });
}

function initTriggers() {
  if (jQuery(".logo-slider")[0]) {
    var slider = tns({
      container: ".logo-slider",
      loop: true,
      controls: false,
      nav: true,
      navPosition: "bottom",
      navPosition: "bottom",
      items: 1,
      center: true,
      autoplay: true,
      autoplayButtonOutput: false,
      autoplayHoverPause: true,
      responsive: {
        640: {
          items: 2,
        },
        768: {
          items: 2,
        },
        991: {
          items: 3,
        },
      },
    });
  }
  if (jQuery(".agenda-slider")[0]) {
    var slider = tns({
      container: ".agenda-slider",
      controls: true,
      nav: false,
      navPosition: "bottom",
      navPosition: "bottom",
      items: 1,
      gutter: 100,
      prevButton: ".agenda-ticker-prev",
      nextButton: ".agenda-ticker-next",
      responsive: {
        640: {
          gutter: 0,
        },
        768: {
          gutter: 30,
        },
        991: {
          gutter: 10,
          items: 2,
        },
      },
    });
  }
  if (jQuery(".news-slider")[0]) {
    var slider = tns({
      container: ".news-slider",
      controls: false,
      navPosition: "bottom",
      navPosition: "bottom",
      items: 1,
      edgePadding: 60,
      gutter: 30,
      mouseDrag: true,
      responsive: {
        640: {
          edgePadding: 30,
          gutter: 15,
          items: 2,
        },
        768: {
          items: 2,
          edgePadding: 60,
          gutter: 15,
        },
        992: {
          items: 3,
          gutter: 30,
          edgePadding: 0,
        },
      },
    });
  }
  // Focus-visible change
  jQuery(".mast-head .search-wrapper form #search")
    .focus(function () {
      jQuery(".mast-head .search-wrapper form").addClass("focus-visible");
    })
    .blur(function () {
      jQuery(".mast-head .search-wrapper form").removeClass("focus-visible");
    });
}
