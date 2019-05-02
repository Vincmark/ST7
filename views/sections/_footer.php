<footer class="footer">
    <div class="footer-wrapper">
        <section class="footer-upper">
            <div class="footer-upper-wrapper">

                <div class="footer-upper__col1">
                    <?php if ($innerPage) :?>
                        <a href="/"><img class="footer-upper__logo" src="<?= $imgPath.'logo.svg'?>" alt="Search Team 7 logo" height="119" width="131"></a>
                    <?php else :?>
                        <img class="footer-upper__logo" src="<?= $imgPath.'logo.svg'?>" alt="Search Team 7 logo" height="119" width="131">
                    <?php endif; ?>

                    <ul class="footer-upper__social-list">
                        <li class="footer-upper__social-item">
                            <a class="footer-upper__social-link footer-upper__facebook-icon" href="https://www.facebook.com/#" target="_blank">
<!--                                <img class="footer-upper__facebook-icon" src="--><?php //echo $imgPath.'facebook.png'?><!--" alt="Search Team 7 facebook link">-->
                            </a>
                        </li>
                        <li class="footer-upper__social-item">
                            <a class="footer-upper__social-link footer-upper__linkedin-icon" href="https://www.linkedin.com/company/#" target="_blank">
<!--                                <img class="footer-upper__linkedin-icon" src="--><?php //echo $imgPath.'linkedin.png'?><!--" alt="Search Team 7 linkedin link">-->
                            </a>
                        </li>
                        <li class="footer-upper__social-item">
                            <a class="footer-upper__social-link footer-upper__behance-icon" href="https://www.behance.net/#" target="_blank">
<!--                                <img class="footer-upper__behance-icon" src="--><?php //echo $imgPath.'behance.png'?><!--" alt="Search Team 7 behance link">-->
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-upper__col2">
                    <h2 class="footer-upper__header">Navigate</h2>
                    <div class="footer-upper__menu-list">
                    <ul class="footer-upper__left-menu-list">
                        <li class="footer-upper__menu-item"><a class="footer-upper__link" href="#">About</a></li>
                        <li class="footer-upper__menu-item"><a class="footer-upper__link" href="#">Services</a></li>
                        <li class="footer-upper__menu-item"><a class="footer-upper__link" href="#">Portfolio</a></li>
                    </ul>
                    <ul class="footer-upper__right-menu-list">
                        <li class="footer-upper__menu-item"><a class="footer-upper__link" href="#">Our process</a></li>
                        <li class="footer-upper__menu-item"><a class="footer-upper__link" href="#">Blog</a></li>
                        <li class="footer-upper__menu-item"><a class="footer-upper__link" href="#">Careers</a></li>
                    </ul>
                    </div>
                </div>
                <div class="footer-upper__col3">
                    <h2 class="footer-upper__header">Contact us</h2>
                    <p class="footer-upper__contact-item"><a class="footer-upper__link footer-upper__email-link" href="mailto:info@searchteam7.com">info@searchteam7.com</a></p>
                    <p class="footer-upper__contact-item footer-upper__phone">267-486-1481</p>
                    <p class="footer-upper__contact-item footer-upper__address">1629 K Street NW, Suite 300 Washington, DC 20006</p>
                </div>
            </div>
        </section>
        <section class="footer-lower">
            <div class="footer-lower-wrapper">
                <p class="footer-lower__copyright">© <?php echo date('Y') ?>, Search Team 7. All rights reserved</p>
                <div class="footer-lower__links-group">
                    <a class="footer-lower__link" href="terms-of-use">Terms of use</a>
                    <a class="footer-lower__link" href="privacy-policy">Privacy policy</a>
                </div>
            </div>
        </section>
    </div>
</footer>