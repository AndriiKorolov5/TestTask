<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php the_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <div class="header__container my-container navbar-expand-lg">
                <a class="header__main-link" href="#">
                    <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/MoGo.png" alt="Logo">
                </a>
                <button class="header__button navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="header__button-elems"></span>
                    <span class="header__button-elems"></span>
                    <span class="header__button-elems"></span>
                </button>
                <div class="header__menu menu collapse navbar-collapse" id="navbarText">
                    <ul class="menu__list">
                        <li class="menu__list-item">
                            <a href="#" class="menu__list-link">about</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#" class="menu__list-link">service</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#" class="menu__list-link">work</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#" class="menu__list-link">blog</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#" class="menu__list-link">contact</a>
                        </li>
                    </ul>
                    <a class="menu__link" href="#">
                        <svg  class="menu__link-img"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                           <path fill-rule="evenodd"
                            d="M17.726,3.663 L17.727,3.663 L15.252,9.163 L15.252,9.163 C15.130,9.434 14.866,9.628 14.555,9.648 L14.555,9.648 L7.427,10.123 L7.839,11.299 L15.600,11.299 C16.511,11.299 17.250,12.039 17.250,12.950 C17.250,13.861 16.511,14.600 15.600,14.600 C14.689,14.600 13.950,13.861 13.950,12.950 L6.250,12.950 C6.250,13.861 5.511,14.600 4.600,14.600 C3.689,14.600 2.950,13.861 2.950,12.950 C2.950,12.039 3.689,11.299 4.600,11.299 L6.091,11.299 L2.915,2.225 L1.025,2.225 C0.569,2.225 0.200,1.855 0.200,1.400 C0.200,0.944 0.569,0.575 1.025,0.575 L3.500,0.575 C3.860,0.575 4.163,0.807 4.276,1.128 L4.279,1.127 L4.759,2.500 L16.975,2.500 C17.431,2.500 17.800,2.869 17.800,3.325 C17.800,3.445 17.773,3.559 17.726,3.663 ZM5.337,4.150 L6.862,8.507 L13.951,8.034 L15.699,4.150 L5.337,4.150 Z"/>
                       </svg>
                    </a>
                    <a class="menu__link" href="#">
                        <svg  class="menu__link-img"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                           <path fill-rule="evenodd"
                            d="M17.317,14.983 C17.615,15.281 17.800,15.694 17.800,16.150 C17.800,17.061 17.061,17.800 16.150,17.800 C15.694,17.800 15.282,17.615 14.983,17.316 L14.983,17.316 L10.147,12.481 C9.165,13.061 8.023,13.400 6.800,13.400 C3.155,13.400 0.200,10.445 0.200,6.800 C0.200,3.155 3.155,0.200 6.800,0.200 C10.445,0.200 13.400,3.155 13.400,6.800 C13.400,8.023 13.061,9.165 12.481,10.147 L17.317,14.983 L17.317,14.983 ZM6.800,1.850 C4.066,1.850 1.850,4.066 1.850,6.800 C1.850,9.534 4.066,11.750 6.800,11.750 C9.534,11.750 11.750,9.534 11.750,6.800 C11.750,4.066 9.534,1.850 6.800,1.850 Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </header>