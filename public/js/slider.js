
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    }
});

var swiper = new Swiper(".mySwipersec", {
    slidesPerView: 10,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }
  });

  var swiper = new Swiper(".mySwiperP", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper = new Swiper(".mySwipermaxx", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".maxx .swiper-pagination",
      clickable: true,
    },
    navigation : {
      nextEl : ".swiper-button-next",
      prevEl : ".swiper-button-prev",
    }
  });

  var swiper = new Swiper(".mySwiper4", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: ".maxx .swiper-pagination",
      clickable: true,
    },
  });


