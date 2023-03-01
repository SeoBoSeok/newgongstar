export default function callPreLoader() {
  const preLoader = document.querySelector('#preloader')

  window.onload = function () {
    preLoader.style.setProperty('display', 'none');
  }
};