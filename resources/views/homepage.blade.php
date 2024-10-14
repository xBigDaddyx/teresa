<x-base-app-layout>
    <!-- start hero section -->
    <section class="cover-background full-screen ipad-top-space-margin py-0 md-h-750px sm-h-650px"
        style="background-image:url({{ asset('storage/images/teresa_1920x760_02.jpg') }});">
        <div class="opacity-very-light bg-black"></div>
        <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block">
            <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff">
                <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                    <animate attributeName="d" dur="5s"
                        values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                        repeatCount="indefinite" />
                </path>
            </svg>
        </div>
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-xl-6 col-lg-8 col-md-10 position-relative z-index-1"
                    data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex w-70 sm-w-100"><i
                            class="bi bi-megaphone text-white icon-small me-10px"></i>Grow your business with us</span>
                    <h1 class="text-white fw-600 ls-minus-2px mb-25px">We craft unique business ideas.</h1>


                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->
    <!-- start section -->
    <section class="pt-3 sm-pt-50px">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-7"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                {{-- <!-- start features box item -->
                <div class="col icon-with-text-style-01 md-mb-30px">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-20px">
                            <img src="https://via.placeholder.com/80x80" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-18 text-dark-gray fw-700 mb-5px">Grow your business</span>
                            <p class="w-80 xl-w-90 lg-w-100">We believe in challenges and so we have made challenges.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-01 md-mb-30px">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-20px">
                            <img src="https://via.placeholder.com/80x80" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-18 text-dark-gray fw-700 mb-5px">Cost savings ideas</span>
                            <p class="w-80 xl-w-90 lg-w-100">We also help our clients with social media strategy.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-01 md-mb-30px">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-20px">
                            <img src="https://via.placeholder.com/80x80" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-18 text-dark-gray fw-700 mb-5px">Boost performance</span>
                            <p class="w-80 xl-w-90 lg-w-100">We deliver email marketing campaigns to your audience.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item --> --}}
            </div>
            <div class="row mb-10 align-items-center">
                <div class="col-lg-5 position-relative md-mb-20">
                    <div class="w-70 xs-w-80" data-animation-delay="50">
                        <img src="{{ asset('storage/images/logo/teresa_fuse_logo.png') }}" alt=""
                            class="border-radius-8px w-100">
                    </div>
                    <div class="w-60 overflow-hidden position-absolute right-minus-15px xs-right-15px xs-w-60 bottom-minus-50px"
                        data-animation-delay="250" data-bottom-top="transform: translateY(50px)"
                        data-top-bottom="transform: translateY(-50px)">
                        <img src="{{ asset('storage/images/logo/teresa_beverly_logo.png') }}" alt=""
                            class="border-radius-8px w-100 box-shadow-quadruple-large" />
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-lg-1"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i
                            class="bi bi-award fs-16 me-5px"></i>Creative approach</span>
                    <h3 class="text-dark-gray fs-50 fw-700 ls-minus-2px">Powerful agency for corporate business.</h3>
                    <p class="mb-40px sm-mb-25px">We strive to develop real-world application solutions that are ideal
                        for
                        small to large projects with bespoke project requirements. We create compelling web designs,
                        which are the right-fit for your target groups and also deliver optimized.</p>
                    <div class="progress-bar-style-02">
                        <!-- start progress bar item -->
                        <div class="progress mb-15px border-radius-50px fw-700 fs-11 lh-11 text-white bg-white">
                            <div class="progress-bar bg-gradient-flamingo-red-transparent m-0" role="progressbar"
                                aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" aria-label="business">
                                <span class="progress-bar-percent text-flamingo">98%</span>
                            </div>
                            <div class="progress-bar-title text-uppercase">business growth</div>
                        </div>
                        <!-- end progress bar item -->
                        <!-- start progress bar item -->
                        <div class="progress border-radius-50px fw-700 fs-11 lh-11 text-white bg-white">
                            <div class="progress-bar bg-gradient-base-color-transparent m-0" role="progressbar"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" aria-label="technology">
                                <span class="progress-bar-percent text-base-color">85%</span>
                            </div>
                            <div class="progress-bar-title text-uppercase">new technology</div>
                        </div>
                        <!-- end progress bar item -->
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center ps-3 pe-3 xs-mt-40px"
                data-anime='{ "el": "childs", "scale": [0.8,1], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px"
                        height="64px" viewBox="0 0 128 128" version="1.1">
                        <g id="surface1">
                            <path fill="#353642" style=" stroke:none;fill-rule:nonzero;fill:#353642;fill-opacity:1;"
                                d="M 26.027344 0.136719 C 25.824219 0.214844 20.085938 3.484375 13.28125 7.394531 C 5.035156 12.136719 0.800781 14.632812 0.574219 14.867188 C 0.394531 15.070312 0.191406 15.421875 0.128906 15.644531 C -0.0429688 16.21875 -0.0546875 100.347656 0.117188 100.953125 C 0.179688 101.1875 0.382812 101.53125 0.566406 101.722656 C 1.011719 102.191406 50.238281 130.496094 50.835938 130.632812 C 51.113281 130.699219 51.425781 130.6875 51.734375 130.601562 C 52.40625 130.433594 101.503906 102.191406 101.941406 101.730469 C 102.121094 101.53125 102.324219 101.1875 102.390625 100.953125 C 102.476562 100.675781 102.507812 96.277344 102.507812 87.015625 L 102.507812 73.480469 L 114.476562 66.605469 C 125.761719 60.117188 126.453125 59.710938 126.742188 59.265625 L 127.039062 58.785156 L 127.039062 44.207031 C 127.039062 28.335938 127.070312 29.230469 126.441406 28.65625 C 126.273438 28.507812 120.523438 25.152344 113.652344 21.195312 L 101.171875 14.015625 L 99.785156 14.015625 L 87.574219 21.027344 C 80.851562 24.894531 75.136719 28.199219 74.859375 28.378906 C 74.582031 28.5625 74.25 28.902344 74.113281 29.148438 L 73.867188 29.574219 L 73.8125 43.308594 L 73.761719 57.046875 L 63.679688 62.855469 C 58.132812 66.042969 53.515625 68.683594 53.417969 68.707031 C 53.238281 68.757812 53.226562 67.449219 53.226562 42.203125 L 53.226562 15.632812 L 52.960938 15.175781 C 52.628906 14.621094 54.121094 15.507812 39.136719 6.894531 C 26.570312 -0.332031 26.871094 -0.179688 26.027344 0.136719 Z M 37.578125 10.65625 C 42.835938 13.671875 47.136719 16.167969 47.136719 16.199219 C 47.136719 16.230469 42.527344 18.894531 36.894531 22.132812 L 26.644531 28.015625 L 16.414062 22.132812 C 10.792969 18.894531 6.1875 16.230469 6.1875 16.199219 C 6.1875 16.167969 10.785156 13.503906 16.40625 10.273438 L 26.613281 4.402344 L 27.316406 4.785156 C 27.710938 5 32.332031 7.640625 37.578125 10.65625 Z M 110.730469 24.191406 C 116.265625 27.378906 120.84375 30.011719 120.886719 30.054688 C 121.003906 30.160156 100.703125 41.828125 100.425781 41.816406 C 100.148438 41.808594 80.097656 30.246094 80.105469 30.105469 C 80.117188 29.945312 100.289062 18.339844 100.492188 18.371094 C 100.585938 18.394531 105.195312 21.015625 110.730469 24.191406 Z M 14.828125 25.875 L 24.585938 31.492188 L 24.640625 59.304688 L 24.691406 87.121094 L 24.929688 87.496094 C 25.054688 87.695312 25.289062 87.964844 25.460938 88.089844 C 25.621094 88.207031 31.050781 91.300781 37.523438 94.953125 L 49.28125 101.59375 L 49.28125 113.359375 C 49.28125 119.816406 49.238281 125.113281 49.183594 125.113281 C 49.140625 125.113281 38.976562 119.296875 26.601562 112.175781 L 4.105469 99.238281 L 4.074219 59.464844 L 4.054688 19.703125 L 4.554688 19.980469 C 4.84375 20.132812 9.460938 22.785156 14.828125 25.875 Z M 49.28125 45.453125 L 49.28125 71.082031 L 48.886719 71.339844 C 48.351562 71.679688 28.8125 82.910156 28.746094 82.910156 C 28.714844 82.910156 28.691406 71.339844 28.691406 57.195312 L 28.703125 31.492188 L 38.910156 25.621094 C 44.523438 22.390625 49.152344 19.769531 49.207031 19.789062 C 49.246094 19.8125 49.28125 31.363281 49.28125 45.453125 Z M 88.222656 39.558594 L 98.453125 45.441406 L 98.453125 57.101562 C 98.453125 68.164062 98.441406 68.757812 98.273438 68.695312 C 98.164062 68.652344 93.535156 66 87.980469 62.800781 L 77.867188 56.992188 L 77.867188 45.335938 C 77.867188 38.917969 77.898438 33.675781 77.929688 33.675781 C 77.972656 33.675781 82.601562 36.320312 88.222656 39.558594 Z M 123.09375 45.261719 C 123.09375 51.644531 123.050781 56.910156 123.007812 56.960938 C 122.933594 57.078125 102.699219 68.738281 102.570312 68.738281 C 102.539062 68.738281 102.507812 63.496094 102.507812 57.078125 L 102.507812 45.421875 L 112.714844 39.546875 C 118.335938 36.320312 122.964844 33.675781 123.007812 33.675781 C 123.0625 33.675781 123.09375 38.886719 123.09375 45.261719 Z M 86.230469 66.46875 C 94.835938 71.421875 96.320312 72.308594 96.171875 72.425781 C 96.074219 72.488281 92.8125 74.363281 88.929688 76.582031 C 85.046875 78.796875 74.988281 84.53125 66.570312 89.328125 L 51.273438 98.054688 L 50.785156 97.789062 C 47.863281 96.191406 30.910156 86.546875 30.910156 86.472656 C 30.902344 86.3125 75.765625 60.53125 75.945312 60.597656 C 76.03125 60.628906 80.660156 63.269531 86.230469 66.46875 Z M 98.433594 87.558594 L 98.398438 99.238281 L 75.914062 112.175781 C 63.542969 119.296875 53.375 125.113281 53.324219 125.113281 C 53.269531 125.113281 53.226562 120.359375 53.226562 113.359375 L 53.226562 101.59375 L 75.765625 88.742188 C 88.148438 81.675781 98.324219 75.890625 98.378906 75.878906 C 98.421875 75.878906 98.441406 81.132812 98.433594 87.558594 Z M 98.433594 87.558594 " />
                        </g>
                    </svg>

                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <svg fill="currentColor" viewBox="0 0 128 26"
                        class="h-auto w-24 overflow-visible min-[400px]:w-28 md:w-36">
                        {{-- F --}}
                        <path
                            class="transition duration-300 will-change-transform group-hover/filament:-translate-x-[1.2rem] motion-reduce:transition-none"
                            d="M4.97547 25.0814C5.22893 23.8838 5.47136 22.7255 5.70278 21.6063C5.89563 20.6736 6.11143 19.6399 6.3502 18.5051L6.49621 17.8122L7.67688 12.1042H12.199L12.9924 8.32689H8.2649C8.29796 8.15901 8.34755 7.90998 8.41367 7.57982C8.47979 7.24965 8.53489 6.97265 8.57897 6.74881C8.75529 5.88702 9.07486 5.24068 9.5377 4.80978C10.0005 4.37889 10.6397 4.16344 11.4552 4.16344C11.918 4.16344 12.3753 4.2194 12.8271 4.33132C13.2789 4.44325 13.7087 4.59993 14.1165 4.80139L15.3066 0.772252C14.954 0.615563 14.5435 0.47846 14.0751 0.360944C13.6068 0.243427 13.1136 0.153891 12.5957 0.0923344C12.0778 0.0307782 11.5598 0 11.0419 0C10.2264 0 9.44403 0.0979305 8.69468 0.293791C7.94532 0.489652 7.26209 0.819818 6.64498 1.28429C6.02787 1.74876 5.49065 2.37831 5.03332 3.17295C4.576 3.96758 4.22612 4.95808 3.98368 6.14444C3.8294 6.8943 3.66135 7.70853 3.47952 8.5871L3.53341 8.32689H0.793431L0 12.1042H2.7438L2.70361 12.2966C2.63044 12.6453 2.55815 12.9905 2.48674 13.3321L2.38029 13.8418C2.20397 14.6868 2.04419 15.4562 1.90093 16.1501L1.5538 17.8289C1.26728 19.2168 1.00556 20.4731 0.768636 21.5979C0.531709 22.7227 0.292026 23.8838 0.0495894 25.0814H4.97547Z"
                            fill="#353642" />
                        {{-- I --}}
                        <path
                            class="transition duration-300 will-change-transform group-hover/filament:scale-90 motion-reduce:transition-none"
                            d="M19.0468 8.29404L18.5751 9.50848L20.7854 11.0626C20.9046 11.1457 20.9681 11.3013 20.9506 11.4576L20.9429 11.5045L20.7943 12.1851C20.7569 12.3565 20.627 12.4804 20.4737 12.4907L18.5227 12.6217L20.1912 13.785C20.3103 13.8681 20.3739 14.0236 20.3564 14.18L20.3487 14.2269L20.2001 14.9075C20.1627 15.0789 20.0328 15.2028 19.8795 15.2131L17.9285 15.3444L19.597 16.5074C19.7161 16.5905 19.7797 16.746 19.7622 16.9024L19.7545 16.9493L19.6059 17.6299C19.5685 17.8013 19.4385 17.9252 19.2853 17.9355L17.3346 18.0667L19.0028 19.2298C19.1219 19.3129 19.1855 19.4684 19.168 19.6248L19.1602 19.6717L19.0117 20.3523C18.9743 20.5237 18.8443 20.6476 18.6911 20.6579L16.7403 20.789L18.4086 21.9522C18.5277 22.0353 18.5913 22.1908 18.5738 22.3472L18.566 22.3941L18.4175 23.0747C18.3801 23.2461 18.2501 23.37 18.0969 23.3803L15.3609 23.6216L15.0204 25.0814H12.8359L13.5114 22.3993C13.5488 22.2279 13.6787 22.104 13.832 22.0937L15.7828 21.962L14.1145 20.7994C13.9954 20.7163 13.9318 20.5607 13.9493 20.4044L13.957 20.3575L14.1056 19.6769C14.143 19.5055 14.2729 19.3816 14.4262 19.3713L16.3767 19.2397L14.7087 18.077C14.5896 17.9939 14.526 17.8384 14.5435 17.682L14.5513 17.6351L14.6998 16.9545C14.7372 16.7831 14.8672 16.6592 15.0204 16.6489L16.971 16.5174L15.3029 15.3546C15.1838 15.2715 15.1202 15.116 15.1377 14.9596L15.1455 14.9127L15.294 14.2321C15.3314 14.0607 15.4614 13.9368 15.6146 13.9265L17.5652 13.7951L15.8971 12.6322C15.778 12.5491 15.7144 12.3936 15.7319 12.2372L15.7397 12.1903L15.8882 11.5097C15.9256 11.3383 16.0556 11.2144 16.2088 11.2041L18.1595 11.0728L16.4913 9.90977C16.3722 9.82672 16.3086 9.67117 16.3262 9.51478L16.3339 9.46791L16.6376 8.38675L19.0468 8.29404ZM20.7269 0.151123C21.6226 0.151123 22.2863 0.456106 22.7179 1.06607C23.1496 1.67604 23.2791 2.40632 23.1064 3.25692C22.9122 4.23063 22.5102 4.88816 21.9005 5.22952C21.2907 5.57087 20.5326 5.74155 19.6261 5.74155C18.7412 5.74155 18.0749 5.47574 17.627 4.94412C17.1792 4.4125 17.0524 3.65424 17.2466 2.66934C17.4301 1.77397 17.832 1.13043 18.4526 0.738706C19.0731 0.346984 19.8312 0.151123 20.7269 0.151123Z"
                            fill="#353642" />
                        {{-- L --}}
                        <path
                            class="transition duration-300 will-change-transform group-hover/filament:translate-x-3 motion-reduce:transition-none"
                            d="M27.1244 21.6063C26.893 22.7255 26.656 23.8838 26.4136 25.0814H21.4712C21.7246 23.8838 21.9671 22.7227 22.1985 21.5979C22.4299 20.4731 22.6944 19.2167 22.9919 17.8289L24.9094 8.52834C25.2069 7.16291 25.4934 5.81427 25.7689 4.48241C26.0444 3.15056 26.3199 1.81311 26.5954 0.470059L31.6205 0.0335693C31.345 1.35423 31.0612 2.71127 30.7692 4.10468C30.4772 5.49809 30.1714 6.96705 29.8518 8.51155L27.9178 17.8121C27.6203 19.2223 27.3558 20.487 27.1244 21.6063Z"
                            fill="#353642" />
                        {{-- AMENT --}}
                        <path
                            class="transition duration-300 will-change-transform group-hover/filament:translate-x-3 motion-reduce:transition-none"
                            d="M40.1595 7.8736C41.7464 7.8736 43.0522 8.14221 44.0771 8.67943C45.1019 9.21665 45.8127 9.9805 46.2094 10.971C46.6061 11.9615 46.6557 13.1395 46.3582 14.5049C46.248 15.0645 46.1323 15.6325 46.011 16.2089C45.8898 16.7853 45.7631 17.3868 45.6309 18.0136L45.3333 19.4238C45.157 20.2632 44.9724 21.1474 44.7796 22.0763C44.5867 23.0053 44.3746 24.0069 44.1432 25.0814H39.8785L40.0934 22.8486H39.7132C39.3055 23.4417 38.8564 23.9314 38.366 24.3175C37.8756 24.7036 37.3439 24.9946 36.7709 25.1905C36.1979 25.3864 35.5807 25.4843 34.9195 25.4843C33.8727 25.4843 32.9966 25.2241 32.2913 24.7036C31.586 24.1832 31.0957 23.4921 30.8202 22.6303C30.5447 21.7685 30.5171 20.8284 30.7375 19.8099C30.9028 19.0265 31.17 18.3717 31.5392 17.8457C31.9084 17.3197 32.3547 16.8888 32.8781 16.553C33.4016 16.2173 33.9801 15.9515 34.6137 15.7556C35.2474 15.5597 35.9058 15.4114 36.5891 15.3107L41.7629 14.4881C41.8731 13.9845 41.8318 13.5452 41.6389 13.1702C41.4461 12.7953 41.1017 12.5043 40.6058 12.2973C40.1099 12.0902 39.4763 11.9867 38.7049 11.9867C38.3082 11.9867 37.8866 12.0175 37.4403 12.079C36.994 12.1406 36.5284 12.2301 36.0436 12.3476C35.5587 12.4651 35.06 12.6106 34.5476 12.7841C34.0352 12.9576 33.509 13.1618 32.969 13.3969L33.7459 8.9984C34.1426 8.8641 34.5945 8.73259 35.1014 8.60388C35.6083 8.47517 36.1428 8.35486 36.7048 8.24294C37.2668 8.13102 37.8426 8.04148 38.4321 7.97433C39.0217 7.90718 39.5975 7.8736 40.1595 7.8736ZM41.1513 16.7545C40.997 16.8664 40.8097 16.9755 40.5893 17.0819C40.3689 17.1882 40.0658 17.2945 39.6801 17.4008C39.2944 17.5072 38.771 17.6331 38.1098 17.7786C37.68 17.8793 37.2888 17.9968 36.9362 18.1311C36.5835 18.2654 36.2915 18.4557 36.0601 18.7019C35.8287 18.9481 35.6744 19.2671 35.5973 19.6588C35.4871 20.2744 35.5918 20.7529 35.9113 21.0942C36.2309 21.4356 36.6662 21.6062 37.2172 21.6062C37.6139 21.6062 38.0134 21.5195 38.4156 21.346C38.8178 21.1726 39.2035 20.9235 39.5727 20.599C39.9419 20.2744 40.2807 19.8883 40.5893 19.4406L41.1513 16.7545ZM65.1814 10.8634C65.0078 10.0209 64.6549 9.34892 64.1227 8.84731C63.4339 8.19817 62.4724 7.8736 61.2382 7.8736C60.4778 7.8736 59.7478 8.0079 59.048 8.27651C58.3482 8.54512 57.7036 8.91166 57.114 9.37613C56.5245 9.8406 56.0258 10.3582 55.6181 10.929H55.2048L55.5519 8.07506L51.3864 8.32688C51.0999 9.72589 50.8189 11.0773 50.5434 12.3812C50.2679 13.6851 50.009 14.9414 49.7665 16.1501L49.4194 17.8289C49.1219 19.2167 48.8574 20.4731 48.626 21.5979C48.3945 22.7227 48.1521 23.8838 47.8987 25.0814H52.8411C53.0835 23.8838 53.3204 22.731 53.5518 21.623C53.7833 20.515 54.0312 19.3343 54.2957 18.0808L55.0065 14.6056C55.3591 14.1915 55.7145 13.8222 56.0726 13.4976C56.4308 13.173 56.8055 12.9156 57.1967 12.7254C57.5879 12.5351 58.0039 12.44 58.4447 12.44C59.2161 12.44 59.7092 12.7449 59.9241 13.3549C60.139 13.9649 60.1417 14.7735 59.9324 15.7808L59.453 18.0975C59.1885 19.351 58.9461 20.5262 58.7257 21.623C58.5053 22.7199 58.2683 23.8726 58.0149 25.0814H62.9408C63.1942 23.8838 63.4394 22.7227 63.6764 21.5979C63.9133 20.4731 64.175 19.2167 64.4615 17.8289C64.5938 17.1798 64.7232 16.553 64.85 15.9487C64.9767 15.3443 65.0896 14.8071 65.1888 14.337L65.1654 14.4463L65.2003 14.4074C65.4366 14.1475 65.6754 13.905 65.9166 13.6799L66.098 13.5144C66.4616 13.1898 66.8391 12.9296 67.2303 12.7337C67.6215 12.5379 68.0375 12.44 68.4783 12.44C69.2496 12.44 69.7428 12.7449 69.9577 13.3549C70.1726 13.9649 70.1753 14.7735 69.9659 15.7808L69.4866 18.0975C69.2331 19.3622 68.9934 20.5402 68.7675 21.6314C68.5416 22.7227 68.3019 23.8726 68.0485 25.0814H72.9909C73.2333 23.8838 73.4703 22.7255 73.7017 21.6062C73.9331 20.487 74.1976 19.2279 74.4951 17.8289C74.6273 17.1798 74.7568 16.553 74.8836 15.9487C75.0103 15.3443 75.1232 14.8071 75.2224 14.337C75.6412 12.3784 75.5089 10.8115 74.8257 9.63635C74.1425 8.46118 72.9578 7.8736 71.2718 7.8736C70.5114 7.8736 69.7786 8.0107 69.0733 8.28491C68.3681 8.55911 67.7151 8.93125 67.1145 9.40132C66.514 9.87138 65.9988 10.403 65.569 10.9962H65.2065L65.1814 10.8634ZM86.5493 7.8736C88.2795 7.8736 89.69 8.19257 90.781 8.83052C91.8719 9.46847 92.6103 10.3638 92.9959 11.5166C93.3816 12.6694 93.3872 14.0124 93.0125 15.5458C92.9243 15.9151 92.8334 16.262 92.7397 16.5866C92.6695 16.83 92.5946 17.0672 92.515 17.298L92.4339 17.5267H82.3145L82.3113 17.593C82.288 18.2334 82.3811 18.7905 82.5904 19.2643C82.9045 19.975 83.4252 20.5066 84.1525 20.8592C84.8798 21.2117 85.7724 21.388 86.8303 21.388C87.2932 21.388 87.8083 21.346 88.3759 21.2621C88.9434 21.1782 89.5082 21.0494 90.0702 20.876C90.6322 20.7025 91.1501 20.4814 91.624 20.2128L90.9628 24.477C90.6652 24.6561 90.2575 24.824 89.7396 24.9807C89.2216 25.1373 88.6238 25.2661 87.9461 25.3668C87.2684 25.4675 86.5383 25.5179 85.7559 25.5179C83.7723 25.5179 82.1166 25.1289 80.7887 24.3511C79.4608 23.5733 78.5241 22.468 77.9786 21.0355C77.4331 19.6029 77.3588 17.9017 77.7555 15.9319C78.0861 14.309 78.6481 12.8932 79.4415 11.6845C80.2349 10.4758 81.2322 9.53842 82.4334 8.87249C83.6346 8.20656 85.0065 7.8736 86.5493 7.8736ZM86.6485 11.4159C86.0865 11.4159 85.5383 11.567 85.0038 11.8692C84.4693 12.1713 83.9927 12.6414 83.574 13.2794C83.3227 13.6621 83.1072 14.1114 82.9273 14.6271L82.8777 14.7744L88.8514 14.6478L88.8702 14.5036C88.9521 13.767 88.8452 13.1071 88.5494 12.5239C88.1748 11.7852 87.5411 11.4159 86.6485 11.4159ZM99.102 25.0814C99.3445 23.8838 99.5814 22.7338 99.8128 21.6314C100.044 20.529 100.292 19.3455 100.557 18.0808L101.267 14.6056C101.62 14.1915 101.981 13.8222 102.35 13.4976C102.719 13.173 103.105 12.9156 103.507 12.7254C103.909 12.5351 104.347 12.44 104.821 12.44C105.692 12.44 106.243 12.7449 106.474 13.3549C106.706 13.9649 106.711 14.7735 106.491 15.7808L106.011 18.0975C105.758 19.351 105.518 20.5262 105.292 21.623C105.067 22.7199 104.827 23.8726 104.573 25.0814H109.516C109.769 23.8838 110.014 22.7227 110.251 21.5979C110.488 20.4731 110.745 19.2167 111.02 17.8289C111.163 17.1798 111.298 16.553 111.425 15.9487C111.552 15.3443 111.665 14.8071 111.764 14.337C112.172 12.3784 112.028 10.8115 111.334 9.63635C110.64 8.46118 109.4 7.8736 107.615 7.8736C106.832 7.8736 106.08 8.0079 105.359 8.27651C104.637 8.54512 103.978 8.91166 103.383 9.37613C102.788 9.8406 102.287 10.3582 101.879 10.929H101.466L101.813 8.07506L97.6474 8.32688C97.3609 9.72589 97.0799 11.0801 96.8044 12.3896C96.5289 13.6991 96.2699 14.9526 96.0275 16.1501L95.6804 17.8289C95.3938 19.2056 95.1321 20.4591 94.8952 21.5895C94.6583 22.7199 94.4131 23.8838 94.1596 25.0814H99.102ZM120.965 25.5347C121.362 25.5347 121.791 25.4983 122.254 25.4255C122.717 25.3528 123.15 25.2577 123.552 25.1401C123.954 25.0226 124.271 24.8855 124.502 24.7288L125.031 20.6158C124.601 20.9179 124.174 21.1306 123.75 21.2537C123.326 21.3768 122.937 21.4384 122.585 21.4384C121.78 21.4384 121.232 21.1586 120.94 20.599C120.648 20.0394 120.618 19.2223 120.849 18.1479L122.097 12.1042H127.015L127.808 8.32688H122.884L122.917 8.16949C122.989 7.83058 123.057 7.50308 123.123 7.18699L123.188 6.87471C123.359 6.05209 123.527 5.25186 123.692 4.47401C123.858 3.69617 124.028 2.87075 124.205 1.99777L119.147 2.88754C118.915 3.99555 118.692 5.06999 118.477 6.11085C118.348 6.73537 118.208 7.40219 118.058 8.11132L118.012 8.32688H115.345L114.551 12.1042H117.227L117.206 12.2058L117.146 12.4987C116.97 13.3661 116.802 14.1775 116.642 14.933C116.483 15.6885 116.331 16.4159 116.188 17.1154C116.044 17.8149 115.896 18.5284 115.741 19.2559C115.444 20.6773 115.477 21.8525 115.841 22.7814C116.204 23.7104 116.83 24.4015 117.717 24.8547C118.604 25.308 119.687 25.5347 120.965 25.5347Z"
                            fill="#353642" />
                    </svg>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 128 128">
                        <path style="fill-rule:evenodd;fill:#fb70a9;fill-opacity:1"
                            d="M108.566 83.547c-1.937 2.926-3.406 6.527-7.34 6.527-6.624 0-6.98-10.203-13.609-10.203-6.625 0-6.265 10.203-12.887 10.203-6.625 0-6.98-10.203-13.609-10.203-6.625 0-6.266 10.203-12.887 10.203-6.625 0-6.98-10.203-13.605-10.203-6.629 0-6.27 10.203-12.89 10.203-2.083 0-3.544-1.008-4.778-2.39-4.738-8.239-7.465-17.895-7.465-28.22 0-30.222 23.367-54.722 52.191-54.722 28.825 0 52.192 24.5 52.192 54.723 0 8.64-1.91 16.816-5.313 24.082Zm0 0" />
                        <path style="fill-rule:evenodd;fill:#4e56a6;fill-opacity:1"
                            d="M40.844 78.145v22.668c0 4.066-3.301 7.363-7.371 7.363a7.365 7.365 0 0 1-7.371-7.364V73.45c1.375-2.523 2.945-4.707 5.78-4.707 4.61 0 6.223 5.79 8.962 9.403Zm27.843 1.183v35.844a8.185 8.185 0 0 1-8.187 8.183c-4.523 0-8.191-3.664-8.191-8.183v-40.57c1.543-2.973 3.132-5.86 6.39-5.86 5.16 0 6.563 7.242 9.989 10.586Zm26.211-.66v26.023c0 4.067-3.3 7.364-7.37 7.364-4.071 0-7.372-3.297-7.372-7.364V72.707c1.281-2.195 2.809-3.965 5.364-3.965 4.84 0 6.375 6.38 9.378 9.926Zm0 0" />
                        <path style="fill-rule:evenodd;fill:#000;fill-opacity:.298039"
                            d="M40.844 85.094c-1.309-1.602-2.856-2.79-5.094-2.79-5.316 0-6.293 6.696-9.648 9.712V63.145a7.365 7.365 0 0 1 7.37-7.364c4.071 0 7.372 3.297 7.372 7.364Zm27.843.515c-1.394-1.855-3.023-3.304-5.496-3.304-5.914 0-6.457 8.285-10.882 10.578v-12.77c0-4.52 3.668-8.183 8.191-8.183a8.185 8.185 0 0 1 8.188 8.183Zm26.211-1.433c-1.136-1.117-2.48-1.871-4.265-1.871-5.73 0-6.418 7.777-10.477 10.343V66.734a7.371 7.371 0 0 1 14.742 0Zm0 0" />
                        <path style="fill-rule:evenodd;fill:#fb70a9;fill-opacity:1"
                            d="M108.566 83.547c-1.937 2.926-3.406 6.527-7.34 6.527-6.624 0-6.98-10.203-13.609-10.203-6.625 0-6.265 10.203-12.887 10.203-6.625 0-6.98-10.203-13.609-10.203-6.625 0-6.266 10.203-12.887 10.203-6.625 0-6.98-10.203-13.605-10.203-6.629 0-6.27 10.203-12.89 10.203-2.083 0-3.544-1.008-4.778-2.39-4.738-8.239-7.465-17.895-7.465-28.22 0-30.222 23.367-54.722 52.191-54.722 28.825 0 52.192 24.5 52.192 54.723 0 8.64-1.91 16.816-5.313 24.082Zm0 0" />
                        <path style="fill-rule:evenodd;fill:#e24ca6;fill-opacity:1"
                            d="M97.273 88.984c13.676-20.332 14.028-42.879 1.059-67.652 9.613 9.844 15.547 23.348 15.547 38.25 0 8.61-1.98 16.75-5.508 23.992-2.004 2.91-3.531 6.5-7.61 6.5a5.947 5.947 0 0 1-3.488-1.09Zm0 0" />
                        <path style="fill-rule:evenodd;fill:#fff;fill-opacity:1"
                            d="M58.89 73.117c18.15 0 25.79-10.52 25.79-25.46 0-14.942-11.547-28.692-25.79-28.692-14.245 0-25.792 13.75-25.792 28.691 0 14.942 7.64 25.461 25.793 25.461Zm0 0" />
                        <path style="fill-rule:evenodd;fill:#030776;fill-opacity:1"
                            d="M61.625 37.836c0 5.89-4.332 10.668-9.672 10.668-5.344 0-9.672-4.777-9.672-10.668 0-5.89 4.328-10.668 9.672-10.668 5.34 0 9.672 4.777 9.672 10.668Zm0 0" />
                        <path style="fill-rule:evenodd;fill:#fff;fill-opacity:1"
                            d="M55.176 35.375c0 2.719-2.164 4.922-4.836 4.922s-4.836-2.203-4.836-4.922 2.164-4.922 4.836-4.922 4.836 2.203 4.836 4.922Zm0 0" />
                    </svg>

                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" width="64px" height="64px">
                        <path
                            d="M64.004 25.602c-17.067 0-27.73 8.53-32 25.597 6.398-8.531 13.867-11.73 22.398-9.597 4.871 1.214 8.352 4.746 12.207 8.66C72.883 56.629 80.145 64 96.004 64c17.066 0 27.73-8.531 32-25.602-6.399 8.536-13.867 11.735-22.399 9.602-4.87-1.215-8.347-4.746-12.207-8.66-6.27-6.367-13.53-13.738-29.394-13.738zM32.004 64c-17.066 0-27.73 8.531-32 25.602C6.402 81.066 13.87 77.867 22.402 80c4.871 1.215 8.352 4.746 12.207 8.66 6.274 6.367 13.536 13.738 29.395 13.738 17.066 0 27.73-8.53 32-25.597-6.399 8.531-13.867 11.73-22.399 9.597-4.87-1.214-8.347-4.746-12.207-8.66C55.128 71.371 47.868 64 32.004 64zm0 0"
                            fill="#38bdf8" />
                    </svg>


                </div>
                <!-- end client item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden bg-very-light-gray position-relative">
        <div class="container">
            <div class="row align-items-center mb-5 sm-mb-30px text-center text-lg-start"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-5 md-mb-30px">
                    <h3 class="text-dark-gray fw-700 ls-minus-2px mb-0">Understanding the business services.</h3>
                </div>
                <div class="col-lg-4 offset-xl-1 last-paragraph-no-margin md-mb-30px">
                    <p>We strive to develop real-world application solutions that are ideal for small to large projects
                        with
                        bespoke your custom project requirements.</p>
                </div>
                <div class="col-xl-2 col-lg-3 d-flex justify-content-center">
                    <!-- start slider navigation -->
                    <div
                        class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div
                        class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white box-shadow-large">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="row align-items-center"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12">
                    <div class="outside-box-right-20 sm-outside-box-right-0">
                        <div class="swiper magic-cursor slider-one-slide"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">

                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start services box style -->
                                    <div
                                        class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                        <div class="position-relative">
                                            <a href="demo-it-business-services-details.html"><img
                                                    src="{{ asset('storage/images/falcon_600x440_02.png') }}"
                                                    alt=""></a>
                                            <a href="#"
                                                class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">modules</a>
                                        </div>
                                        <div class="bg-white">
                                            <div class="ps-65px pe-65px pt-30px pb-30px text-center">
                                                <a href="demo-it-business-services-details.html"
                                                    class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">IT Asset
                                                    Management</a>
                                                <p> comprehensive software solution designed to help organizations
                                                    manage their IT assets throughout their lifecycle, from procurement
                                                    to disposal.</p>
                                            </div>
                                            <div
                                                class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                <a href="demo-it-business-services-details.html"
                                                    class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                                    <span>
                                                        <span class="btn-text">Explore Falcon</span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end services box style -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start services box style -->
                                    <div
                                        class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                        <div class="position-relative">
                                            <a href="demo-it-business-services-details.html"><img
                                                    src="{{ asset('storage/images/fuse_600x440_01.png') }}"
                                                    alt=""></a>
                                            <a href="#"
                                                class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Modules</a>
                                        </div>
                                        <div class="bg-white">
                                            <div class="ps-65px pe-65px pt-30px pb-30px text-center">
                                                <a href="demo-it-business-services-details.html"
                                                    class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">System
                                                    Monitoring and User Management
                                                </a>
                                                <p>robust solution designed to ensure optimal performance, security, and
                                                    efficient management of IT infrastructure and user access within an
                                                    organization.</p>
                                            </div>
                                            <div
                                                class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                <a href="demo-it-business-services-details.html"
                                                    class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                                    <span>
                                                        <span class="btn-text">Explore Fuse</span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end services box style -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start services box style -->
                                    <div
                                        class="services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                                        <div class="position-relative">
                                            <a href="demo-it-business-services-details.html"><img
                                                    src="{{ asset('storage/images/beverly_600x440_01.png') }}"
                                                    alt=""></a>
                                            <a href="#"
                                                class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Modules</a>
                                        </div>
                                        <div class="bg-white">
                                            <div class="ps-65px pe-65px pt-30px pb-30px text-center">
                                                <a href="demo-it-business-services-details.html"
                                                    class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">Packing
                                                    Accuracy</a>
                                                <p>A system to make sure validity of the items on each carton boxes on
                                                    packing department.</p>
                                            </div>
                                            <div
                                                class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                <a href="demo-it-business-services-details.html"
                                                    class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                                    <span>
                                                        <span class="btn-text">Explore Beverly</span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end services box style -->
                                </div>
                                <!-- end slider item -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section class="cover-background one-third-screen sm-h-500px pb-0 position-relative"
        style="background-image:url({{ asset('storage/images/teresa_1920x760_01.jpg') }});">
        <div class="opacity-extra-medium bg-dark-gray"></div>
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-xl-8 col-lg-10 mb-9 md-mb-15 position-relative z-index-1 text-center d-flex flex-wrap align-items-center justify-content-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-inline-flex align-items-center text-start sm-lh-20"><i
                            class="bi bi-megaphone text-white d-inline-block align-middle icon-small me-10px"></i>
                        Let's make something great work together.</span>
                    <h1 class="text-white fw-600 ls-minus-2px mb-50px">We make the creative solutions for business!
                    </h1>
                    {{-- <a href="#"
                        class="btn btn-extra-large btn-switch-text btn-gradient-purple-pink btn-rounded me-10px">
                        <span>
                            <span class="btn-double-text" data-text="Got a project in mind">Got a project in
                                mind</span>
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a> --}}
                </div>
            </div>
        </div>
        <div class="shape-image-animation p-0 w-100 bottom-minus-40px xl-bottom-0px d-none d-md-block">
            <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200"
                fill="#ffffff">
                <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                    <animate attributeName="d" dur="5s"
                        values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                        repeatCount="indefinite" />
                </path>
            </svg>
        </div>
    </section>
    <!-- end section -->

</x-base-app-layout>
