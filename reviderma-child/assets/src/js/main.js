(function($) {
  (function() {
    $(".hamburger-menu").on("click", function() {
      $(".bar").toggleClass("animate");
    });

    $(".hamburger-menu").click(function() {
      $(".content-menu").toggleClass("content-menu-active");
    });

    $(".hamburger-menu").click(function() {
      $(".overlay-menu-hgm").toggleClass("overlay-menu-hgm-active");
    });

    $(".overlay-menu-hgm").click(function() {
      $(".overlay-menu-hgm").toggleClass("overlay-menu-hgm-active");
    });

    $(".overlay-menu-hgm").click(function() {
      $(".content-menu").toggleClass("content-menu-active");
    });

    $(".item-hbg").click(function() {
      $(".overlay-menu-hgm").toggleClass("overlay-menu-hgm-active");
    });

    $(".item-hbg").click(function() {
      $(".content-menu").toggleClass("content-menu-active");
    });

    $(".item-hbg").click(function() {
      $(".bar").toggleClass("animate");
    });

    $(".overlay-menu-hgm").click(function() {
      $(".bar").toggleClass("animate");
    });
  })();

  $(document).ready(function() {
    var owl = $(".slider");
    var post = $(".lista-posts");
    var depo = $(".lista-depoimentos");

    owl.owlCarousel({
      animateOut: "fadeOut",
      animateIn: "fadeIn",
      loop: true,
      items: 1,
      smartSpeed: 450,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true
    });

    post.owlCarousel({
      loop: true,
      items: 1,
      dots: true,
      margin: 5,
      smartSpeed: 450,
      loop: true,
      items: 1,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        1000: {
          items: 5
        }
      }
    });

    depo.owlCarousel({
      animateOut: "fadeOut",
      animateIn: "fadeIn",
      loop: true,
      items: 1,
      dots: false,
      nav: true,
      margin: 10,
      smartSpeed: 450,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      navText: [
        "<i class='fas fa-arrow-left'></i>",
        "<i class='fas fa-arrow-right'></i>"
      ],
      responsive: {
        768: {
          dots: true
        }
      }
    });
  });

  $(window).scroll(function() {
    function elementScrolled(elem) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
      var elemTop = $(elem).offset().top;
      return elemTop <= docViewBottom && elemTop >= docViewTop;
    }

    if (elementScrolled(".qual-objetivo__conteudo")) {
      var els = $(".class1"),
        i = 0,
        f = function() {
          $(els[i++]).addClass("start");
          if (i < els.length) setTimeout(f, 400);
        };
      f();
    }
  });

  var galleryFeed = new Instafeed({
    get: "user",
    userId: 30035308,
    accessToken: "30035308.1677ed0.c75f26f8e9fb42139b6f516755690792",
    resolution: "standard_resolution",
    useHttp: "true",
    limit: 7,
    template:
      '<div class="foto-insta"><a href="{{link}}" target="_blank"><div class="img-featured-container"><div class="img-backdrop"></div><div class="description-container"><p class="caption">{{caption}}</p><span class="likes"><i class="fas fa-heart"></i> {{likes}}</span><span class="comments"><i class="fas fa-comment"></i> {{comments}}</span></div><img src="{{image}}" class="img-responsive"></div></a></div>',
    target: "instafeed-gallery-feed",
    after: function() {
      // disable button if no more results to load
      if (!this.hasNext()) {
        btnInstafeedLoad.setAttribute("disabled", "disabled");
      }
    }
  });
  galleryFeed.run();

  (function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
      v[n].onclick = function() {
        var iframe = document.createElement("iframe");
        iframe.setAttribute(
          "src",
          "//www.youtube.com/embed/" +
            this.dataset.id +
            "?modestbranding=1&autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&rel=" +
            this.dataset.related +
            "&controls=" +
            this.dataset.control +
            "&showinfo=" +
            this.dataset.info
        );
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("id", "youtube-iframe");
        iframe.setAttribute(
          "style",
          "width: 100%; height: 100%; position: absolute; top: 0; left: 0;"
        );
        if (this.dataset.fullscreen == 1) {
          iframe.setAttribute("allowfullscreen", "");
        }
        while (this.firstChild) {
          this.removeChild(this.firstChild);
        }
        this.appendChild(iframe);
      };
    }
  })();

  // menu ao rolar
  $(window).bind("scroll", function() {
    if ($(window).scrollTop() > 350) {
      $(".heading").addClass("mostrar");
    } else if ($(window).scrollTop() < 350) {
      $(".heading").removeClass("mostrar");
    }
  });

  $(document).ready(function() {
    $(".set > a").on("click", function(e) {
      e.preventDefault();
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this)
          .siblings(".content")
          .slideUp(200);
        $(".set > a i")
          .removeClass("fa-minus")
          .addClass("fa-plus");
      } else {
        $(".set > a i")
          .removeClass("fa-minus")
          .addClass("fa-plus");
        $(this)
          .find("i")
          .removeClass("fa-plus")
          .addClass("fa-minus");
        $(".set > a").removeClass("active");
        $(this).addClass("active");
        $(".content").slideUp(200);
        $(this)
          .siblings(".content")
          .slideDown(200);
      }
    });
  });
})(jQuery);
