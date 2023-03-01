export default function aosInitialize() {
  window.addEventListener('DOMContentLoaded',
    () => {
      const contentSections = document.querySelectorAll('main > section');
      const contentImages = document.querySelectorAll('main > section img');
      const contentButtons = document.querySelectorAll('main > section button, main > .swiper button');
      const contentParagraphs = document.querySelectorAll('main > section p, main > .swiper p');
      const contentSpans = document.querySelectorAll('main > section span, main > .swiper span');
      const contentHeadlineOne = document.querySelectorAll('main h1');
      const contentHeadlineTwo = document.querySelectorAll('main h2');
      const contentGstarBoardLists = document.querySelectorAll('.gstar-board-list-item');
      const containerPage = document.querySelectorAll('.container__page');
      const headerElems = document.querySelectorAll('.header > *');
      const aosDelayedItemsGroup = document.querySelectorAll('[data-aos-custom-delay-group] [data-aos-custom-target]');
      const aosTargetItems = document.querySelectorAll('[data-aos-custom-target]');

      let aosDefaultDelayDuration = 500;

      const contentDelayedAosItem = {
        "data-aos": "fade-up",
        "data-aos-delay": "500"
      }

      const contentMoreDelayedAosItem = {
        "data-aos": "fade-up",
        "data-aos-delay": "1000"
      }

      function setAttributes(elem, attributes) {
        Object.keys(attributes).forEach((attr) => {
          elem.setAttribute(attr, attributes[attr]);
        });
      }

      headerElems.forEach((el) => {
        // setAttributes(el, contentDelayedAosItem);
      })

      containerPage.forEach((el) => {
        el.setAttribute('data-aos', 'fade');
      })

      contentSections.forEach((el) => {
        el.setAttribute('data-aos', 'fade-up');
      });

      contentImages.forEach((el) => {
        setAttributes(el, contentDelayedAosItem);
      });

      contentButtons.forEach((el) => {
        if (!document.querySelector('body').classList.contains('page__customers')) {
          setAttributes(el, contentMoreDelayedAosItem);
        }
      });

      contentParagraphs.forEach((el) => {
        setAttributes(el, contentMoreDelayedAosItem);
      });

      contentSpans.forEach((el) => {
        if (!document.querySelector('body').classList.contains('page__customers')) {
          const contactUsFormGroupSpans = document.querySelectorAll('.section__request-form .form-group .sub-text');
          if (!el.classList.contains('sub-text')) {
            el.setAttribute('data-aos', 'fade-up');
          }
        }
      });

      contentHeadlineOne.forEach((el) => {
        el.setAttribute('data-aos', 'fade-up');
      });

      contentHeadlineTwo.forEach((el) => {
        el.setAttribute('data-aos', 'fade-up');
      });

      contentGstarBoardLists.forEach((el) => {
        el.setAttribute('data-aos', 'fade-up');
      })

      aosTargetItems.forEach((el) => {
        el.setAttribute('data-aos', 'fade-up');
      })

      aosDelayedItemsGroup.forEach((el) => {
        aosDefaultDelayDuration = aosDefaultDelayDuration * 1.25;
        el.setAttribute('data-aos-delay', parseInt(aosDefaultDelayDuration));
      })

      setTimeout(() => {
        AOS.init({
          // disable: true,
          once: false,
          duration: 500,
          delay: 0,
          // startEvent: 'load',
          // mirror: true,
          offset: 0,
          anchorPlacement: 'top-bottom'
          // 1st elem = elem, 2nd elem = window
        });
      }, 0)
    }
  );
}