
    <!-- Footer Start -->

    <footer class="theme__footer">
        <div class="theme__container">
            <div class="footer__row">
                <div class="footer__column">
                    <div class="footer__item footer__about">

                        <a href="javascript:void(0);" class="theme__logo">
                            <img src="/wp-content/uploads/2023/11/logo.png" alt="Contractor Transport LLC" />
                        </a>
                        <p>Contractor Transport, LLC (CT) is one of the largest oil field service contractor in the
                            northeast.</p>

                        <button class="theme__btn theme__btn-primary">Get in Touch <i
                                class="fas fa-long-arrow-alt-right"></i></button>

                        <ul class="footer__social-links">
                            <li><a href="javscript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javscript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                    </div>
                </div>

                <div class="footer__column">
                    <div class="footer__item">
                        <h4>Navigation</h4>
                        <ul class="footer__navigation">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">About Us</a></li>
                            <li><a href="javascript:void(0);">News</a></li>
                            <li><a href="javascript:void(0);">User login</a></li>
                            <li><a href="javascript:void(0);">Team</a></li>
                            <li><a href="javascript:void(0);">Projects</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer__column">
                    <div class="footer__item footer__newsletter">
                        <h4>Newsletter</h4>
                        <p>Subscribe our newsletter to get our <br> latest updates &amp; news.</p>

                        <div class="newsletter__form">
                            <form action="">
                                <div class="form-group">
                                    <input type="email" placeholder="Enter Email Address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme__btn theme__btn-primary">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                        <p>*** We never gonna spamming</p>
                    </div>
                </div>

                <div class="footer__column">
                    <div class="footer__item">
                        <h4>Get In Touch</h4>
                        <ul class="footer__contact-list">
                            <li>
                                <span><i class="fas fa-phone-alt"></i></span>
                                <div>
                                    <p>Phone Number</p>
                                    <a href="tel:3049730707">304-973-0707</a>
                                </div>
                            </li>
                            <li>
                                <span><i class="far fa-envelope"></i></span>
                                <div>
                                    <p>Email</p>
                                    <a href="mailto:info@cxrtrans.com">info@cxrtrans.com</a>
                                </div>
                            </li>
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <div>
                                    <p>Office Address</p>
                                    <a href="mailto:info@cxrtrans.com">1380 Mount Cobb Road, <br> Lake Ariel, PA
                                        18436</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
        <p class="copyright__strip">
            &copy; Copyright 2023. All Rights Reserved
        </p>
    </footer>

    <!-- Footer End -->

    <!-- Mobile Menu Start -->
    <div class="mobile__menu">
        <div class="mobile__menu-row">
            <a href="javascript:void(0);" class="theme__logo">
                  <img src="/wp-content/uploads/2023/11/logo.png" alt="Contractor Transport LLC" />
            </a>

            <button class="mobile__menu-close-btn theme__btn theme__btn-primary"><i class="fas fa-times"></i></button>
        </div>

        <ul class="mobile__menu-navigation">
            <li><a href="javscript:void(0);">About</a><button
                    class="theme__btn theme__btn-primary mobile__menu-dropdown-btn">
                    <i class="fas fa-angle-down"></i></button>
                <ul>
                    <li><a href="javascript:void(0);">Business Principles</a></li>
                    <li><a href="javascript:void(0);">Our Team</a></li>
                    <li><a href="javascript:void(0);">CT Cares</a></li>
                    <li><a href="javascript:void(0);">Our Process</a></li>
                </ul>
            </li>
            <li><a href="javscript:void(0);">News</a></li>
            <li><a href="javscript:void(0);">Services </a>
                <button class="theme__btn theme__btn-primary mobile__menu-dropdown-btn">
                    <i class="fas fa-angle-down"></i></button>

                <ul>
                    <li><a href="javascript:void(0);">Hot Shot Services</a></li>
                    <li><a href="javascript:void(0);">Traffic Control Services</a></li>
                    <li><a href="javascript:void(0);">Water Hauling Sevices</a></li>
                    <li><a href="javascript:void(0);">Wellsite Services</a></li>
                    <li><a href="javascript:void(0);">Water Management</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);">Safety</a></li>
            <li><a href="javascript:void(0);">Employment Opportunities</a></li>
            <li><a href="javascript:void(0);">Contact</a></li>
        </ul>

        <div class="mobile__menu-action">
            <button class="theme__btn theme__btn-primary">Get a Quote</button>
        </div>

    </div>
    <!-- Mobile Menu End -->

  

<?php wp_footer(); ?>

    <!-- Custom Css -->
    <script>
        (function ($) {

            // On DOM Load
            $(document).ready(function () {

                // Mobile menu Open
                $(".mobile__menu-trigger").click(function () {
                    $(".mobile__menu").addClass("active");
                    $("body").css("overflow", "hidden");
                })

                // Mobile Menu Close
                $(".mobile__menu-close-btn").click(function () {
                    $(".mobile__menu").removeClass("active")
                    $("body").css("overflow", "auto");
                })

                // Mobile Menu Dropdown
                $(".mobile__menu-dropdown-btn").click(function () {
                    $(this).closest("li").siblings("li").removeClass("active");
                    $(this).closest("li").siblings("li").find("ul").first().slideUp(150)
                    $(this).closest("li").toggleClass("active")
                    $(this).siblings("ul").slideToggle(150)
                })

            })

        })(jQuery)
    </script>
</body>
</html>