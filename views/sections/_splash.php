<section class="splash">
    <div class="splash-wrapper">
        <h1 class="visually-hidden">Search Team 7 official website</h1>
        <header class="header">
            <img class="header__logo" src="<?= $imgPath.'logo.svg'?>" alt="Search team 7 logo" height="119" width="131">
            <div class="header-nav-wrapper">
                <nav class="header-menu__wrapper">
                    <ul class="header-menu">
                        <li class="header-menu__menu-item"><a href="#">Home</a></li>
                        <li class="header-menu__menu-item"><a href="#">About</a></li>
                        <li class="header-menu__menu-item"><a href="#">Services</a></li>
                        <li class="header-menu__menu-item"><a href="#">Portfolio</a></li>
                        <li class="header-menu__menu-item"><a href="#">Our process</a></li>
                        <li class="header-menu__menu-item"><a href="#">Blog</a></li>
                    </ul>
                </nav>
                <a class="header__button button-transparent" href="#id_contact-us">Contact</a>

            </div>
            <button class="header-menu-toggler" id="header-menu-toggler"></button>
            <div class="header-mobile-menu__wrapper" id="mobile-menu-wrapper">

                <button class="header-mobile-menu__close-button" id="mobile-menu__close-button"></button>
                <ul class="header-mobile-menu">
                    <li class="header-mobile-menu__menu-item"><a href="#">Home</a></li>
                    <li class="header-mobile-menu__menu-item"><a href="#">About</a></li>
                    <li class="header-mobile-menu__menu-item"><a href="#">Services</a></li>
                    <li class="header-mobile-menu__menu-item"><a href="#">Portfolio</a></li>
                    <li class="header-mobile-menu__menu-item"><a href="#">Our process</a></li>
                    <li class="header-mobile-menu__menu-item"><a href="#">Blog</a></li>
                    <li class="header-mobile-menu__menu-item"><a href="#">Contact us</a></li>
                </ul>
            </div>
        </header>
        <div class="splash-content">
            <p class="splash-content__description">We are going to create <span class="splash-content__description-green">a results driven optimal marketing strategy</span> for your business</p>
        </div>
        <?php include("_home_request-form.php");?>
    </div>
</section>