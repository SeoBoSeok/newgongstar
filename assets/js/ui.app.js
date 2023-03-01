import uiAppNav from "./ui.app.nav.js";
import uiAppSwiper from "./ui.app.swiper.js";
import uiAppAos from "./ui.app.aos.js";
import uiPreLoader from "./ui.app.preloader.js";

/* SET NAV */
uiAppNav();

/* CALL AOS */
uiAppAos();

/* CALL SWIPER */
uiAppSwiper.init();

/* CALL PRELOADER */
uiPreLoader();