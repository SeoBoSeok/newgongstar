const swiper = new Swiper('[data-name="swiper__lanidng"]', {
  direction: 'horizontal',
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  parallax: true,
  grabCursor: true,
  speed: 750,
  autoplay: {
    disableOnInteraction: false,
    delay: 4000
  },
  mousewheelControl: 1,
  pagination: {
    el: ".landing-image-counter",
    type: "fraction",
  },
  // init: true,
  // cssMode: true,
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: ["-20%", 0, -1],
    },
    next: {
      translate: ["100%", 0, 0],
    }
  },
  on: {
    slideChange: function() {
      if(this.activeIndex != 1) {
        // console.log(`Real Index: ${this.realIndex}`)
        // console.log(`Active Index: ${this.activeIndex}`)
        const animationName = 'smooth-scale-effect';
        let el = this.slides[this.activeIndex];
        el.querySelector('.landing-bg').style.setProperty('animation-name', 'none')
        setTimeout(() => {
          el.querySelector('.landing-bg').style.setProperty('animation-name', animationName)
        }, 100)
      } 
    }
  }
});

export default swiper;