export default function setNav() {
  /* -------------------------------------------------------------------------- */
  // * 메인 메뉴 인터랙션

  /* 메인 메뉴 DOM */
  const navMainTrigger = document.querySelector('[data-name="nav-trigger__main"]');
  const navMainCloseBtn = document.querySelector('[data-name="nav-close-btn__main"]');
  const navContainerMain = document.querySelector('[data-name="nav-container__main"]');
  const navMainItems = Array.from(document.querySelectorAll('[data-name="nav-main-item"]'));

  /* 메인 메뉴 상태 */
  let menuClose;

  /* 메인 메뉴 열기 이벤트 */
  navMainTrigger.addEventListener('click', debounce(navMainOpen, 300));

  /* 메인 메뉴 닫기 이벤트 */
  navMainCloseBtn.addEventListener('click', debounce(navMainClose, 300));

  /* 메인 메뉴 상태 설정 */
  async function setMenuStateTrue() { menuClose = true; }

  /* 메인 메뉴 열기 애니메이션 함수 */
  function navMainOpenAnimation() {
    return new Promise((resolve, reject) => {
      navContainerMain.style.setProperty('display', 'block');
      resolve();
    });
  }

  /* 메인 메뉴 닫기 애니메이션 함수 */
  function navMainCloseAnimation() {
    return new Promise((resolve, reject) => {
      navContainerMain.classList.toggle('visible');
      resolve();
    })
  }

  /* 메인 메뉴 열기 함수 */
  async function navMainOpen(e) {
    await navMainOpenAnimation();
    await setMenuStateTrue();

    if (menuClose === true) {
      navContainerMain.classList.toggle('visible');
      setTimeout(() => {
        menuItemsShow();
      }, 500)
    }
  }

  /* 메인 메뉴 닫기 함수 */
  async function navMainClose(e) {
    await menuItemsHide();
    await navMainCloseAnimation();

    navContainerMain.addEventListener('transitionend', () => {
      navContainerMain.style.setProperty('display', 'none');
    });
  }

  /* 메인 메뉴 아이템 표시/숨김 함수 */
  async function menuItemsShow() {
    navMainItems.forEach((elem, index, array) => {
      elem.classList.add(`animated-fade-in`, `animated-delay-${index}s`)
    })
  }

  async function menuItemsHide() {
    navMainItems.forEach((elem, index, array) => {
      elem.classList.remove(`animated-fade-in`)
    })
  }

  /* 이벤트 디바운스 함수 */
  function debounce(callback, interval) {
    let debounceTimeoutId;

    return function (...args) {
      clearTimeout(debounceTimeoutId);
      debounceTimeoutId = setTimeout(() => callback.apply(this, args), interval);
    };
  }

  /* -------------------------------------------------------------------------- */
  // * 프로젝트 의뢰하기 전역 버튼 링크 
  const globalNavProjectRequests = document.querySelectorAll('[data-name="global-nav__project-request"]')
  globalNavProjectRequests.forEach((el) => {
    el.addEventListener('click', (e) => {
      e.preventDefault();
      window.location.href   = '/project-request/'
    })
  })
}