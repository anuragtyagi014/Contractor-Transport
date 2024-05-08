<!-- Footer Start -->
<?php
$logo_module = get_field('logo_module', 'option');
$footer_logo = !empty($logo_module['logo']) ? $logo_module['logo'] : '';
$footer_about = !empty($logo_module['about']) ? $logo_module['about'] : '';
$footer_get_in_touch_title = !empty($logo_module['get_in_touch']['title']) ? $logo_module['get_in_touch']['title'] : '';
$footer_get_in_touch_url = !empty($logo_module['get_in_touch']['url']) ? $logo_module['get_in_touch']['url'] : '';
$footer_facebook_link = !empty($logo_module['facebook_link']) ? $logo_module['facebook_link'] : '';
$footer_linkedin_link = !empty($logo_module['linkedin_link']) ? $logo_module['linkedin_link'] : '';


$navigation_module = get_field('navigation_module', 'option');
$navigation_module_heading = !empty($navigation_module['heading']) ? $navigation_module['heading'] : '';
$navigation_module_shortcode = !empty($navigation_module['shortcode']) ? $navigation_module['shortcode'] : '';



$newsletter_module = get_field('newsletter_module', 'option');
$newsletter_module_heading = !empty($newsletter_module['heading']) ? $newsletter_module['heading'] : '';
$newsletter_module_content = !empty($newsletter_module['content']) ? $newsletter_module['content'] : '';
$newsletter_module_shortcode = !empty($newsletter_module['shortcode']) ? $newsletter_module['shortcode'] : '';
$newsletter_module_tag_line = !empty($newsletter_module['tag_line']) ? $newsletter_module['tag_line'] : '';



$get_in_touch_module = get_field('get_in_touch_module', 'option');
$get_in_touch_module_heading = !empty($get_in_touch_module['heading']) ? $get_in_touch_module['heading'] : '';
$get_in_touch_module_phone_number_name = !empty($get_in_touch_module['phone_number']['name']) ? $get_in_touch_module['phone_number']['name'] : '';
$get_in_touch_module_phone_number_number = !empty($get_in_touch_module['phone_number']['number']) ? $get_in_touch_module['phone_number']['number'] : '';


$get_in_touch_module_email_id_name = !empty($get_in_touch_module['email_id']['name']) ? $get_in_touch_module['email_id']['name'] : '';
$get_in_touch_module_email_id_email = !empty($get_in_touch_module['email_id']['email']) ? $get_in_touch_module['email_id']['email'] : '';

$get_in_touch_module_location_name = !empty($get_in_touch_module['location']['name']) ? $get_in_touch_module['location']['name'] : '';
$get_in_touch_module_location_address = !empty($get_in_touch_module['location']['address']) ? $get_in_touch_module['location']['address'] : '';



$copy_right_module = get_field('copy_right_module', 'option');

?>
<footer class="theme__footer">
    <div class="theme__container">
        <div class="footer__row">
            <div class="footer__column">
                <div class="footer__item footer__about">

                    <a href="<?php echo site_url(); ?>" class="theme__logo">
                        <img src="<?= $footer_logo; ?>" alt="Contractor Transport LLC" />
                    </a>
                    <p><?= $footer_about; ?></p>
                    <?php if (!empty($footer_get_in_touch_title) && !empty($footer_get_in_touch_url)) {
                    ?>
                        <a href="<?= $footer_get_in_touch_url; ?>" class="theme__btn theme__btn-primary"><?= $footer_get_in_touch_title; ?>
                            <i class="fas fa-long-arrow-alt-right"></i></a>
                    <?php }
                    ?>

                    <ul class="footer__social-links">
                        <li><a href="<?= $footer_facebook_link; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?= $footer_linkedin_link; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>

                </div>
            </div>

            <div class="footer__column">
                <div class="footer__item">
                    <h4><?= $navigation_module_heading; ?></h4>
                    <ul class="footer__navigation">
                        <?= do_shortcode($navigation_module_shortcode); ?>
                        <!-- <li><a href="<?php //echo site_url(); 
                                            ?>">Home</a></li>
                        <li><a href="https://devt27.sg-host.com/about-us/">About Us</a></li>
                        <li><a href="https://devt27.sg-host.com/news/">News</a></li>
                        <li><a href="javascript:void(0);">User login</a></li>
                        <li><a href="javascript:void(0);">Team</a></li>
                        <li><a href="javascript:void(0);">Projects</a></li> -->
                    </ul>
                </div>
            </div>

            <div class="footer__column">
                <div class="footer__item footer__newsletter">
                    <h4><?= $newsletter_module_heading; ?></h4>
                    <p><?= $newsletter_module_content; ?></p>
                    <div class="newsletter__form">
                        <?= do_shortcode($newsletter_module_shortcode); ?>
                        <?php // echo do_shortcode('[contact-form-7 id="afa658f" title="Subscription form"]'); 
                        ?>
                    </div>
                    <?php if (!empty($newsletter_module_tag_line)) { ?><p>*** We never gonna spamming</p><?php } ?>
                </div>
            </div>

            <div class="footer__column">
                <div class="footer__item">
                    <h4><?= $get_in_touch_module_heading; ?></h4>
                    <ul class="footer__contact-list">
                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <div>
                                <p><?= $get_in_touch_module_phone_number_name; ?></p>
                                <a href="tel:<?= $get_in_touch_module_phone_number_number; ?>"><?= substr($get_in_touch_module_phone_number_number, 0, 3) . '-' . substr($get_in_touch_module_phone_number_number, 3, 3) . '-' . substr($get_in_touch_module_phone_number_number, 6); ?></a>
                            </div>
                        </li>
                        <li>
                            <span><i class="far fa-envelope"></i></span>
                            <div>
                                <p><?= $get_in_touch_module_email_id_name; ?></p>
                                <a href="mailto:<?= $get_in_touch_module_email_id_email; ?>"><?= $get_in_touch_module_email_id_email; ?></a>
                            </div>
                        </li>
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <div>
                                <p><?= $get_in_touch_module_location_name; ?></p>

                                <a href="<?= !empty($get_in_touch_module_location_address['url']) ? $get_in_touch_module_location_address['url'] : ''; ?>" target="_blank"><?= !empty($get_in_touch_module_location_address['title']) ? $get_in_touch_module_location_address['title'] : ''; ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
    <p class="copyright__strip">
        <?= !empty($copy_right_module) ? $copy_right_module : ''; ?>
    </p>
