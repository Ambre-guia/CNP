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
      items: 1,
      gutter: 5,
      edgePadding: 60,
      autoplay: true,
      autoplayButtonOutput: false,
      autoplayHoverPause: true,
      responsive: {
        640: {
          gutter: 0,
        },
        768: {
          gutter: 5,
        },
        991: {
          gutter: 5,
          items: 5,
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
}
