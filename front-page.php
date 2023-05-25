<?php
/*
    Template Name: MainPage
*/
?>
<?php get_header(); ?>
<main class="main">
    <section class="hero">
        <div id="carouselExampleIndicators" class="hero__carousel carousel slide" data-ride="carousel">
            <div class="hero__container my-container">
                <h2 class="hero__slogan">Creative Template</h2>
                <h1 class="hero__head">Welcome to MoGo</h1>
                <hr class="hero__line">
                <a href="#" class="hero__button">Learn more</a>
            </div>
            <ol class="hero__carousel-indicators carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                    <hr>
                    <div>
                        <span class="num">01</span>
                        <span class="text">intro</span>
                    </div>
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                    <hr>
                    <div>
                        <span class="num">02</span>
                        <span class="text">work</span>
                    </div>
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                    <hr>
                    <div>
                        <span class="num">03</span>
                        <span class="text">about</span>
                    </div>
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3">
                    <hr>
                    <div>
                        <span class="num">04</span>
                        <span class="text">contacts</span>
                    </div>
                </li>
            </ol>
            <div class="hero__carousel-inner carousel-inner">
                <div class="hero__carousel-item carousel-item active">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/boot-slide1.jpg" alt="First slide">
                </div>
                <div class="hero__carousel-item carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/boot-slide1.jpg" alt="Second slide">
                </div>
                <div class="hero__carousel-item carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/boot-slide1.jpg" alt="Third slide">
                </div>
                <div class="hero__carousel-item carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/boot-slide1.jpg" alt="Fourth slide">
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about__container my-container">
            <p class="about__pre-head">What we do</p>
            <h2 class="about__head">Story about us</h2>
            <hr class="about__line">
            <p class="about__slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <div class="about__stories stories">
                <div class="stories__story story gradient-hover">
                    <a href="#" class="story__content gradient-hover__content">
                        <svg class="story__icon"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                           <path fill-rule="evenodd"
                            d="M31.950,22.503 C31.950,22.504 31.950,22.505 31.950,22.505 C31.950,23.054 31.504,23.497 30.955,23.497 L23.543,23.497 C24.099,23.374 24.515,22.883 24.515,22.292 C24.515,22.291 24.514,22.291 24.514,22.290 L24.515,22.290 C24.515,22.290 24.515,17.786 21.214,16.148 C19.802,15.448 19.709,15.582 19.008,15.416 L19.028,13.466 C19.028,13.466 18.257,12.878 18.017,11.035 C17.535,11.175 17.376,10.471 17.347,10.023 C17.321,9.592 17.068,8.240 17.657,8.362 C17.536,7.460 17.450,6.647 17.492,6.215 C17.640,4.703 19.102,3.122 21.353,3.008 C24.002,3.122 25.051,4.702 25.198,6.214 C25.241,6.646 25.147,7.460 25.026,8.360 C25.615,8.240 25.359,9.588 25.330,10.021 C25.305,10.469 25.142,11.170 24.661,11.030 C24.420,12.873 23.649,13.456 23.649,13.456 L23.667,15.404 C23.667,15.404 24.155,15.682 26.213,16.531 C28.271,17.382 27.625,16.745 29.301,17.576 C31.950,18.890 31.950,22.503 31.950,22.503 L31.950,22.503 ZM17.023,15.840 C19.285,16.775 18.575,16.075 20.418,16.990 C23.330,18.433 23.330,22.405 23.330,22.405 L23.329,22.405 C23.329,22.405 23.329,22.406 23.329,22.408 C23.329,23.010 22.840,23.497 22.236,23.497 L1.093,23.497 C0.489,23.497 -0.000,23.010 -0.000,22.408 C-0.000,22.406 0.000,22.405 0.000,22.405 L-0.001,22.405 C-0.001,22.405 -0.001,18.433 2.911,16.988 C4.754,16.075 4.044,16.817 6.306,15.882 C8.568,14.949 9.104,14.622 9.104,14.622 L9.125,12.470 C9.125,12.470 8.278,11.824 8.015,9.800 C7.485,9.953 7.310,9.179 7.279,8.687 C7.250,8.212 6.972,6.727 7.618,6.862 C7.486,5.870 7.391,4.976 7.438,4.503 C7.600,2.839 9.207,1.103 11.682,0.975 C14.593,1.101 15.747,2.838 15.908,4.500 C15.955,4.975 15.852,5.869 15.719,6.859 C16.366,6.727 16.085,8.209 16.053,8.684 C16.025,9.177 15.846,9.947 15.317,9.794 C15.053,11.820 14.206,12.460 14.206,12.460 L14.225,14.602 C14.225,14.602 14.761,14.906 17.023,15.840 Z"/>
                       </svg>
                        <p class="story__text">super team</p>
                    </a>
                    <img class="story__img gradient-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-1.jpg" alt="Story image">
                    <div class="story__bg gradient-hover__bg"></div>
                </div>
                <div class="stories__story story gradient-hover">
                    <a href="#" class="story__content gradient-hover__content">
                        <svg class="story__icon"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                           <path fill-rule="evenodd"
                            d="M31.950,22.503 C31.950,22.504 31.950,22.505 31.950,22.505 C31.950,23.054 31.504,23.497 30.955,23.497 L23.543,23.497 C24.099,23.374 24.515,22.883 24.515,22.292 C24.515,22.291 24.514,22.291 24.514,22.290 L24.515,22.290 C24.515,22.290 24.515,17.786 21.214,16.148 C19.802,15.448 19.709,15.582 19.008,15.416 L19.028,13.466 C19.028,13.466 18.257,12.878 18.017,11.035 C17.535,11.175 17.376,10.471 17.347,10.023 C17.321,9.592 17.068,8.240 17.657,8.362 C17.536,7.460 17.450,6.647 17.492,6.215 C17.640,4.703 19.102,3.122 21.353,3.008 C24.002,3.122 25.051,4.702 25.198,6.214 C25.241,6.646 25.147,7.460 25.026,8.360 C25.615,8.240 25.359,9.588 25.330,10.021 C25.305,10.469 25.142,11.170 24.661,11.030 C24.420,12.873 23.649,13.456 23.649,13.456 L23.667,15.404 C23.667,15.404 24.155,15.682 26.213,16.531 C28.271,17.382 27.625,16.745 29.301,17.576 C31.950,18.890 31.950,22.503 31.950,22.503 L31.950,22.503 ZM17.023,15.840 C19.285,16.775 18.575,16.075 20.418,16.990 C23.330,18.433 23.330,22.405 23.330,22.405 L23.329,22.405 C23.329,22.405 23.329,22.406 23.329,22.408 C23.329,23.010 22.840,23.497 22.236,23.497 L1.093,23.497 C0.489,23.497 -0.000,23.010 -0.000,22.408 C-0.000,22.406 0.000,22.405 0.000,22.405 L-0.001,22.405 C-0.001,22.405 -0.001,18.433 2.911,16.988 C4.754,16.075 4.044,16.817 6.306,15.882 C8.568,14.949 9.104,14.622 9.104,14.622 L9.125,12.470 C9.125,12.470 8.278,11.824 8.015,9.800 C7.485,9.953 7.310,9.179 7.279,8.687 C7.250,8.212 6.972,6.727 7.618,6.862 C7.486,5.870 7.391,4.976 7.438,4.503 C7.600,2.839 9.207,1.103 11.682,0.975 C14.593,1.101 15.747,2.838 15.908,4.500 C15.955,4.975 15.852,5.869 15.719,6.859 C16.366,6.727 16.085,8.209 16.053,8.684 C16.025,9.177 15.846,9.947 15.317,9.794 C15.053,11.820 14.206,12.460 14.206,12.460 L14.225,14.602 C14.225,14.602 14.761,14.906 17.023,15.840 Z"/>
                       </svg>
                        <p class="story__text">super team</p>
                    </a>
                    <img class="story__img gradient-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-2.jpg" alt="Story image">
                    <div class="story__bg gradient-hover__bg"></div>
                </div>
                <div class="stories__story story gradient-hover">
                    <a href="#" class="story__content gradient-hover__content">
                        <svg class="story__icon"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                           <path fill-rule="evenodd"
                            d="M31.950,22.503 C31.950,22.504 31.950,22.505 31.950,22.505 C31.950,23.054 31.504,23.497 30.955,23.497 L23.543,23.497 C24.099,23.374 24.515,22.883 24.515,22.292 C24.515,22.291 24.514,22.291 24.514,22.290 L24.515,22.290 C24.515,22.290 24.515,17.786 21.214,16.148 C19.802,15.448 19.709,15.582 19.008,15.416 L19.028,13.466 C19.028,13.466 18.257,12.878 18.017,11.035 C17.535,11.175 17.376,10.471 17.347,10.023 C17.321,9.592 17.068,8.240 17.657,8.362 C17.536,7.460 17.450,6.647 17.492,6.215 C17.640,4.703 19.102,3.122 21.353,3.008 C24.002,3.122 25.051,4.702 25.198,6.214 C25.241,6.646 25.147,7.460 25.026,8.360 C25.615,8.240 25.359,9.588 25.330,10.021 C25.305,10.469 25.142,11.170 24.661,11.030 C24.420,12.873 23.649,13.456 23.649,13.456 L23.667,15.404 C23.667,15.404 24.155,15.682 26.213,16.531 C28.271,17.382 27.625,16.745 29.301,17.576 C31.950,18.890 31.950,22.503 31.950,22.503 L31.950,22.503 ZM17.023,15.840 C19.285,16.775 18.575,16.075 20.418,16.990 C23.330,18.433 23.330,22.405 23.330,22.405 L23.329,22.405 C23.329,22.405 23.329,22.406 23.329,22.408 C23.329,23.010 22.840,23.497 22.236,23.497 L1.093,23.497 C0.489,23.497 -0.000,23.010 -0.000,22.408 C-0.000,22.406 0.000,22.405 0.000,22.405 L-0.001,22.405 C-0.001,22.405 -0.001,18.433 2.911,16.988 C4.754,16.075 4.044,16.817 6.306,15.882 C8.568,14.949 9.104,14.622 9.104,14.622 L9.125,12.470 C9.125,12.470 8.278,11.824 8.015,9.800 C7.485,9.953 7.310,9.179 7.279,8.687 C7.250,8.212 6.972,6.727 7.618,6.862 C7.486,5.870 7.391,4.976 7.438,4.503 C7.600,2.839 9.207,1.103 11.682,0.975 C14.593,1.101 15.747,2.838 15.908,4.500 C15.955,4.975 15.852,5.869 15.719,6.859 C16.366,6.727 16.085,8.209 16.053,8.684 C16.025,9.177 15.846,9.947 15.317,9.794 C15.053,11.820 14.206,12.460 14.206,12.460 L14.225,14.602 C14.225,14.602 14.761,14.906 17.023,15.840 Z"/>
                       </svg>
                        <p class="story__text">super team</p>
                    </a>
                    <img class="story__img gradient-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-3.jpg" alt="Story image">
                    <div class="story__bg gradient-hover__bg"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="num-info">
        <div class="num-info__container my-container">
            <div class="num-info__item">
                <p class="num-info__num">42</p>
                <p class="num-info__text">Web Design Projects</p>
            </div>
            <div class="num-info__item">
                <p class="num-info__num">123</p>
                <p class="num-info__text">happy client</p>
            </div>
            <div class="num-info__item">
                <p class="num-info__num">15</p>
                <p class="num-info__text">award winner</p>
            </div>
            <div class="num-info__item">
                <p class="num-info__num">99</p>
                <p class="num-info__text">cup of coffee</p>
            </div>
            <div class="num-info__item">
                <p class="num-info__num">24</p>
                <p class="num-info__text">members</p>
            </div>
        </div>
    </section>
    <section class="work-with">
        <div class="work-with__container my-container">
            <p class="work-with__pre-head">We work with</p>
            <h2 class="work-with__head">Amazing Services</h2>
            <hr class="work-with__line">
            <div class="work-with__cases cases">
                <div class="cases__case case">
                    <svg class="case__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                       <path fill-rule="evenodd"
                        d="M30.740,9.503 C29.156,5.807 26.193,2.843 22.497,1.260 C23.497,0.473 24.755,0.000 26.126,0.000 C29.370,0.000 31.1000,2.630 31.1000,5.874 C31.1000,7.245 31.527,8.503 30.740,9.503 ZM30.500,15.1000 C30.500,19.852 28.988,23.343 26.537,25.940 L28.566,27.968 C28.834,28.237 29.000,28.607 29.000,29.017 C29.000,29.836 28.336,30.500 27.517,30.500 C27.107,30.500 26.736,30.334 26.468,30.065 L24.290,27.887 C21.939,29.529 19.085,30.500 15.1000,30.500 C12.921,30.500 10.072,29.534 7.724,27.897 L5.561,30.060 C5.289,30.332 4.914,30.500 4.500,30.500 C3.672,30.500 2.1000,29.828 2.1000,28.1000 C2.1000,28.586 3.168,28.210 3.439,27.939 L5.451,25.927 C3.008,23.332 1.500,19.845 1.500,15.1000 C1.500,7.992 7.992,1.500 15.1000,1.500 C24.008,1.500 30.500,7.992 30.500,15.1000 ZM15.1000,4.500 C9.649,4.500 4.500,9.648 4.500,15.1000 C4.500,22.351 9.649,27.500 15.1000,27.500 C22.351,27.500 27.500,22.351 27.500,15.1000 C27.500,9.648 22.351,4.500 15.1000,4.500 ZM22.000,17.500 L15.1000,17.500 C15.172,17.500 14.500,16.828 14.500,15.1000 L14.500,7.1000 C14.500,7.172 15.172,6.500 15.1000,6.500 C16.828,6.500 17.500,7.172 17.500,7.1000 L17.500,14.499 L22.000,14.499 C22.828,14.499 23.500,15.171 23.500,15.1000 C23.500,16.828 22.828,17.500 22.000,17.500 ZM1.287,9.705 C0.483,8.685 -0.000,7.400 -0.000,5.1000 C-0.000,2.686 2.686,0.000 5.1000,0.000 C7.400,0.000 8.685,0.483 9.706,1.287 C5.931,2.904 2.904,5.931 1.287,9.705 Z"/>
                    </svg>
                    <div class="case__text">
                        <h3 class="case__head">Photography</h3>
                        <p class="case__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="cases__case case">
                    <svg class="case__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                       <path fill-rule="evenodd"
                        d="M30.500,31.1000 L1.500,31.1000 C0.672,31.1000 0.000,31.328 0.000,30.500 L0.000,1.500 C0.000,0.672 0.672,-0.000 1.500,-0.000 L30.500,-0.000 C31.328,-0.000 32.000,0.672 32.000,1.500 L32.000,30.500 C32.000,31.328 31.328,31.1000 30.500,31.1000 ZM28.1000,2.1000 L3.000,2.1000 L3.000,28.1000 L28.1000,28.1000 L28.1000,2.1000 ZM5.215,16.239 L5.215,16.237 L9.215,13.738 L9.215,13.739 C9.444,13.598 9.712,13.517 9.1000,13.517 C10.311,13.517 10.600,13.612 10.840,13.775 L10.846,13.766 L17.477,18.186 L25.115,12.795 C25.363,12.613 25.669,12.506 26.000,12.506 C26.828,12.506 27.500,13.177 27.500,14.005 C27.500,14.505 27.255,14.948 26.878,15.221 L26.879,15.221 L18.379,21.222 L18.378,21.221 C18.132,21.400 17.828,21.505 17.500,21.505 C17.179,21.505 16.882,21.405 16.639,21.233 L9.982,16.795 L6.847,18.755 C6.606,18.920 6.314,19.017 5.1000,19.017 C5.172,19.017 4.500,18.346 4.500,17.517 C4.500,16.976 4.786,16.503 5.215,16.239 Z"/>
                    </svg>
                    <div class="case__text">
                        <h3 class="case__head">Web Design</h3>
                        <p class="case__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="cases__case case">
                    <svg class="case__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                       <path fill-rule="evenodd"
                        d="M30.000,22.1000 L22.500,22.1000 L20.500,22.1000 L20.500,25.500 L22.500,27.500 L22.500,27.1000 L9.500,27.1000 L9.500,27.500 L11.500,25.500 L11.500,22.1000 L9.500,22.1000 L2.000,22.1000 C1.172,22.1000 0.500,22.328 0.500,21.499 L0.500,1.500 C0.500,0.671 1.172,0.000 2.000,0.000 L30.000,0.000 C30.828,0.000 31.500,0.671 31.500,1.500 L31.500,21.499 C31.500,22.328 30.828,22.1000 30.000,22.1000 ZM29.500,1.1000 L2.500,1.1000 L2.500,18.1000 L29.500,18.1000 L29.500,1.1000 ZM12.1000,8.1000 C13.414,8.1000 13.789,9.168 14.061,9.439 L14.061,9.439 L14.1000,10.378 L17.939,7.439 L17.939,7.439 C18.211,7.168 18.586,7.000 18.1000,7.000 C19.828,7.000 20.500,7.671 20.500,8.500 C20.500,8.914 20.332,9.289 20.061,9.561 L20.061,9.561 L16.061,13.561 L16.061,13.561 C15.789,13.832 15.414,14.000 14.1000,14.000 C14.586,14.000 14.211,13.832 13.939,13.561 L13.939,13.561 L11.939,11.560 L11.939,11.560 C11.668,11.289 11.500,10.914 11.500,10.500 C11.500,9.672 12.172,8.1000 12.1000,8.1000 Z"/>
                   </svg>
                    <div class="case__text">
                        <h3 class="case__head">Creativity</h3>
                        <p class="case__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="cases__case case">
                    <svg class="case__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                       <path fill-rule="evenodd"
                        d="M31.065,25.889 L16.594,31.877 C16.412,31.956 16.211,32.000 15.1000,32.000 C15.789,32.000 15.588,31.956 15.406,31.877 L0.935,25.889 C0.387,25.666 -0.000,25.128 -0.000,24.500 L-0.000,1.500 C-0.000,0.671 0.672,0.000 1.500,0.000 C1.703,0.000 1.897,0.041 2.073,0.114 L2.074,0.114 L2.076,0.115 C2.080,0.116 2.085,0.119 2.089,0.120 L15.1000,5.877 L29.911,0.120 C29.915,0.119 29.920,0.116 29.924,0.115 L29.927,0.114 L29.927,0.114 C30.103,0.041 30.297,0.000 30.500,0.000 C31.328,0.000 31.1000,0.671 31.1000,1.500 L31.1000,24.500 C31.1000,25.128 31.613,25.666 31.065,25.889 ZM14.500,8.503 L2.1000,3.744 L2.1000,23.497 L14.500,28.256 L14.500,8.503 ZM29.000,3.744 L17.500,8.503 L17.500,28.256 L29.000,23.497 L29.000,3.744 ZM19.879,10.634 L25.379,8.134 L25.379,8.134 C25.568,8.048 25.778,7.1000 25.1000,7.1000 C26.828,7.1000 27.500,8.671 27.500,9.500 C27.500,10.107 27.139,10.629 26.621,10.865 L26.621,10.865 L21.121,13.365 L21.121,13.365 C20.931,13.452 20.721,13.500 20.500,13.500 C19.672,13.500 18.1000,12.828 18.1000,11.1000 C18.1000,11.393 19.361,10.870 19.879,10.634 ZM19.879,16.134 L19.879,16.134 L25.379,13.634 L25.379,13.634 C25.568,13.548 25.778,13.500 25.1000,13.500 C26.828,13.500 27.500,14.171 27.500,14.1000 C27.500,15.607 27.139,16.129 26.621,16.365 L21.121,18.866 L21.121,18.865 C20.931,18.951 20.721,18.1000 20.500,18.1000 C19.672,18.1000 18.1000,18.328 18.1000,17.500 C18.1000,16.893 19.361,16.371 19.879,16.134 ZM19.879,21.634 L19.879,21.634 L25.379,19.134 L25.379,19.134 C25.568,19.048 25.778,18.1000 25.1000,18.1000 C26.828,18.1000 27.500,19.671 27.500,20.500 C27.500,21.107 27.139,21.629 26.621,21.865 L26.621,21.865 L21.121,24.365 L21.121,24.365 C20.931,24.452 20.721,24.500 20.500,24.500 C19.672,24.500 18.1000,23.828 18.1000,22.1000 C18.1000,22.393 19.361,21.870 19.879,21.634 ZM6.000,7.1000 C6.221,7.1000 6.431,8.048 6.621,8.134 L6.621,8.134 L12.121,10.634 L12.121,10.634 C12.639,10.870 13.000,11.393 13.000,11.1000 C13.000,12.828 12.328,13.500 11.500,13.500 C11.278,13.500 11.068,13.452 10.879,13.365 L10.879,13.365 L5.379,10.865 L5.379,10.865 C4.861,10.629 4.500,10.107 4.500,9.500 C4.500,8.671 5.172,7.1000 6.000,7.1000 ZM6.000,13.500 C6.221,13.500 6.431,13.548 6.621,13.634 L6.621,13.634 L12.121,16.134 L12.121,16.134 C12.639,16.371 13.000,16.893 13.000,17.500 C13.000,18.328 12.328,18.1000 11.500,18.1000 C11.278,18.1000 11.068,18.951 10.879,18.865 L10.879,18.866 L5.379,16.365 L5.379,16.365 C4.861,16.129 4.500,15.607 4.500,14.1000 C4.500,14.171 5.172,13.500 6.000,13.500 ZM6.000,18.1000 C6.221,18.1000 6.431,19.048 6.621,19.134 L6.621,19.134 L12.121,21.634 L12.121,21.634 C12.639,21.870 13.000,22.393 13.000,22.1000 C13.000,23.828 12.328,24.500 11.500,24.500 C11.278,24.500 11.068,24.452 10.879,24.365 L10.879,24.365 L5.379,21.865 L5.379,21.865 C4.861,21.629 4.500,21.107 4.500,20.500 C4.500,19.671 5.172,18.1000 6.000,18.1000 Z"/>
                   </svg>
                    <div class="case__text">
                        <h3 class="case__head">seo</h3>
                        <p class="case__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="cases__case case">
                    <svg class="case__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                       <path fill-rule="evenodd"
                        d="M31.1000,16.500 C31.1000,17.328 31.328,17.1000 30.500,17.1000 C30.105,17.1000 29.748,17.844 29.480,17.594 L29.477,17.598 L16.038,4.159 L16.038,4.159 L15.1000,4.122 L15.1000,4.122 L2.554,17.569 L2.553,17.568 C2.282,17.835 1.910,17.1000 1.500,17.1000 C0.672,17.1000 -0.000,17.328 -0.000,16.500 C-0.000,16.075 0.177,15.692 0.461,15.419 L14.919,0.960 C15.192,0.677 15.575,0.500 15.1000,0.500 L15.1000,0.500 L15.1000,0.500 C16.000,0.500 16.000,0.500 16.001,0.500 C16.027,0.500 16.053,0.500 16.080,0.502 C16.084,0.502 16.088,0.503 16.092,0.503 C16.115,0.504 16.137,0.506 16.160,0.509 C16.161,0.509 16.162,0.509 16.164,0.509 C16.531,0.549 16.858,0.721 17.097,0.977 L17.098,0.976 L22.1000,6.878 L22.1000,5.500 C22.1000,4.671 23.671,3.1000 24.500,3.1000 C25.328,3.1000 25.1000,4.671 25.1000,5.500 L25.1000,9.878 L31.598,15.476 L31.594,15.480 C31.844,15.748 31.1000,16.105 31.1000,16.500 ZM28.1000,18.1000 L28.1000,23.500 L28.1000,25.500 L28.1000,29.500 C28.1000,30.328 28.328,30.1000 27.500,30.1000 L24.500,30.1000 L24.500,18.1000 L18.500,18.1000 L18.500,30.1000 L4.500,30.1000 C3.672,30.1000 3.000,30.328 3.000,29.500 L3.000,25.500 L3.000,23.500 L3.000,18.1000 L15.1000,5.1000 L28.1000,18.1000 ZM13.500,18.1000 L7.500,18.1000 L7.500,25.000 L13.500,25.000 L13.500,18.1000 Z"/>
                   </svg>
                    <div class="case__text">
                        <h3 class="case__head">Css/Html</h3>
                        <p class="case__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="cases__case case">
                    <svg class="case__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                       <path fill-rule="evenodd"
                        d="M30.500,32.000 L1.500,32.000 C0.671,32.000 -0.000,31.328 -0.000,30.500 L-0.000,1.500 C-0.000,0.671 0.671,0.000 1.500,0.000 L30.500,0.000 C31.328,0.000 32.000,0.671 32.000,1.500 L32.000,30.500 C32.000,31.328 31.328,32.000 30.500,32.000 ZM29.000,2.1000 L2.1000,2.1000 L2.1000,28.1000 L29.000,28.1000 L29.000,2.1000 ZM6.500,4.500 L11.1000,4.500 L11.1000,4.500 C12.828,4.500 13.500,5.171 13.500,5.1000 C13.500,6.828 12.828,7.500 11.1000,7.500 L11.1000,7.500 L7.500,7.500 L7.500,11.1000 L7.500,11.1000 C7.500,12.828 6.828,13.500 5.1000,13.500 C5.172,13.500 4.500,12.828 4.500,11.1000 L4.500,11.1000 L4.500,6.500 L4.500,6.500 L4.500,4.500 L6.500,4.500 L6.500,4.500 ZM4.500,19.1000 L4.500,19.1000 C4.500,19.171 5.172,18.500 5.1000,18.500 C6.828,18.500 7.500,19.171 7.500,19.1000 L7.500,19.1000 L7.500,24.499 L11.1000,24.499 L11.1000,24.500 C12.828,24.500 13.500,25.171 13.500,25.1000 C13.500,26.828 12.828,27.500 11.1000,27.500 L11.1000,27.500 L6.500,27.500 L6.500,27.500 L4.500,27.500 L4.500,25.500 L4.500,25.500 L4.500,19.1000 ZM19.1000,4.500 L20.000,4.500 L25.500,4.500 L25.500,4.500 L27.500,4.500 L27.500,6.500 L27.500,6.500 L27.500,11.1000 L27.500,11.1000 C27.500,12.828 26.828,13.500 25.1000,13.500 C25.172,13.500 24.500,12.828 24.500,11.1000 L24.500,11.1000 L24.500,7.500 L19.1000,7.500 L19.1000,7.500 C19.172,7.500 18.500,6.828 18.500,5.1000 C18.500,5.171 19.172,4.500 19.1000,4.500 ZM19.1000,24.500 L19.1000,24.499 L24.500,24.499 L24.500,19.1000 L24.500,19.1000 C24.500,19.171 25.172,18.500 25.1000,18.500 C26.828,18.500 27.500,19.171 27.500,19.1000 L27.500,19.1000 L27.500,25.500 L27.500,25.500 L27.500,27.500 L25.500,27.500 L25.500,27.500 L20.000,27.500 L19.1000,27.500 C19.172,27.500 18.500,26.828 18.500,25.1000 C18.500,25.171 19.172,24.500 19.1000,24.500 Z"/>
                   </svg>
                    <div class="case__text">
                        <h3 class="case__head">digital</h3>
                        <p class="case__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="design">
        <div class="design__container my-container">
            <p class="design__pre-head">For all devices</p>
            <h2 class="design__head">Unique design</h2>
            <hr class="design__line">
            <div class="design__devices">
                <img class="design__i-pad" src="<?php echo get_template_directory_uri(); ?>/assets/img/i-pad.png" alt="IPad">
                <img class="design__i-phone" src="<?php echo get_template_directory_uri(); ?>/assets/img/i-phone.png" alt="IPhone">
            </div>
        </div>
    </section>
    <section class="service">
        <div class="service__container my-container">
            <p class="service__pre-head">What we do</p>
            <h2 class="service__head">Story about us</h2>
            <hr class="service__line">
            <p class="service__slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <div class="service__content">
                <img class="service__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-img.jpg" alt="Man on the office">
                <div class="service__accordion accordion" id="accordionExample">
                    <div class="service__card card">
                        <div class="service__card-header card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="service__card-info">
                                <svg class="service__card-icon"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                   <path fill-rule="evenodd"
                                    d="M29.1000,23.999 C29.1000,24.650 29.581,25.199 29.000,25.406 L29.000,27.089 C29.581,27.296 29.1000,27.846 29.1000,28.498 C29.1000,29.326 29.328,29.999 28.500,29.999 C27.848,29.999 27.298,29.579 27.092,28.998 L25.408,28.998 C25.201,29.579 24.652,29.999 23.1000,29.999 C23.348,29.999 22.798,29.579 22.592,28.998 L20.908,28.998 C20.701,29.579 20.152,29.999 19.500,29.999 C18.848,29.999 18.299,29.579 18.092,28.998 L16.408,28.998 C16.201,29.579 15.652,29.999 14.1000,29.999 C14.348,29.999 13.798,29.579 13.592,28.998 L11.908,28.998 C11.702,29.579 11.152,29.999 10.500,29.999 C9.848,29.999 9.298,29.579 9.092,28.998 L7.408,28.998 C7.202,29.579 6.652,29.999 5.1000,29.999 C5.348,29.999 4.798,29.579 4.592,28.998 L2.908,28.998 C2.701,29.579 2.152,29.999 1.500,29.999 C0.672,29.999 -0.000,29.326 -0.000,28.498 C-0.000,27.846 0.419,27.296 0.1000,27.089 L0.1000,25.406 C0.419,25.199 -0.000,24.650 -0.000,23.999 C-0.000,23.345 0.419,22.797 0.1000,22.590 L0.1000,20.907 C0.419,20.699 -0.000,20.150 -0.000,19.498 C-0.000,18.847 0.419,18.297 0.1000,18.090 L0.1000,16.406 C0.419,16.200 -0.000,15.651 -0.000,14.999 C-0.000,14.347 0.419,13.797 0.1000,13.589 L0.1000,11.906 C0.419,11.700 -0.000,11.151 -0.000,10.498 C-0.000,9.846 0.419,9.296 0.1000,9.091 L0.1000,7.406 C0.419,7.199 -0.000,6.650 -0.000,5.998 C-0.000,5.346 0.419,4.796 0.1000,4.590 L0.1000,2.905 C0.419,2.700 -0.000,2.150 -0.000,1.498 C-0.000,0.669 0.672,-0.001 1.500,-0.001 C2.152,-0.001 2.701,0.416 2.908,0.999 L4.592,0.999 C4.798,0.416 5.348,-0.001 5.1000,-0.001 C6.652,-0.001 7.202,0.416 7.408,0.999 L9.092,0.999 C9.298,0.416 9.848,-0.001 10.500,-0.001 C11.152,-0.001 11.702,0.416 11.908,0.999 L13.592,0.999 C13.798,0.416 14.348,-0.001 14.1000,-0.001 C15.652,-0.001 16.201,0.416 16.408,0.999 L18.092,0.999 C18.299,0.416 18.848,-0.001 19.500,-0.001 C20.152,-0.001 20.701,0.416 20.908,0.999 L22.592,0.999 C22.798,0.416 23.348,-0.001 23.1000,-0.001 C24.652,-0.001 25.201,0.416 25.408,0.999 L27.092,0.999 C27.298,0.416 27.848,-0.001 28.500,-0.001 C29.328,-0.001 29.1000,0.669 29.1000,1.498 C29.1000,2.150 29.581,2.700 29.000,2.905 L29.000,4.590 C29.581,4.796 29.1000,5.346 29.1000,5.998 C29.1000,6.650 29.581,7.199 29.000,7.406 L29.000,9.091 C29.581,9.296 29.1000,9.846 29.1000,10.498 C29.1000,11.151 29.581,11.700 29.000,11.906 L29.000,13.589 C29.581,13.797 29.1000,14.347 29.1000,14.999 C29.1000,15.651 29.581,16.200 29.000,16.406 L29.000,18.090 C29.581,18.297 29.1000,18.847 29.1000,19.498 C29.1000,20.150 29.581,20.699 29.000,20.907 L29.000,22.590 C29.581,22.797 29.1000,23.345 29.1000,23.999 ZM26.000,3.997 L4.000,3.997 L4.000,25.998 L26.000,25.998 L26.000,3.997 ZM13.000,19.998 L19.1000,11.499 L24.500,18.499 L24.500,24.498 L5.500,24.498 L11.500,18.499 L13.000,19.998 ZM9.1000,12.998 C8.343,12.998 6.1000,11.655 6.1000,9.997 C6.1000,8.340 8.343,6.998 9.1000,6.998 C11.657,6.998 13.000,8.340 13.000,9.997 C13.000,11.655 11.657,12.998 9.1000,12.998 Z"/>
                                </svg>
                                <h4 class="service__card-name">Photography</h4>
                            </div>
                            <svg class="service__card-arrow"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                               <path fill-rule="evenodd"
                                d="M3.138,11.474 L10.997,3.616 L18.958,11.578 L18.959,11.578 C19.229,11.837 19.596,11.998 19.1000,11.998 C20.828,11.998 21.500,11.326 21.500,10.497 C21.500,10.093 21.340,9.726 21.079,9.456 L21.080,9.456 L12.080,0.456 L12.079,0.456 C11.807,0.174 11.424,-0.002 11.000,-0.002 C10.999,-0.002 10.998,-0.002 10.997,-0.002 C10.996,-0.002 10.994,-0.002 10.993,-0.002 C10.569,-0.002 10.187,0.174 9.914,0.456 L9.914,0.456 L0.913,9.456 L0.917,9.460 C0.659,9.730 0.500,10.095 0.500,10.497 C0.500,11.326 1.172,11.998 1.1000,11.998 C2.455,11.998 2.862,11.794 3.138,11.474 Z"/>
                           </svg>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="service__card-body card-body">
                                <div class="service__card-text-wrap">
                                    <p class="service__card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service__card card">
                        <div class="service__card-header card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="service__card-info">
                                <svg class="service__card-icon"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                   <path fill-rule="evenodd"
                                    d="M26.500,16.497 L23.500,16.497 C22.672,16.497 21.1000,15.827 21.1000,14.998 L21.1000,8.998 C21.1000,8.170 22.672,7.499 23.500,7.499 L26.500,7.499 C27.328,7.499 28.000,8.170 28.000,8.998 L28.000,14.998 C28.000,15.827 27.328,16.497 26.500,16.497 ZM23.500,1.497 C23.500,0.669 24.172,-0.002 24.1000,-0.002 C25.828,-0.002 26.500,0.669 26.500,1.497 L26.500,5.998 L23.500,5.998 L23.500,1.497 ZM15.500,24.497 L12.500,24.497 C11.672,24.497 10.1000,23.827 10.1000,22.998 L10.1000,16.998 C10.1000,16.170 11.672,15.498 12.500,15.498 L15.500,15.498 C16.328,15.498 16.1000,16.170 16.1000,16.998 L16.1000,22.998 C16.1000,23.827 16.328,24.497 15.500,24.497 ZM12.500,1.497 C12.500,0.669 13.172,-0.002 14.000,-0.002 C14.828,-0.002 15.500,0.669 15.500,1.497 L15.500,13.998 L12.500,13.998 L12.500,1.497 ZM4.500,20.498 L1.500,20.498 C0.672,20.498 -0.000,19.826 -0.000,18.997 L-0.000,12.997 C-0.000,12.169 0.672,11.498 1.500,11.498 L4.500,11.498 C5.328,11.498 6.000,12.169 6.000,12.997 L6.000,18.997 C6.000,19.826 5.328,20.498 4.500,20.498 ZM1.500,1.497 C1.500,0.669 2.172,-0.002 2.1000,-0.002 C3.828,-0.002 4.500,0.669 4.500,1.497 L4.500,9.999 L1.500,9.999 L1.500,1.497 ZM4.500,30.497 C4.500,31.326 3.828,31.998 2.1000,31.998 C2.172,31.998 1.500,31.326 1.500,30.497 L1.500,21.998 L4.500,21.998 L4.500,30.497 ZM15.500,30.497 C15.500,31.326 14.828,31.998 14.000,31.998 C13.172,31.998 12.500,31.326 12.500,30.497 L12.500,25.997 L15.500,25.997 L15.500,30.497 ZM26.500,30.497 C26.500,31.326 25.828,31.998 24.1000,31.998 C24.172,31.998 23.500,31.326 23.500,30.497 L23.500,17.999 L26.500,17.999 L26.500,30.497 Z"/>
                               </svg>
                                <h4 class="service__card-name">creativity</h4>
                            </div>
                            <svg class="service__card-arrow"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                               <path fill-rule="evenodd"
                                d="M3.138,11.474 L10.997,3.616 L18.958,11.578 L18.959,11.578 C19.229,11.837 19.596,11.998 19.1000,11.998 C20.828,11.998 21.500,11.326 21.500,10.497 C21.500,10.093 21.340,9.726 21.079,9.456 L21.080,9.456 L12.080,0.456 L12.079,0.456 C11.807,0.174 11.424,-0.002 11.000,-0.002 C10.999,-0.002 10.998,-0.002 10.997,-0.002 C10.996,-0.002 10.994,-0.002 10.993,-0.002 C10.569,-0.002 10.187,0.174 9.914,0.456 L9.914,0.456 L0.913,9.456 L0.917,9.460 C0.659,9.730 0.500,10.095 0.500,10.497 C0.500,11.326 1.172,11.998 1.1000,11.998 C2.455,11.998 2.862,11.794 3.138,11.474 Z"/>
                           </svg>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="service__card-body card-body">
                                <div class="service__card-text-wrap">
                                    <p class="service__card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service__card card">
                        <div class="service__card-header card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="service__card-info">
                                <svg class="service__card-icon"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path fill-rule="evenodd"
                                    d="M15.1000,31.998 C7.164,31.998 -0.000,24.835 -0.000,15.997 C-0.000,7.162 7.164,-0.002 15.1000,-0.002 C24.837,-0.002 32.000,7.162 32.000,15.997 C32.000,24.835 24.837,31.998 15.1000,31.998 ZM15.1000,2.998 C8.820,2.998 3.000,8.818 3.000,15.997 C3.000,23.177 8.820,28.998 15.1000,28.998 C23.180,28.998 29.000,23.177 29.000,15.997 C29.000,8.818 23.180,2.998 15.1000,2.998 ZM15.1000,25.497 C10.753,25.497 6.500,21.244 6.500,15.997 C6.500,10.752 10.753,6.498 15.1000,6.498 C21.247,6.498 25.500,10.752 25.500,15.997 C25.500,21.244 21.247,25.497 15.1000,25.497 ZM15.1000,9.498 C12.410,9.498 9.500,12.408 9.500,15.997 C9.500,19.587 12.410,22.499 15.1000,22.499 C19.590,22.499 22.500,19.587 22.500,15.997 C22.500,12.408 19.590,9.498 15.1000,9.498 ZM15.1000,18.999 C14.343,18.999 13.000,17.655 13.000,15.997 C13.000,14.341 14.343,12.999 15.1000,12.999 C17.657,12.999 18.1000,14.341 18.1000,15.997 C18.1000,17.655 17.657,18.999 15.1000,18.999 Z"/>
                               </svg>
                                <h4 class="service__card-name">web design</h4>
                            </div>
                            <svg class="service__card-arrow"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                               <path fill-rule="evenodd"
                                d="M3.138,11.474 L10.997,3.616 L18.958,11.578 L18.959,11.578 C19.229,11.837 19.596,11.998 19.1000,11.998 C20.828,11.998 21.500,11.326 21.500,10.497 C21.500,10.093 21.340,9.726 21.079,9.456 L21.080,9.456 L12.080,0.456 L12.079,0.456 C11.807,0.174 11.424,-0.002 11.000,-0.002 C10.999,-0.002 10.998,-0.002 10.997,-0.002 C10.996,-0.002 10.994,-0.002 10.993,-0.002 C10.569,-0.002 10.187,0.174 9.914,0.456 L9.914,0.456 L0.913,9.456 L0.917,9.460 C0.659,9.730 0.500,10.095 0.500,10.497 C0.500,11.326 1.172,11.998 1.1000,11.998 C2.455,11.998 2.862,11.794 3.138,11.474 Z"/>
                           </svg>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="service__card-body card-body">
                                <div class="service__card-text-wrap">
                                    <p class="service__card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comments">
        <div class="comments__container my-container">
            <div id="carouselExampleControls" class="comments__reviews reviews carousel slide" data-ride="carousel">
                <div class="reviews__carousel-inner carousel-inner">
                    <div class="carousel-item active">
                        <div class="reviews__slide">
                            <div class="reviews__img-box">
                                <svg class="reviews__icon"
                                    viewBox="0 0 63 63"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                   <path fill-rule="evenodd"
                                    d="M60.000,35.998 L59.100,35.998 L59.100,35.998 L57.1000,35.998 L57.1000,40.999 L57.1000,40.999 C57.1000,41.204 57.979,41.408 57.939,41.603 C57.911,41.739 57.863,41.866 57.817,41.995 C57.797,42.053 57.787,42.112 57.764,42.165 C57.716,42.280 57.649,42.385 57.588,42.492 C57.553,42.552 57.527,42.618 57.488,42.676 C57.390,42.820 57.276,42.954 57.154,43.079 C57.142,43.092 57.134,43.108 57.121,43.119 C56.587,43.655 55.850,43.985 55.037,43.995 C55.025,43.995 55.013,43.997 55.000,43.997 L55.000,43.997 L55.000,43.997 C54.172,43.997 53.422,43.663 52.879,43.119 L45.757,35.998 L45.400,35.998 L45.400,35.998 L17.1000,35.998 C16.343,35.998 15.000,34.655 15.000,32.998 L15.000,2.998 C15.000,1.341 16.343,-0.003 17.1000,-0.003 L60.000,-0.003 C61.657,-0.003 63.000,1.341 63.000,2.998 L63.000,32.998 C63.000,34.655 61.657,35.998 60.000,35.998 ZM44.515,38.998 L50.841,45.325 L50.849,45.317 C51.928,46.354 53.386,46.999 55.000,46.999 L55.000,48.999 C55.000,50.655 53.657,51.998 51.1000,51.998 L51.1000,51.998 L30.900,51.998 L30.900,51.998 L24.000,51.998 L24.000,51.998 L20.1000,51.998 L20.1000,51.998 L20.243,51.998 L12.121,60.120 C11.578,60.662 10.828,60.999 10.000,60.999 L10.000,60.999 L10.000,60.999 C9.987,60.999 9.976,60.995 9.963,60.995 C9.149,60.984 8.413,60.654 7.879,60.120 C7.866,60.107 7.858,60.091 7.846,60.079 C7.724,59.954 7.610,59.820 7.512,59.675 C7.473,59.618 7.448,59.553 7.413,59.492 C7.351,59.384 7.284,59.280 7.236,59.166 C7.213,59.112 7.203,59.052 7.183,58.996 C7.137,58.866 7.089,58.740 7.061,58.602 C7.021,58.408 7.000,58.205 7.000,57.997 L7.000,57.997 L7.000,51.998 L6.500,51.998 L6.500,51.998 L2.996,51.998 C1.341,51.995 0.000,50.654 0.000,48.999 L0.000,14.999 C0.000,14.998 0.000,14.998 0.000,14.998 C0.000,13.340 1.343,11.998 3.000,11.998 L12.000,11.998 L12.000,32.998 C12.000,36.311 14.686,38.998 17.1000,38.998 L44.515,38.998 Z"/>
                                 </svg>
                            </div>
                            <div class="reviews__info">
                                <p class="reviews__text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                <div class="reviews__bottom">
                                      <hr class="reviews__line">
                                      <span class="reviews__name">Jon Doe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reviews__slide">
                            <div class="reviews__img-box">
                                <svg class="reviews__icon"
                                    viewBox="0 0 63 63"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                   <path fill-rule="evenodd"
                                    d="M60.000,35.998 L59.100,35.998 L59.100,35.998 L57.1000,35.998 L57.1000,40.999 L57.1000,40.999 C57.1000,41.204 57.979,41.408 57.939,41.603 C57.911,41.739 57.863,41.866 57.817,41.995 C57.797,42.053 57.787,42.112 57.764,42.165 C57.716,42.280 57.649,42.385 57.588,42.492 C57.553,42.552 57.527,42.618 57.488,42.676 C57.390,42.820 57.276,42.954 57.154,43.079 C57.142,43.092 57.134,43.108 57.121,43.119 C56.587,43.655 55.850,43.985 55.037,43.995 C55.025,43.995 55.013,43.997 55.000,43.997 L55.000,43.997 L55.000,43.997 C54.172,43.997 53.422,43.663 52.879,43.119 L45.757,35.998 L45.400,35.998 L45.400,35.998 L17.1000,35.998 C16.343,35.998 15.000,34.655 15.000,32.998 L15.000,2.998 C15.000,1.341 16.343,-0.003 17.1000,-0.003 L60.000,-0.003 C61.657,-0.003 63.000,1.341 63.000,2.998 L63.000,32.998 C63.000,34.655 61.657,35.998 60.000,35.998 ZM44.515,38.998 L50.841,45.325 L50.849,45.317 C51.928,46.354 53.386,46.999 55.000,46.999 L55.000,48.999 C55.000,50.655 53.657,51.998 51.1000,51.998 L51.1000,51.998 L30.900,51.998 L30.900,51.998 L24.000,51.998 L24.000,51.998 L20.1000,51.998 L20.1000,51.998 L20.243,51.998 L12.121,60.120 C11.578,60.662 10.828,60.999 10.000,60.999 L10.000,60.999 L10.000,60.999 C9.987,60.999 9.976,60.995 9.963,60.995 C9.149,60.984 8.413,60.654 7.879,60.120 C7.866,60.107 7.858,60.091 7.846,60.079 C7.724,59.954 7.610,59.820 7.512,59.675 C7.473,59.618 7.448,59.553 7.413,59.492 C7.351,59.384 7.284,59.280 7.236,59.166 C7.213,59.112 7.203,59.052 7.183,58.996 C7.137,58.866 7.089,58.740 7.061,58.602 C7.021,58.408 7.000,58.205 7.000,57.997 L7.000,57.997 L7.000,51.998 L6.500,51.998 L6.500,51.998 L2.996,51.998 C1.341,51.995 0.000,50.654 0.000,48.999 L0.000,14.999 C0.000,14.998 0.000,14.998 0.000,14.998 C0.000,13.340 1.343,11.998 3.000,11.998 L12.000,11.998 L12.000,32.998 C12.000,36.311 14.686,38.998 17.1000,38.998 L44.515,38.998 Z"/>
                                 </svg>
                            </div>
                            <div class="reviews__info">
                                <p class="reviews__text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                <div class="reviews__bottom">
                                      <hr class="reviews__line">
                                      <span class="reviews__name">Jon Doe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reviews__slide">
                            <div class="reviews__img-box">
                                <svg class="reviews__icon"
                                    viewBox="0 0 63 63"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path fill-rule="evenodd"
                                    d="M60.000,35.998 L59.100,35.998 L59.100,35.998 L57.1000,35.998 L57.1000,40.999 L57.1000,40.999 C57.1000,41.204 57.979,41.408 57.939,41.603 C57.911,41.739 57.863,41.866 57.817,41.995 C57.797,42.053 57.787,42.112 57.764,42.165 C57.716,42.280 57.649,42.385 57.588,42.492 C57.553,42.552 57.527,42.618 57.488,42.676 C57.390,42.820 57.276,42.954 57.154,43.079 C57.142,43.092 57.134,43.108 57.121,43.119 C56.587,43.655 55.850,43.985 55.037,43.995 C55.025,43.995 55.013,43.997 55.000,43.997 L55.000,43.997 L55.000,43.997 C54.172,43.997 53.422,43.663 52.879,43.119 L45.757,35.998 L45.400,35.998 L45.400,35.998 L17.1000,35.998 C16.343,35.998 15.000,34.655 15.000,32.998 L15.000,2.998 C15.000,1.341 16.343,-0.003 17.1000,-0.003 L60.000,-0.003 C61.657,-0.003 63.000,1.341 63.000,2.998 L63.000,32.998 C63.000,34.655 61.657,35.998 60.000,35.998 ZM44.515,38.998 L50.841,45.325 L50.849,45.317 C51.928,46.354 53.386,46.999 55.000,46.999 L55.000,48.999 C55.000,50.655 53.657,51.998 51.1000,51.998 L51.1000,51.998 L30.900,51.998 L30.900,51.998 L24.000,51.998 L24.000,51.998 L20.1000,51.998 L20.1000,51.998 L20.243,51.998 L12.121,60.120 C11.578,60.662 10.828,60.999 10.000,60.999 L10.000,60.999 L10.000,60.999 C9.987,60.999 9.976,60.995 9.963,60.995 C9.149,60.984 8.413,60.654 7.879,60.120 C7.866,60.107 7.858,60.091 7.846,60.079 C7.724,59.954 7.610,59.820 7.512,59.675 C7.473,59.618 7.448,59.553 7.413,59.492 C7.351,59.384 7.284,59.280 7.236,59.166 C7.213,59.112 7.203,59.052 7.183,58.996 C7.137,58.866 7.089,58.740 7.061,58.602 C7.021,58.408 7.000,58.205 7.000,57.997 L7.000,57.997 L7.000,51.998 L6.500,51.998 L6.500,51.998 L2.996,51.998 C1.341,51.995 0.000,50.654 0.000,48.999 L0.000,14.999 C0.000,14.998 0.000,14.998 0.000,14.998 C0.000,13.340 1.343,11.998 3.000,11.998 L12.000,11.998 L12.000,32.998 C12.000,36.311 14.686,38.998 17.1000,38.998 L44.515,38.998 Z"/>
                                 </svg>
                            </div>
                            <div class="reviews__info">
                                <p class="reviews__text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                <div class="reviews__bottom">
                                      <hr class="reviews__line">
                                      <span class="reviews__name">Jon Doe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev reviews__carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <svg class="reviews__arrow"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd"
                        d="M11.477,18.859 L3.619,11.002 L11.581,3.039 L11.580,3.039 C11.839,2.769 12.000,2.403 12.000,1.997 C12.000,1.169 11.329,0.498 10.501,0.498 C10.096,0.498 9.730,0.657 9.459,0.919 L9.459,0.918 L0.459,9.918 L0.460,9.919 C0.177,10.191 0.001,10.574 0.001,10.998 C0.001,10.999 0.001,11.001 0.001,11.002 C0.001,11.003 0.001,11.004 0.001,11.005 C0.001,11.428 0.177,11.811 0.460,12.084 L0.459,12.084 L9.459,21.084 L9.462,21.081 C9.732,21.339 10.098,21.498 10.501,21.498 C11.329,21.498 12.000,20.827 12.000,19.998 C12.000,19.543 11.798,19.135 11.477,18.859 Z"/>
                      </svg>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next reviews__carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <svg class="reviews__arrow"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd"
                        d="M0.523,18.859 L8.381,11.002 L0.419,3.039 L0.420,3.039 C0.160,2.769 -0.001,2.403 -0.001,1.997 C-0.001,1.169 0.671,0.498 1.499,0.498 C1.904,0.498 2.270,0.657 2.541,0.919 L2.541,0.918 L11.541,9.918 L11.540,9.919 C11.823,10.191 11.999,10.574 11.999,10.998 C11.999,10.999 11.999,11.001 11.999,11.002 C11.999,11.003 11.999,11.004 11.999,11.005 C11.999,11.428 11.823,11.811 11.540,12.084 L11.541,12.084 L2.541,21.084 L2.537,21.081 C2.268,21.339 1.902,21.498 1.499,21.498 C0.671,21.498 -0.001,20.827 -0.001,19.998 C-0.001,19.543 0.202,19.135 0.523,18.859 Z"/>
                   </svg>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="team__container my-container">
            <p class="team__pre-head">Who we are</p>
            <h2 class="team__head">Meet our team</h2>
            <hr class="team__line">
            <p class="team__slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <div class="team__members">
                <?php 
                $args = array(
                'post_type' => 'team',
                'orderby' => 'date',
                'posts_per_page' => 3,
                );
                $query_team = new WP_Query( $args ); ?>
                <?php if ( $query_team->have_posts() ) : ?>
                <?php while ( $query_team->have_posts() ) : $query_team->the_post(); ?>
                        <div class="team__member member">
                            <div class="member__photo  gradient-hover">
                                <div class="member__content gradient-hover__content">
                                    <a href="<?php the_field('member_facebook'); ?>" class="member__social-box">
                                        <svg class="member__social-icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="13px" height="26px">
                                            <path fill-rule="evenodd"
                                            d="M12.089,0.199 C12.089,1.675 12.089,4.320 12.089,4.320 C12.089,4.320 9.052,4.017 8.291,5.181 C7.875,5.817 8.122,7.681 8.085,9.019 C9.411,9.019 10.788,9.019 12.114,9.019 C11.774,10.583 11.530,11.643 11.279,12.997 C10.132,12.997 8.063,12.997 8.063,12.997 L8.063,25.801 C8.063,25.801 4.266,25.801 2.481,25.801 C2.482,21.854 2.480,17.249 2.481,13.047 C1.614,13.047 0.973,13.047 0.106,13.047 C0.106,11.572 0.106,10.496 0.106,9.019 C0.947,9.019 1.613,9.019 2.455,9.019 C2.575,6.073 2.620,3.155 4.084,1.669 C5.728,-0.002 7.297,0.199 12.089,0.199 Z"/>
                                       </svg>
                                    </a>
                                    <a href="<?php the_field('member_twitter'); ?>" class="member__social-box">
                                        <svg class="member__social-icon" 
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="26px" height="22px">
                                           <path fill-rule="evenodd"
                                            d="M17.513,0.601 C19.547,0.565 20.630,1.306 21.664,2.249 C22.542,2.173 23.683,1.683 24.355,1.341 C24.572,1.223 24.790,1.103 25.008,0.984 C24.624,2.021 24.104,2.833 23.304,3.450 C23.126,3.586 22.950,3.771 22.727,3.858 C22.727,3.862 22.727,3.867 22.727,3.871 C23.867,3.860 24.807,3.345 25.700,3.066 C25.700,3.070 25.700,3.075 25.700,3.079 C25.231,3.824 24.596,4.581 23.919,5.123 C23.646,5.340 23.372,5.557 23.099,5.774 C23.114,6.981 23.081,8.133 22.856,9.147 C21.544,15.042 18.068,19.045 12.567,20.759 C10.591,21.374 7.399,21.627 5.135,21.065 C4.013,20.787 2.999,20.472 2.048,20.057 C1.519,19.825 1.029,19.575 0.561,19.290 C0.407,19.196 0.254,19.102 0.100,19.009 C0.610,19.024 1.208,19.165 1.778,19.073 C2.295,18.989 2.801,19.011 3.278,18.907 C4.466,18.646 5.521,18.301 6.429,17.770 C6.870,17.511 7.539,17.209 7.852,16.837 C7.262,16.848 6.727,16.710 6.289,16.556 C4.590,15.956 3.601,14.853 2.957,13.196 C3.472,13.253 4.955,13.387 5.302,13.094 C4.654,13.058 4.031,12.683 3.585,12.405 C2.218,11.549 1.104,10.115 1.112,7.908 C1.292,7.993 1.471,8.078 1.650,8.163 C1.994,8.308 2.343,8.385 2.752,8.470 C2.925,8.506 3.271,8.607 3.470,8.533 C3.461,8.533 3.453,8.533 3.444,8.533 C3.180,8.226 2.749,8.021 2.483,7.690 C1.606,6.601 0.785,4.924 1.304,2.926 C1.436,2.419 1.645,1.972 1.868,1.559 C1.877,1.563 1.885,1.567 1.894,1.571 C1.996,1.785 2.224,1.942 2.368,2.121 C2.816,2.676 3.368,3.175 3.931,3.615 C5.849,5.116 7.576,6.037 10.350,6.719 C11.054,6.893 11.867,7.025 12.708,7.026 C12.472,6.339 12.548,5.226 12.733,4.561 C13.201,2.887 14.216,1.682 15.706,1.036 C16.062,0.881 16.457,0.768 16.872,0.677 C17.086,0.652 17.299,0.626 17.513,0.601 Z"/>
                                       </svg>
                                    </a>
                                    <a href="<?php the_field('member_pinterest'); ?>" class="member__social-box">
                                        <svg class="member__social-icon" 
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="21px" height="26px">
                                            <path fill-rule="evenodd"
                                            d="M9.051,16.854 C8.842,17.687 8.631,18.560 8.413,19.414 C8.198,20.256 8.008,21.110 7.695,21.884 C7.176,23.165 6.517,24.403 5.652,25.405 C5.077,26.072 5.199,25.806 5.026,25.770 C4.894,25.743 4.883,25.613 4.857,25.425 C4.716,24.407 4.812,23.230 4.864,22.086 C4.924,20.782 5.198,19.698 5.453,18.615 C5.937,16.552 6.399,14.528 6.888,12.451 C6.920,12.313 7.008,12.085 6.978,12.006 C6.756,11.429 6.612,10.911 6.549,10.306 C6.476,9.610 6.532,8.961 6.688,8.362 C6.965,7.304 7.601,6.367 8.582,6.024 C9.206,5.808 9.897,5.906 10.317,6.156 C10.749,6.415 11.046,6.823 11.184,7.402 C11.332,8.017 11.223,8.753 11.104,9.293 C10.837,10.512 10.486,11.427 10.167,12.603 C10.009,13.186 9.830,13.785 9.978,14.415 C10.114,14.993 10.415,15.391 10.825,15.690 C11.251,15.1000 11.755,16.169 12.450,16.145 C13.678,16.102 14.531,15.317 15.101,14.577 C16.014,13.392 16.566,11.793 16.776,9.891 C16.843,9.277 16.893,8.572 16.846,7.877 C16.758,6.593 16.357,5.560 15.719,4.760 C15.113,3.998 14.253,3.391 13.207,3.049 C12.170,2.711 10.735,2.598 9.460,2.816 C7.142,3.213 5.508,4.530 4.545,6.349 C4.041,7.301 3.708,8.396 3.708,9.759 C3.708,10.810 3.967,11.624 4.386,12.259 C4.519,12.460 4.714,12.626 4.844,12.856 C5.029,13.182 4.816,13.667 4.725,14.020 C4.615,14.445 4.603,15.032 4.107,15.042 C3.901,15.046 3.643,14.896 3.469,14.799 C2.164,14.078 1.372,12.766 1.047,11.065 C0.849,10.031 0.850,8.826 1.047,7.827 C1.237,6.860 1.591,5.969 1.984,5.246 C2.798,3.743 3.991,2.541 5.443,1.683 C6.559,1.023 7.818,0.560 9.350,0.337 C9.858,0.263 10.384,0.232 10.955,0.206 C12.623,0.127 14.139,0.505 15.281,1.015 C16.486,1.554 17.448,2.271 18.261,3.161 C19.099,4.076 19.709,5.140 20.095,6.470 C20.297,7.162 20.493,7.902 20.493,8.757 C20.493,9.615 20.312,10.370 20.185,11.125 C19.711,13.953 18.366,16.266 16.347,17.583 C15.858,17.902 15.266,18.196 14.593,18.392 C13.926,18.586 13.165,18.732 12.350,18.675 C11.559,18.621 10.911,18.406 10.367,18.098 C9.827,17.793 9.373,17.419 9.051,16.854 Z"/>
                                        </svg>
                                    </a>
                                    <a href="<?php the_field('member_instagram'); ?>" class="member__social-box">
                                        <svg class="member__social-icon" 
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="26px" height="26px">
                                            <path fill-rule="evenodd"
                                            d="M22.700,25.800 L3.500,25.800 C1.733,25.800 0.300,24.367 0.300,22.600 L0.300,3.400 C0.300,1.632 1.733,0.200 3.500,0.200 L22.700,0.200 C24.467,0.200 25.900,1.632 25.900,3.400 L25.900,22.600 C25.900,24.367 24.467,25.800 22.700,25.800 ZM13.100,8.039 C11.104,8.039 9.389,9.221 8.602,10.919 L8.597,10.919 C8.589,10.937 8.583,10.956 8.575,10.974 C8.528,11.079 8.487,11.187 8.447,11.296 C8.428,11.348 8.407,11.399 8.390,11.451 C8.353,11.563 8.323,11.676 8.295,11.791 C8.281,11.845 8.265,11.897 8.253,11.951 C8.227,12.072 8.209,12.195 8.192,12.319 C8.185,12.369 8.175,12.418 8.169,12.469 C8.151,12.643 8.140,12.820 8.140,12.1000 C8.140,15.739 10.361,17.959 13.100,17.959 C15.839,17.959 18.060,15.739 18.060,12.1000 C18.060,12.820 18.049,12.643 18.031,12.469 C18.025,12.418 18.015,12.369 18.008,12.319 C17.991,12.195 17.973,12.072 17.947,11.951 C17.935,11.897 17.919,11.845 17.905,11.791 C17.877,11.676 17.847,11.563 17.810,11.451 C17.793,11.399 17.772,11.348 17.753,11.296 C17.713,11.187 17.672,11.079 17.625,10.974 C17.617,10.956 17.611,10.937 17.603,10.919 L17.598,10.919 C16.811,9.221 15.096,8.039 13.100,8.039 ZM23.020,4.359 C23.020,3.652 22.447,3.080 21.740,3.080 L19.180,3.080 C18.473,3.080 17.900,3.652 17.900,4.359 L17.900,6.920 C17.900,7.627 18.473,8.200 19.180,8.200 L21.740,8.200 C22.447,8.200 23.020,7.627 23.020,6.920 L23.020,4.359 ZM23.020,10.919 L20.660,10.919 C20.842,11.582 20.940,12.280 20.940,12.1000 C20.940,17.330 17.430,20.839 13.100,20.839 C8.770,20.839 5.260,17.330 5.260,12.1000 C5.260,12.280 5.358,11.582 5.540,10.919 L3.180,10.919 L3.180,21.639 C3.180,22.347 3.753,22.920 4.460,22.920 L21.740,22.920 C22.447,22.920 23.020,22.347 23.020,21.639 L23.020,10.919 Z"/>
                                       </svg>
                                    </a>
                                </div>
                                <img class="member__img gradient-hover__img" src="<?php the_field('member_picture'); ?>" alt="Story image">
                                <div class="member__bg gradient-hover__bg"></div>
                            </div>
                            <a href="<?php echo get_permalink(); ?>"><p class="member__name"><?php the_title(); ?></p></a>
                            <p class="member__post"><?php the_field('member_post'); ?></p>
                        </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <?php if(wp_count_posts('team')->publish > 3):?>
            <a class="team__link" href="<?php echo get_site_url(); ?>/archives/?type_of_post=team">More members</a>
            <?php endif; ?>
        </div>
    </section>
    <section class="barber-icons">
        <div class="barber-icons__container my-container">
            <img class="barber-icons__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/barbers-logo.png" alt="Barbers logo" >
        </div>
    </section>
    <section class="our-work">
        <div class="our-work__container my-container">
            <p class="our-work__pre-head">What we do</p>
            <h2 class="our-work__head">some of our work</h2>
            <hr class="our-work__line">
            <p class="our-work__slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="our-work__photos">
            <div class="our-work__photo photo">
                <img class="photo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work-img-1.jpg" alt="Work Image 1">
                <a href="#" class="photo__content">
                    <svg class="photo__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd"
                        d="M30.000,23.999 C30.000,24.652 29.581,25.201 28.1000,25.408 L28.1000,27.091 C29.581,27.298 30.000,27.848 30.000,28.500 C30.000,29.328 29.328,29.999 28.500,29.999 C27.848,29.999 27.299,29.581 27.092,28.1000 L25.408,28.1000 C25.201,29.581 24.652,29.999 23.1000,29.999 C23.348,29.999 22.798,29.581 22.592,28.1000 L20.908,28.1000 C20.701,29.581 20.152,29.999 19.500,29.999 C18.848,29.999 18.298,29.581 18.092,28.1000 L16.408,28.1000 C16.202,29.581 15.652,29.999 15.000,29.999 C14.348,29.999 13.798,29.581 13.592,28.1000 L11.908,28.1000 C11.701,29.581 11.152,29.999 10.500,29.999 C9.848,29.999 9.298,29.581 9.092,28.1000 L7.408,28.1000 C7.202,29.581 6.652,29.999 5.1000,29.999 C5.348,29.999 4.798,29.581 4.592,28.1000 L2.908,28.1000 C2.701,29.581 2.152,29.999 1.500,29.999 C0.672,29.999 -0.000,29.328 -0.000,28.500 C-0.000,27.848 0.419,27.298 0.1000,27.091 L0.1000,25.408 C0.419,25.201 -0.000,24.652 -0.000,23.999 C-0.000,23.347 0.419,22.798 0.1000,22.592 L0.1000,20.908 C0.419,20.701 -0.000,20.151 -0.000,19.500 C-0.000,18.848 0.419,18.298 0.1000,18.091 L0.1000,16.408 C0.419,16.201 -0.000,15.652 -0.000,14.1000 C-0.000,14.347 0.419,13.798 0.1000,13.591 L0.1000,11.907 C0.419,11.701 -0.000,11.152 -0.000,10.500 C-0.000,9.848 0.419,9.298 0.1000,9.092 L0.1000,7.408 C0.419,7.201 -0.000,6.652 -0.000,5.999 C-0.000,5.347 0.419,4.798 0.1000,4.592 L0.1000,2.908 C0.419,2.701 -0.000,2.151 -0.000,1.500 C-0.000,0.671 0.672,-0.000 1.500,-0.000 C2.152,-0.000 2.701,0.418 2.908,0.999 L4.592,0.999 C4.798,0.418 5.348,-0.000 5.1000,-0.000 C6.652,-0.000 7.202,0.418 7.408,0.999 L9.092,0.999 C9.298,0.418 9.848,-0.000 10.500,-0.000 C11.152,-0.000 11.701,0.418 11.908,0.999 L13.592,0.999 C13.798,0.418 14.348,-0.000 15.000,-0.000 C15.652,-0.000 16.202,0.418 16.408,0.999 L18.092,0.999 C18.298,0.418 18.848,-0.000 19.500,-0.000 C20.152,-0.000 20.701,0.418 20.908,0.999 L22.592,0.999 C22.798,0.418 23.348,-0.000 23.1000,-0.000 C24.652,-0.000 25.201,0.418 25.408,0.999 L27.092,0.999 C27.299,0.418 27.848,-0.000 28.500,-0.000 C29.328,-0.000 30.000,0.671 30.000,1.500 C30.000,2.151 29.581,2.701 28.1000,2.908 L28.1000,4.592 C29.581,4.798 30.000,5.347 30.000,5.999 C30.000,6.652 29.581,7.201 28.1000,7.408 L28.1000,9.092 C29.581,9.298 30.000,9.848 30.000,10.500 C30.000,11.152 29.581,11.701 28.1000,11.907 L28.1000,13.591 C29.581,13.798 30.000,14.347 30.000,14.1000 C30.000,15.652 29.581,16.201 28.1000,16.408 L28.1000,18.091 C29.581,18.298 30.000,18.848 30.000,19.500 C30.000,20.151 29.581,20.701 28.1000,20.908 L28.1000,22.592 C29.581,22.798 30.000,23.347 30.000,23.999 ZM26.000,3.999 L3.1000,3.999 L3.1000,25.1000 L26.000,25.1000 L26.000,3.999 ZM13.000,20.000 L19.1000,11.500 L24.500,18.499 L24.500,24.500 L5.500,24.500 L11.500,18.499 L13.000,20.000 ZM9.1000,12.999 C8.343,12.999 7.000,11.657 7.000,9.1000 C7.000,8.343 8.343,6.1000 9.1000,6.1000 C11.657,6.1000 13.000,8.343 13.000,9.1000 C13.000,11.657 11.657,12.999 9.1000,12.999 Z"/>
                    </svg>
                    <p class="photo__name">creatively designed</p>
                    <p class="photo">Lorem ipsum dolor sit</p>
                </a>
            </div>
            <div class="our-work__photo photo">
                <img class="photo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work-img-2.jpg" alt="Work Image 2">
                <a href="#" class="photo__content">
                    <svg class="photo__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd"
                        d="M30.000,23.999 C30.000,24.652 29.581,25.201 28.1000,25.408 L28.1000,27.091 C29.581,27.298 30.000,27.848 30.000,28.500 C30.000,29.328 29.328,29.999 28.500,29.999 C27.848,29.999 27.299,29.581 27.092,28.1000 L25.408,28.1000 C25.201,29.581 24.652,29.999 23.1000,29.999 C23.348,29.999 22.798,29.581 22.592,28.1000 L20.908,28.1000 C20.701,29.581 20.152,29.999 19.500,29.999 C18.848,29.999 18.298,29.581 18.092,28.1000 L16.408,28.1000 C16.202,29.581 15.652,29.999 15.000,29.999 C14.348,29.999 13.798,29.581 13.592,28.1000 L11.908,28.1000 C11.701,29.581 11.152,29.999 10.500,29.999 C9.848,29.999 9.298,29.581 9.092,28.1000 L7.408,28.1000 C7.202,29.581 6.652,29.999 5.1000,29.999 C5.348,29.999 4.798,29.581 4.592,28.1000 L2.908,28.1000 C2.701,29.581 2.152,29.999 1.500,29.999 C0.672,29.999 -0.000,29.328 -0.000,28.500 C-0.000,27.848 0.419,27.298 0.1000,27.091 L0.1000,25.408 C0.419,25.201 -0.000,24.652 -0.000,23.999 C-0.000,23.347 0.419,22.798 0.1000,22.592 L0.1000,20.908 C0.419,20.701 -0.000,20.151 -0.000,19.500 C-0.000,18.848 0.419,18.298 0.1000,18.091 L0.1000,16.408 C0.419,16.201 -0.000,15.652 -0.000,14.1000 C-0.000,14.347 0.419,13.798 0.1000,13.591 L0.1000,11.907 C0.419,11.701 -0.000,11.152 -0.000,10.500 C-0.000,9.848 0.419,9.298 0.1000,9.092 L0.1000,7.408 C0.419,7.201 -0.000,6.652 -0.000,5.999 C-0.000,5.347 0.419,4.798 0.1000,4.592 L0.1000,2.908 C0.419,2.701 -0.000,2.151 -0.000,1.500 C-0.000,0.671 0.672,-0.000 1.500,-0.000 C2.152,-0.000 2.701,0.418 2.908,0.999 L4.592,0.999 C4.798,0.418 5.348,-0.000 5.1000,-0.000 C6.652,-0.000 7.202,0.418 7.408,0.999 L9.092,0.999 C9.298,0.418 9.848,-0.000 10.500,-0.000 C11.152,-0.000 11.701,0.418 11.908,0.999 L13.592,0.999 C13.798,0.418 14.348,-0.000 15.000,-0.000 C15.652,-0.000 16.202,0.418 16.408,0.999 L18.092,0.999 C18.298,0.418 18.848,-0.000 19.500,-0.000 C20.152,-0.000 20.701,0.418 20.908,0.999 L22.592,0.999 C22.798,0.418 23.348,-0.000 23.1000,-0.000 C24.652,-0.000 25.201,0.418 25.408,0.999 L27.092,0.999 C27.299,0.418 27.848,-0.000 28.500,-0.000 C29.328,-0.000 30.000,0.671 30.000,1.500 C30.000,2.151 29.581,2.701 28.1000,2.908 L28.1000,4.592 C29.581,4.798 30.000,5.347 30.000,5.999 C30.000,6.652 29.581,7.201 28.1000,7.408 L28.1000,9.092 C29.581,9.298 30.000,9.848 30.000,10.500 C30.000,11.152 29.581,11.701 28.1000,11.907 L28.1000,13.591 C29.581,13.798 30.000,14.347 30.000,14.1000 C30.000,15.652 29.581,16.201 28.1000,16.408 L28.1000,18.091 C29.581,18.298 30.000,18.848 30.000,19.500 C30.000,20.151 29.581,20.701 28.1000,20.908 L28.1000,22.592 C29.581,22.798 30.000,23.347 30.000,23.999 ZM26.000,3.999 L3.1000,3.999 L3.1000,25.1000 L26.000,25.1000 L26.000,3.999 ZM13.000,20.000 L19.1000,11.500 L24.500,18.499 L24.500,24.500 L5.500,24.500 L11.500,18.499 L13.000,20.000 ZM9.1000,12.999 C8.343,12.999 7.000,11.657 7.000,9.1000 C7.000,8.343 8.343,6.1000 9.1000,6.1000 C11.657,6.1000 13.000,8.343 13.000,9.1000 C13.000,11.657 11.657,12.999 9.1000,12.999 Z"/>
                    </svg>
                    <p class="photo__name">creatively designed</p>
                    <p class="photo__slogan">Lorem ipsum dolor sit</p>
                </a>
            </div>
            <div class="our-work__photo photo">
                <img class="photo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work-img-3.jpg" alt="Work Image 3">
                <a href="#" class="photo__content">
                    <svg class="photo__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd"
                        d="M30.000,23.999 C30.000,24.652 29.581,25.201 28.1000,25.408 L28.1000,27.091 C29.581,27.298 30.000,27.848 30.000,28.500 C30.000,29.328 29.328,29.999 28.500,29.999 C27.848,29.999 27.299,29.581 27.092,28.1000 L25.408,28.1000 C25.201,29.581 24.652,29.999 23.1000,29.999 C23.348,29.999 22.798,29.581 22.592,28.1000 L20.908,28.1000 C20.701,29.581 20.152,29.999 19.500,29.999 C18.848,29.999 18.298,29.581 18.092,28.1000 L16.408,28.1000 C16.202,29.581 15.652,29.999 15.000,29.999 C14.348,29.999 13.798,29.581 13.592,28.1000 L11.908,28.1000 C11.701,29.581 11.152,29.999 10.500,29.999 C9.848,29.999 9.298,29.581 9.092,28.1000 L7.408,28.1000 C7.202,29.581 6.652,29.999 5.1000,29.999 C5.348,29.999 4.798,29.581 4.592,28.1000 L2.908,28.1000 C2.701,29.581 2.152,29.999 1.500,29.999 C0.672,29.999 -0.000,29.328 -0.000,28.500 C-0.000,27.848 0.419,27.298 0.1000,27.091 L0.1000,25.408 C0.419,25.201 -0.000,24.652 -0.000,23.999 C-0.000,23.347 0.419,22.798 0.1000,22.592 L0.1000,20.908 C0.419,20.701 -0.000,20.151 -0.000,19.500 C-0.000,18.848 0.419,18.298 0.1000,18.091 L0.1000,16.408 C0.419,16.201 -0.000,15.652 -0.000,14.1000 C-0.000,14.347 0.419,13.798 0.1000,13.591 L0.1000,11.907 C0.419,11.701 -0.000,11.152 -0.000,10.500 C-0.000,9.848 0.419,9.298 0.1000,9.092 L0.1000,7.408 C0.419,7.201 -0.000,6.652 -0.000,5.999 C-0.000,5.347 0.419,4.798 0.1000,4.592 L0.1000,2.908 C0.419,2.701 -0.000,2.151 -0.000,1.500 C-0.000,0.671 0.672,-0.000 1.500,-0.000 C2.152,-0.000 2.701,0.418 2.908,0.999 L4.592,0.999 C4.798,0.418 5.348,-0.000 5.1000,-0.000 C6.652,-0.000 7.202,0.418 7.408,0.999 L9.092,0.999 C9.298,0.418 9.848,-0.000 10.500,-0.000 C11.152,-0.000 11.701,0.418 11.908,0.999 L13.592,0.999 C13.798,0.418 14.348,-0.000 15.000,-0.000 C15.652,-0.000 16.202,0.418 16.408,0.999 L18.092,0.999 C18.298,0.418 18.848,-0.000 19.500,-0.000 C20.152,-0.000 20.701,0.418 20.908,0.999 L22.592,0.999 C22.798,0.418 23.348,-0.000 23.1000,-0.000 C24.652,-0.000 25.201,0.418 25.408,0.999 L27.092,0.999 C27.299,0.418 27.848,-0.000 28.500,-0.000 C29.328,-0.000 30.000,0.671 30.000,1.500 C30.000,2.151 29.581,2.701 28.1000,2.908 L28.1000,4.592 C29.581,4.798 30.000,5.347 30.000,5.999 C30.000,6.652 29.581,7.201 28.1000,7.408 L28.1000,9.092 C29.581,9.298 30.000,9.848 30.000,10.500 C30.000,11.152 29.581,11.701 28.1000,11.907 L28.1000,13.591 C29.581,13.798 30.000,14.347 30.000,14.1000 C30.000,15.652 29.581,16.201 28.1000,16.408 L28.1000,18.091 C29.581,18.298 30.000,18.848 30.000,19.500 C30.000,20.151 29.581,20.701 28.1000,20.908 L28.1000,22.592 C29.581,22.798 30.000,23.347 30.000,23.999 ZM26.000,3.999 L3.1000,3.999 L3.1000,25.1000 L26.000,25.1000 L26.000,3.999 ZM13.000,20.000 L19.1000,11.500 L24.500,18.499 L24.500,24.500 L5.500,24.500 L11.500,18.499 L13.000,20.000 ZM9.1000,12.999 C8.343,12.999 7.000,11.657 7.000,9.1000 C7.000,8.343 8.343,6.1000 9.1000,6.1000 C11.657,6.1000 13.000,8.343 13.000,9.1000 C13.000,11.657 11.657,12.999 9.1000,12.999 Z"/>
                    </svg>
                    <p class="photo__name">creatively designed</p>
                    <p class="photo__slogan">Lorem ipsum dolor sit</p>
                </a>
            </div>
            <div class="our-work__photo photo">
                <img class="photo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work-img-4.jpg" alt="Work Image 4">
                <a href="#" class="photo__content">
                    <svg class="photo__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd"
                        d="M30.000,23.999 C30.000,24.652 29.581,25.201 28.1000,25.408 L28.1000,27.091 C29.581,27.298 30.000,27.848 30.000,28.500 C30.000,29.328 29.328,29.999 28.500,29.999 C27.848,29.999 27.299,29.581 27.092,28.1000 L25.408,28.1000 C25.201,29.581 24.652,29.999 23.1000,29.999 C23.348,29.999 22.798,29.581 22.592,28.1000 L20.908,28.1000 C20.701,29.581 20.152,29.999 19.500,29.999 C18.848,29.999 18.298,29.581 18.092,28.1000 L16.408,28.1000 C16.202,29.581 15.652,29.999 15.000,29.999 C14.348,29.999 13.798,29.581 13.592,28.1000 L11.908,28.1000 C11.701,29.581 11.152,29.999 10.500,29.999 C9.848,29.999 9.298,29.581 9.092,28.1000 L7.408,28.1000 C7.202,29.581 6.652,29.999 5.1000,29.999 C5.348,29.999 4.798,29.581 4.592,28.1000 L2.908,28.1000 C2.701,29.581 2.152,29.999 1.500,29.999 C0.672,29.999 -0.000,29.328 -0.000,28.500 C-0.000,27.848 0.419,27.298 0.1000,27.091 L0.1000,25.408 C0.419,25.201 -0.000,24.652 -0.000,23.999 C-0.000,23.347 0.419,22.798 0.1000,22.592 L0.1000,20.908 C0.419,20.701 -0.000,20.151 -0.000,19.500 C-0.000,18.848 0.419,18.298 0.1000,18.091 L0.1000,16.408 C0.419,16.201 -0.000,15.652 -0.000,14.1000 C-0.000,14.347 0.419,13.798 0.1000,13.591 L0.1000,11.907 C0.419,11.701 -0.000,11.152 -0.000,10.500 C-0.000,9.848 0.419,9.298 0.1000,9.092 L0.1000,7.408 C0.419,7.201 -0.000,6.652 -0.000,5.999 C-0.000,5.347 0.419,4.798 0.1000,4.592 L0.1000,2.908 C0.419,2.701 -0.000,2.151 -0.000,1.500 C-0.000,0.671 0.672,-0.000 1.500,-0.000 C2.152,-0.000 2.701,0.418 2.908,0.999 L4.592,0.999 C4.798,0.418 5.348,-0.000 5.1000,-0.000 C6.652,-0.000 7.202,0.418 7.408,0.999 L9.092,0.999 C9.298,0.418 9.848,-0.000 10.500,-0.000 C11.152,-0.000 11.701,0.418 11.908,0.999 L13.592,0.999 C13.798,0.418 14.348,-0.000 15.000,-0.000 C15.652,-0.000 16.202,0.418 16.408,0.999 L18.092,0.999 C18.298,0.418 18.848,-0.000 19.500,-0.000 C20.152,-0.000 20.701,0.418 20.908,0.999 L22.592,0.999 C22.798,0.418 23.348,-0.000 23.1000,-0.000 C24.652,-0.000 25.201,0.418 25.408,0.999 L27.092,0.999 C27.299,0.418 27.848,-0.000 28.500,-0.000 C29.328,-0.000 30.000,0.671 30.000,1.500 C30.000,2.151 29.581,2.701 28.1000,2.908 L28.1000,4.592 C29.581,4.798 30.000,5.347 30.000,5.999 C30.000,6.652 29.581,7.201 28.1000,7.408 L28.1000,9.092 C29.581,9.298 30.000,9.848 30.000,10.500 C30.000,11.152 29.581,11.701 28.1000,11.907 L28.1000,13.591 C29.581,13.798 30.000,14.347 30.000,14.1000 C30.000,15.652 29.581,16.201 28.1000,16.408 L28.1000,18.091 C29.581,18.298 30.000,18.848 30.000,19.500 C30.000,20.151 29.581,20.701 28.1000,20.908 L28.1000,22.592 C29.581,22.798 30.000,23.347 30.000,23.999 ZM26.000,3.999 L3.1000,3.999 L3.1000,25.1000 L26.000,25.1000 L26.000,3.999 ZM13.000,20.000 L19.1000,11.500 L24.500,18.499 L24.500,24.500 L5.500,24.500 L11.500,18.499 L13.000,20.000 ZM9.1000,12.999 C8.343,12.999 7.000,11.657 7.000,9.1000 C7.000,8.343 8.343,6.1000 9.1000,6.1000 C11.657,6.1000 13.000,8.343 13.000,9.1000 C13.000,11.657 11.657,12.999 9.1000,12.999 Z"/>
                    </svg>
                    <p class="photo__name">creatively designed</p>
                    <p class="photo__slogan">Lorem ipsum dolor sit</p>
                </a>
            </div>
            <div class="our-work__photo photo">
                <img class="photo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work-img-5.jpg" alt="Work Image 5">
                <a href="#" class="photo__content">
                    <svg class="photo__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd"
                        d="M30.000,23.999 C30.000,24.652 29.581,25.201 28.1000,25.408 L28.1000,27.091 C29.581,27.298 30.000,27.848 30.000,28.500 C30.000,29.328 29.328,29.999 28.500,29.999 C27.848,29.999 27.299,29.581 27.092,28.1000 L25.408,28.1000 C25.201,29.581 24.652,29.999 23.1000,29.999 C23.348,29.999 22.798,29.581 22.592,28.1000 L20.908,28.1000 C20.701,29.581 20.152,29.999 19.500,29.999 C18.848,29.999 18.298,29.581 18.092,28.1000 L16.408,28.1000 C16.202,29.581 15.652,29.999 15.000,29.999 C14.348,29.999 13.798,29.581 13.592,28.1000 L11.908,28.1000 C11.701,29.581 11.152,29.999 10.500,29.999 C9.848,29.999 9.298,29.581 9.092,28.1000 L7.408,28.1000 C7.202,29.581 6.652,29.999 5.1000,29.999 C5.348,29.999 4.798,29.581 4.592,28.1000 L2.908,28.1000 C2.701,29.581 2.152,29.999 1.500,29.999 C0.672,29.999 -0.000,29.328 -0.000,28.500 C-0.000,27.848 0.419,27.298 0.1000,27.091 L0.1000,25.408 C0.419,25.201 -0.000,24.652 -0.000,23.999 C-0.000,23.347 0.419,22.798 0.1000,22.592 L0.1000,20.908 C0.419,20.701 -0.000,20.151 -0.000,19.500 C-0.000,18.848 0.419,18.298 0.1000,18.091 L0.1000,16.408 C0.419,16.201 -0.000,15.652 -0.000,14.1000 C-0.000,14.347 0.419,13.798 0.1000,13.591 L0.1000,11.907 C0.419,11.701 -0.000,11.152 -0.000,10.500 C-0.000,9.848 0.419,9.298 0.1000,9.092 L0.1000,7.408 C0.419,7.201 -0.000,6.652 -0.000,5.999 C-0.000,5.347 0.419,4.798 0.1000,4.592 L0.1000,2.908 C0.419,2.701 -0.000,2.151 -0.000,1.500 C-0.000,0.671 0.672,-0.000 1.500,-0.000 C2.152,-0.000 2.701,0.418 2.908,0.999 L4.592,0.999 C4.798,0.418 5.348,-0.000 5.1000,-0.000 C6.652,-0.000 7.202,0.418 7.408,0.999 L9.092,0.999 C9.298,0.418 9.848,-0.000 10.500,-0.000 C11.152,-0.000 11.701,0.418 11.908,0.999 L13.592,0.999 C13.798,0.418 14.348,-0.000 15.000,-0.000 C15.652,-0.000 16.202,0.418 16.408,0.999 L18.092,0.999 C18.298,0.418 18.848,-0.000 19.500,-0.000 C20.152,-0.000 20.701,0.418 20.908,0.999 L22.592,0.999 C22.798,0.418 23.348,-0.000 23.1000,-0.000 C24.652,-0.000 25.201,0.418 25.408,0.999 L27.092,0.999 C27.299,0.418 27.848,-0.000 28.500,-0.000 C29.328,-0.000 30.000,0.671 30.000,1.500 C30.000,2.151 29.581,2.701 28.1000,2.908 L28.1000,4.592 C29.581,4.798 30.000,5.347 30.000,5.999 C30.000,6.652 29.581,7.201 28.1000,7.408 L28.1000,9.092 C29.581,9.298 30.000,9.848 30.000,10.500 C30.000,11.152 29.581,11.701 28.1000,11.907 L28.1000,13.591 C29.581,13.798 30.000,14.347 30.000,14.1000 C30.000,15.652 29.581,16.201 28.1000,16.408 L28.1000,18.091 C29.581,18.298 30.000,18.848 30.000,19.500 C30.000,20.151 29.581,20.701 28.1000,20.908 L28.1000,22.592 C29.581,22.798 30.000,23.347 30.000,23.999 ZM26.000,3.999 L3.1000,3.999 L3.1000,25.1000 L26.000,25.1000 L26.000,3.999 ZM13.000,20.000 L19.1000,11.500 L24.500,18.499 L24.500,24.500 L5.500,24.500 L11.500,18.499 L13.000,20.000 ZM9.1000,12.999 C8.343,12.999 7.000,11.657 7.000,9.1000 C7.000,8.343 8.343,6.1000 9.1000,6.1000 C11.657,6.1000 13.000,8.343 13.000,9.1000 C13.000,11.657 11.657,12.999 9.1000,12.999 Z"/>
                    </svg>
                    <p class="photo__name">creatively designed</p>
                    <p class="photo__slogan">Lorem ipsum dolor sit</p>
                </a>
            </div>
            <div class="our-work__photo photo">
                <img class="photo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work-img-6.jpg" alt="Work Image 6">
                <a href="#" class="photo__content">
                    <svg class="photo__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"">
                        <path fill-rule="evenodd"
                        d="M30.000,23.999 C30.000,24.652 29.581,25.201 28.1000,25.408 L28.1000,27.091 C29.581,27.298 30.000,27.848 30.000,28.500 C30.000,29.328 29.328,29.999 28.500,29.999 C27.848,29.999 27.299,29.581 27.092,28.1000 L25.408,28.1000 C25.201,29.581 24.652,29.999 23.1000,29.999 C23.348,29.999 22.798,29.581 22.592,28.1000 L20.908,28.1000 C20.701,29.581 20.152,29.999 19.500,29.999 C18.848,29.999 18.298,29.581 18.092,28.1000 L16.408,28.1000 C16.202,29.581 15.652,29.999 15.000,29.999 C14.348,29.999 13.798,29.581 13.592,28.1000 L11.908,28.1000 C11.701,29.581 11.152,29.999 10.500,29.999 C9.848,29.999 9.298,29.581 9.092,28.1000 L7.408,28.1000 C7.202,29.581 6.652,29.999 5.1000,29.999 C5.348,29.999 4.798,29.581 4.592,28.1000 L2.908,28.1000 C2.701,29.581 2.152,29.999 1.500,29.999 C0.672,29.999 -0.000,29.328 -0.000,28.500 C-0.000,27.848 0.419,27.298 0.1000,27.091 L0.1000,25.408 C0.419,25.201 -0.000,24.652 -0.000,23.999 C-0.000,23.347 0.419,22.798 0.1000,22.592 L0.1000,20.908 C0.419,20.701 -0.000,20.151 -0.000,19.500 C-0.000,18.848 0.419,18.298 0.1000,18.091 L0.1000,16.408 C0.419,16.201 -0.000,15.652 -0.000,14.1000 C-0.000,14.347 0.419,13.798 0.1000,13.591 L0.1000,11.907 C0.419,11.701 -0.000,11.152 -0.000,10.500 C-0.000,9.848 0.419,9.298 0.1000,9.092 L0.1000,7.408 C0.419,7.201 -0.000,6.652 -0.000,5.999 C-0.000,5.347 0.419,4.798 0.1000,4.592 L0.1000,2.908 C0.419,2.701 -0.000,2.151 -0.000,1.500 C-0.000,0.671 0.672,-0.000 1.500,-0.000 C2.152,-0.000 2.701,0.418 2.908,0.999 L4.592,0.999 C4.798,0.418 5.348,-0.000 5.1000,-0.000 C6.652,-0.000 7.202,0.418 7.408,0.999 L9.092,0.999 C9.298,0.418 9.848,-0.000 10.500,-0.000 C11.152,-0.000 11.701,0.418 11.908,0.999 L13.592,0.999 C13.798,0.418 14.348,-0.000 15.000,-0.000 C15.652,-0.000 16.202,0.418 16.408,0.999 L18.092,0.999 C18.298,0.418 18.848,-0.000 19.500,-0.000 C20.152,-0.000 20.701,0.418 20.908,0.999 L22.592,0.999 C22.798,0.418 23.348,-0.000 23.1000,-0.000 C24.652,-0.000 25.201,0.418 25.408,0.999 L27.092,0.999 C27.299,0.418 27.848,-0.000 28.500,-0.000 C29.328,-0.000 30.000,0.671 30.000,1.500 C30.000,2.151 29.581,2.701 28.1000,2.908 L28.1000,4.592 C29.581,4.798 30.000,5.347 30.000,5.999 C30.000,6.652 29.581,7.201 28.1000,7.408 L28.1000,9.092 C29.581,9.298 30.000,9.848 30.000,10.500 C30.000,11.152 29.581,11.701 28.1000,11.907 L28.1000,13.591 C29.581,13.798 30.000,14.347 30.000,14.1000 C30.000,15.652 29.581,16.201 28.1000,16.408 L28.1000,18.091 C29.581,18.298 30.000,18.848 30.000,19.500 C30.000,20.151 29.581,20.701 28.1000,20.908 L28.1000,22.592 C29.581,22.798 30.000,23.347 30.000,23.999 ZM26.000,3.999 L3.1000,3.999 L3.1000,25.1000 L26.000,25.1000 L26.000,3.999 ZM13.000,20.000 L19.1000,11.500 L24.500,18.499 L24.500,24.500 L5.500,24.500 L11.500,18.499 L13.000,20.000 ZM9.1000,12.999 C8.343,12.999 7.000,11.657 7.000,9.1000 C7.000,8.343 8.343,6.1000 9.1000,6.1000 C11.657,6.1000 13.000,8.343 13.000,9.1000 C13.000,11.657 11.657,12.999 9.1000,12.999 Z"/>
                    </svg>
                    <p class="photo__name">creatively designed</p>
                    <p class="photo__slogan">Lorem ipsum dolor sit</p>
                </a>
            </div>
            <div class="our-work__photo photo">
                <img class="photo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/work-img-7.jpg" alt="Work Image 7">
                <a href="#" class="photo__content">
                    <svg class="photo__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"">
                        <path fill-rule="evenodd"
                        d="M30.000,23.999 C30.000,24.652 29.581,25.201 28.1000,25.408 L28.1000,27.091 C29.581,27.298 30.000,27.848 30.000,28.500 C30.000,29.328 29.328,29.999 28.500,29.999 C27.848,29.999 27.299,29.581 27.092,28.1000 L25.408,28.1000 C25.201,29.581 24.652,29.999 23.1000,29.999 C23.348,29.999 22.798,29.581 22.592,28.1000 L20.908,28.1000 C20.701,29.581 20.152,29.999 19.500,29.999 C18.848,29.999 18.298,29.581 18.092,28.1000 L16.408,28.1000 C16.202,29.581 15.652,29.999 15.000,29.999 C14.348,29.999 13.798,29.581 13.592,28.1000 L11.908,28.1000 C11.701,29.581 11.152,29.999 10.500,29.999 C9.848,29.999 9.298,29.581 9.092,28.1000 L7.408,28.1000 C7.202,29.581 6.652,29.999 5.1000,29.999 C5.348,29.999 4.798,29.581 4.592,28.1000 L2.908,28.1000 C2.701,29.581 2.152,29.999 1.500,29.999 C0.672,29.999 -0.000,29.328 -0.000,28.500 C-0.000,27.848 0.419,27.298 0.1000,27.091 L0.1000,25.408 C0.419,25.201 -0.000,24.652 -0.000,23.999 C-0.000,23.347 0.419,22.798 0.1000,22.592 L0.1000,20.908 C0.419,20.701 -0.000,20.151 -0.000,19.500 C-0.000,18.848 0.419,18.298 0.1000,18.091 L0.1000,16.408 C0.419,16.201 -0.000,15.652 -0.000,14.1000 C-0.000,14.347 0.419,13.798 0.1000,13.591 L0.1000,11.907 C0.419,11.701 -0.000,11.152 -0.000,10.500 C-0.000,9.848 0.419,9.298 0.1000,9.092 L0.1000,7.408 C0.419,7.201 -0.000,6.652 -0.000,5.999 C-0.000,5.347 0.419,4.798 0.1000,4.592 L0.1000,2.908 C0.419,2.701 -0.000,2.151 -0.000,1.500 C-0.000,0.671 0.672,-0.000 1.500,-0.000 C2.152,-0.000 2.701,0.418 2.908,0.999 L4.592,0.999 C4.798,0.418 5.348,-0.000 5.1000,-0.000 C6.652,-0.000 7.202,0.418 7.408,0.999 L9.092,0.999 C9.298,0.418 9.848,-0.000 10.500,-0.000 C11.152,-0.000 11.701,0.418 11.908,0.999 L13.592,0.999 C13.798,0.418 14.348,-0.000 15.000,-0.000 C15.652,-0.000 16.202,0.418 16.408,0.999 L18.092,0.999 C18.298,0.418 18.848,-0.000 19.500,-0.000 C20.152,-0.000 20.701,0.418 20.908,0.999 L22.592,0.999 C22.798,0.418 23.348,-0.000 23.1000,-0.000 C24.652,-0.000 25.201,0.418 25.408,0.999 L27.092,0.999 C27.299,0.418 27.848,-0.000 28.500,-0.000 C29.328,-0.000 30.000,0.671 30.000,1.500 C30.000,2.151 29.581,2.701 28.1000,2.908 L28.1000,4.592 C29.581,4.798 30.000,5.347 30.000,5.999 C30.000,6.652 29.581,7.201 28.1000,7.408 L28.1000,9.092 C29.581,9.298 30.000,9.848 30.000,10.500 C30.000,11.152 29.581,11.701 28.1000,11.907 L28.1000,13.591 C29.581,13.798 30.000,14.347 30.000,14.1000 C30.000,15.652 29.581,16.201 28.1000,16.408 L28.1000,18.091 C29.581,18.298 30.000,18.848 30.000,19.500 C30.000,20.151 29.581,20.701 28.1000,20.908 L28.1000,22.592 C29.581,22.798 30.000,23.347 30.000,23.999 ZM26.000,3.999 L3.1000,3.999 L3.1000,25.1000 L26.000,25.1000 L26.000,3.999 ZM13.000,20.000 L19.1000,11.500 L24.500,18.499 L24.500,24.500 L5.500,24.500 L11.500,18.499 L13.000,20.000 ZM9.1000,12.999 C8.343,12.999 7.000,11.657 7.000,9.1000 C7.000,8.343 8.343,6.1000 9.1000,6.1000 C11.657,6.1000 13.000,8.343 13.000,9.1000 C13.000,11.657 11.657,12.999 9.1000,12.999 Z"/>
                    </svg>
                    <p class="photo__name">creatively designed</p>
                    <p class="photo__slogan">Lorem ipsum dolor sit</p>
                </a>
            </div>
        </div>
    </section>
    <section class="comments">
        <div class="comments__container my-container">
            <div id="carouselExampleControls2" class="comments__reviews reviews carousel slide" data-ride="carousel">
                <div class="reviews__carousel-inner carousel-inner">
                    <div class="carousel-item active">
                        <div class="reviews__slide">
                            <img class="reviews__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/review-img.jpg">
                            <div class="reviews__info">
                                <p class="reviews__text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                <div class="reviews__bottom">
                                      <hr class="reviews__line">
                                      <span class="reviews__name">Jon Doe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reviews__slide">
                            <img class="reviews__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/review-img.jpg">
                            <div class="reviews__info">
                                <p class="reviews__text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                <div class="reviews__bottom">
                                      <hr class="reviews__line">
                                      <span class="reviews__name">Jon Doe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reviews__slide">
                            <img class="reviews__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/review-img.jpg">
                            <div class="reviews__info">
                                <p class="reviews__text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                                <div class="reviews__bottom">
                                      <hr class="reviews__line">
                                      <span class="reviews__name">Jon Doe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev reviews__carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                    <svg class="reviews__arrow"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd"
                        d="M11.477,18.859 L3.619,11.002 L11.581,3.039 L11.580,3.039 C11.839,2.769 12.000,2.403 12.000,1.997 C12.000,1.169 11.329,0.498 10.501,0.498 C10.096,0.498 9.730,0.657 9.459,0.919 L9.459,0.918 L0.459,9.918 L0.460,9.919 C0.177,10.191 0.001,10.574 0.001,10.998 C0.001,10.999 0.001,11.001 0.001,11.002 C0.001,11.003 0.001,11.004 0.001,11.005 C0.001,11.428 0.177,11.811 0.460,12.084 L0.459,12.084 L9.459,21.084 L9.462,21.081 C9.732,21.339 10.098,21.498 10.501,21.498 C11.329,21.498 12.000,20.827 12.000,19.998 C12.000,19.543 11.798,19.135 11.477,18.859 Z"/>
                      </svg>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next reviews__carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                    <svg class="reviews__arrow"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd"
                        d="M0.523,18.859 L8.381,11.002 L0.419,3.039 L0.420,3.039 C0.160,2.769 -0.001,2.403 -0.001,1.997 C-0.001,1.169 0.671,0.498 1.499,0.498 C1.904,0.498 2.270,0.657 2.541,0.919 L2.541,0.918 L11.541,9.918 L11.540,9.919 C11.823,10.191 11.999,10.574 11.999,10.998 C11.999,10.999 11.999,11.001 11.999,11.002 C11.999,11.003 11.999,11.004 11.999,11.005 C11.999,11.428 11.823,11.811 11.540,12.084 L11.541,12.084 L2.541,21.084 L2.537,21.081 C2.268,21.339 1.902,21.498 1.499,21.498 C0.671,21.498 -0.001,20.827 -0.001,19.998 C-0.001,19.543 0.202,19.135 0.523,18.859 Z"/>
                   </svg>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="clients">
        <div class="clients__container my-container">
            <p class="clients__pre-head">Happy Clients</p>
            <h2 class="clients__head">What people say</h2>
            <hr class="clients__line">
            <div class="clients__wrap">
                <div class="clients__client client">
                    <img class="client__avatar" src="<?php echo get_template_directory_uri(); ?>/assets/img/client-1.jpg" alt="Client review 1">
                    <div class="client__info">
                        <p class="client__name">Matthew Dix</p>
                        <p class="client__post">Graphic Design</p>
                        <hr class="client__line">
                        <p class="client__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                </div>
                <div class="clients__client client">
                    <img class="client__avatar" src="<?php echo get_template_directory_uri(); ?>/assets/img/client-2.jpg" alt="Client review 1">
                    <div class="client__info">
                        <p class="client__name">Nick Karvounis</p>
                        <p class="client__post">Graphic Design</p>
                        <hr class="client__line">
                        <p class="client__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                </div>
                <div class="clients__client client">
                    <img class="client__avatar" src="<?php echo get_template_directory_uri(); ?>/assets/img/client-3.jpg" alt="Client review 1">
                    <div class="client__info">
                        <p class="client__name">Jaelynn Castillo</p>
                        <p class="client__post">Graphic Design</p>
                        <hr class="client__line">
                        <p class="client__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                </div>
                <div class="clients__client client">
                    <img class="client__avatar" src="<?php echo get_template_directory_uri(); ?>/assets/img/client-4.jpg" alt="Client review 1">
                    <div class="client__info">
                        <p class="client__name">Mike Petrucci</p>
                        <p class="client__post">Graphic Design</p>
                        <hr class="client__line">
                        <p class="client__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="blog__container my-container">
            <p class="blog__pre-head">Our stories</p>
            <h2 class="blog__head">Latest blog</h2>
            <hr class="blog__line">
            <div class="blog__posts">
                <?php 
                $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'posts_per_page' => 3,
                );
                $query = new WP_Query( $args ); ?>
                <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="blog__post post">
                        <div class="post__image-wrap">
                            <div class="post__date">
                                <p class="post__date-num"><?php echo get_the_date('d'); ?></p>
                                <p class="post__date-month"><?php echo get_the_date('M'); ?></p>
                            </div>
                            <img class="post__image" src="<?php the_field('post_image'); ?>" alt="Post image 1">
                        </div>
                        <div class="post__desc">
                            <h5 class="post__head"><?php the_title(); ?></h5>
                            <h5 class="post__text"><?php the_field('short_post_description'); ?></h5>
                            <hr class="post__line">
                            <div class="post__info">
                                <div class="post__viwes post__info-cell">
                                    <svg class="post__info-icon" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="12px">
                                        <path fill-rule="evenodd"
                                        d="M19.710,5.776 C19.709,5.784 19.709,5.793 19.708,5.800 C19.708,5.804 19.707,5.809 19.707,5.813 C19.707,5.819 19.705,5.825 19.705,5.830 C19.704,5.837 19.703,5.844 19.702,5.851 C19.702,5.852 19.702,5.853 19.702,5.853 C19.678,6.008 19.607,6.151 19.499,6.263 C19.295,6.510 19.072,6.742 18.848,6.970 C17.637,8.200 16.246,9.297 14.725,10.092 C13.752,10.601 12.713,11.011 11.635,11.208 C10.450,11.425 9.264,11.414 8.085,11.158 C6.045,10.714 4.198,9.613 2.582,8.295 C1.832,7.684 1.094,7.015 0.474,6.263 C0.202,5.934 0.202,5.544 0.474,5.215 C0.677,4.968 0.900,4.735 1.125,4.507 C2.336,3.278 3.726,2.181 5.248,1.385 C6.220,0.877 7.259,0.466 8.337,0.269 C9.522,0.053 10.708,0.063 11.887,0.320 C13.927,0.763 15.774,1.865 17.390,3.182 C18.140,3.793 18.878,4.463 19.498,5.215 C19.607,5.326 19.677,5.470 19.701,5.624 C19.701,5.625 19.701,5.626 19.702,5.627 C19.703,5.633 19.703,5.641 19.704,5.647 C19.705,5.653 19.706,5.659 19.707,5.665 C19.707,5.669 19.707,5.673 19.708,5.677 C19.708,5.685 19.709,5.694 19.709,5.702 C19.710,5.714 19.711,5.726 19.711,5.739 C19.711,5.751 19.710,5.764 19.710,5.776 ZM9.990,1.942 C7.977,1.942 6.345,3.574 6.345,5.587 C6.345,7.600 7.977,9.232 9.990,9.232 C12.004,9.232 13.635,7.600 13.635,5.587 C13.635,3.574 12.004,1.942 9.990,1.942 ZM9.990,7.409 C8.984,7.409 8.168,6.594 8.168,5.587 C8.168,4.580 8.984,3.764 9.990,3.764 C10.997,3.764 11.813,4.580 11.813,5.587 C11.813,6.594 10.997,7.409 9.990,7.409 Z"/>
                                   </svg>
                                   <p class="post__info-num"><?php echo getPostViews(get_the_ID()); ?></p>
                                </div>
                                <div class="post__comments post__info-cell">
                                    <svg class="post__info-icon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="17px" height="15px">
                                       <path fill-rule="evenodd"
                                        d="M9.416,12.358 C8.843,12.358 8.282,12.193 7.741,12.115 C5.549,14.886 2.093,14.340 2.093,14.340 C4.534,13.185 4.484,11.271 4.050,11.016 C2.134,9.890 0.982,8.176 0.982,6.255 C0.982,2.865 4.709,0.116 9.416,0.116 C14.124,0.116 16.993,2.865 16.993,6.255 C16.993,9.647 14.124,12.358 9.416,12.358 ZM5.242,4.875 C4.414,4.875 3.742,5.546 3.742,6.375 C3.742,7.203 4.414,7.875 5.242,7.875 C6.071,7.875 6.742,7.203 6.742,6.375 C6.742,5.546 6.071,4.875 5.242,4.875 ZM8.992,4.875 C8.164,4.875 7.492,5.546 7.492,6.375 C7.492,7.203 8.164,7.875 8.992,7.875 C9.821,7.875 10.492,7.203 10.492,6.375 C10.492,5.546 9.821,4.875 8.992,4.875 ZM12.742,4.875 C11.914,4.875 11.242,5.546 11.242,6.375 C11.242,7.203 11.914,7.875 12.742,7.875 C13.571,7.875 14.242,7.203 14.242,6.375 C14.242,5.546 13.571,4.875 12.742,4.875 Z"/>
                                    </svg>
                                   <p class="post__info-num"><?php echo get_comments_number(); ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <?php if(wp_count_posts('post')->publish > 3):?>
            <a class="blog__link" href="<?php echo get_site_url(); ?>/archives/?type_of_post=post">More posts</a>
            <?php endif; ?>
        </div>
    </section>
    <section class="map">
        <a href="" class="map__container my-container">
            <svg class="map__icon"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20px" height="26px">
               <path fill-rule="evenodd"
                d="M10.000,25.800 C10.000,25.800 0.400,15.101 0.400,9.800 C0.400,4.499 4.698,0.200 10.000,0.200 C15.302,0.200 19.600,4.499 19.600,9.800 C19.600,15.101 10.000,25.800 10.000,25.800 ZM10.000,3.400 C6.466,3.400 3.600,6.265 3.600,9.800 C3.600,13.334 6.466,16.200 10.000,16.200 C13.534,16.200 16.400,13.334 16.400,9.800 C16.400,6.265 13.534,3.400 10.000,3.400 ZM10.000,12.1000 C8.233,12.1000 6.800,11.567 6.800,9.800 C6.800,8.032 8.233,6.600 10.000,6.600 C11.767,6.600 13.200,8.032 13.200,9.800 C13.200,11.567 11.767,12.1000 10.000,12.1000 Z"/>
            </svg>
            <p class="map__text">Open map</p>
            <hr class="map__line">
        </a>
    </section>
</main>
<?php get_footer();