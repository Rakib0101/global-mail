import "./bootstrap";

import Alpine from "alpinejs";
import Swiper from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Autoplay, Navigation, Pagination } from "swiper/modules";

window.Alpine = Alpine;
window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Autoplay };

Alpine.start();
