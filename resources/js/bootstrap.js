import axios from "axios";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";
import intersect from "@alpinejs/intersect";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

window.axios = axios;
Alpine.plugin(collapse);
Alpine.plugin(intersect);

window.Alpine = Alpine;
Alpine.start();

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

document.addEventListener("DOMContentLoaded", function () {
    // Partners Swiper
    console.log("hello");

    new Swiper(".swiper-container", {
        slidesPerView: 5, // Số logo hiển thị cùng lúc
        spaceBetween: 30, // Khoảng cách giữa các logo
        loop: true, // Trượt vô hạn
        autoplay: {
            delay: 2000, // Thời gian giữa các lần trượt
            disableOnInteraction: false, // Không dừng khi người dùng tương tác
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        },
    });
});
