<div class="header_wrapper">
<header class="header">
    <?php if ($innerPage) :?>
        <a href="/"><img class="header__logo" src="<?= $imgPath.'logo.svg'?>" alt="Search team 7 logo" height="119" width="131"></a>
    <?php else :?>
        <img class="header__logo" src="<?= $imgPath.'logo.svg'?>" alt="Search team 7 logo" height="119" width="131">
    <?php endif; ?>

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
        <a class="header__button button-transparent" href="#home_request-form">Contact</a>

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
</div>