</footer>

<!-- Footer End -->


<!-- Mobile Menu Start -->
<?php
$main_header = get_field('main_header', 'option');
$logo = !empty($main_header['logo']) ? $main_header['logo'] : '';
$get_a_quote_link_title = !empty($main_header['get_a_quote_link']['title']) ? $main_header['get_a_quote_link']['title'] : '';
$get_a_quote_link_url = !empty($main_header['get_a_quote_link']['url']) ? $main_header['get_a_quote_link']['url'] : '';
$menu_exists = wp_get_nav_menu_object('Primary Menu');
$tree = wpse_nav_menu_2_tree($menu_exists->term_id);

?>
<div class="mobile__menu">
    <div class="mobile__menu-row">
        <a href="<?php echo site_url(); ?>" class="theme__logo">
            <img src="<?= $logo; ?>" alt="Contractor Transport LLC" />
        </a>

        <button class="mobile__menu-close-btn theme__btn theme__btn-primary"><i class="fas fa-times"></i></button>
    </div>

    <ul class="mobile__menu-navigation">
        <!-- <li><a href="javscript:void(0);">About</a><button class="theme__btn theme__btn-primary mobile__menu-dropdown-btn">
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
                <li><a href="https://devt27.sg-host.com/hot-shot-services/">Hot Shot Services</a></li>
                <li><a href="https://devt27.sg-host.com/traffic-control-services/">Traffic Control Services</a></li>
                <li><a href="https://devt27.sg-host.com/water-hauling-sevices/">Water Hauling Sevices</a></li>
                <li><a href="https://devt27.sg-host.com/wellsite-services/">Wellsite Services</a></li>
                <li><a href="https://devt27.sg-host.com/water-management/">Water Management</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);">Safety</a></li>
        <li><a href="javascript:void(0);">Employment Opportunities</a></li>
        <li><a href="javascript:void(0);">Contact</a></li> -->

        <?php
        foreach ($tree as $k1 => $v1) {
            if (empty($v1->wpse_children)) { ?>
                <li><a href="<?= $v1->url; ?>"><?= $v1->title; ?></a></li>
            <?php } else {  ?>
                <li><a href="javscript:void(0);"><?= $v1->title; ?></a><button class="theme__btn theme__btn-primary mobile__menu-dropdown-btn">
                        <i class="fas fa-angle-down"></i></button>
                    <ul>
                        <?php
                        foreach ($v1->wpse_children as $k2 => $v2) { 

if (empty($v2->wpse_children)) { ?>
                <li><a href="<?= $v2->url; ?>"><?= $v2->title; ?></a></li>
            <?php } else {  ?>
                <li><a href="javscript:void(0);"><?= $v2->title; ?></a><button class="theme__btn theme__btn-primary mobile__menu-dropdown-btn">
                        <i class="fas fa-angle-down"></i></button>
                    <ul>
                        <?php
                        foreach ($v2->wpse_children as $k3 => $v3) { ?>
                            <li><a href="<?= $v3->url; ?>"><?= $v3->title; ?></a></li>
                        <?php }
                        ?>
                    </ul>
                </li>
        <?php }
 }
                        ?>
                    </ul>
                </li>
        <?php }
        }

        ?>

    </ul>
    <?php
    if (!empty($get_a_quote_link_title) && !empty($get_a_quote_link_url)) { ?>
        <div class="mobile__menu-action">
            <a class="theme__btn theme__btn-primary" href="<?= $get_a_quote_link_url; ?>"><?= $get_a_quote_link_title; ?></a>
        </div>
    <?php } ?>
</div>
<!-- Mobile Menu End -->
<?php wp_footer(); ?>

<!-- Cusotom js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/local.js"></script>
</body>

</html>