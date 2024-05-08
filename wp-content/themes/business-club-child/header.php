<?php

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business_Club
 */

?>
<?php
/**
 * Hook - business_club_action_doctype.
 *
 * @hooked business_club_doctype - 10
 */
do_action('business_club_action_doctype');
?>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css" />



<head>
    <?php
    /**
     * Hook - business_club_action_head.
     *
     * @hooked business_club_head - 10
     */
    do_action('business_club_action_head');
    ?>

    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

    <!-- Header Start -->
    <?php
    $top_header = get_field('top_header', 'option');
    $phone_number = !empty($top_header['phone_number']) ? $top_header['phone_number'] : '';
    $email = !empty($top_header['email']) ? $top_header['email'] : '';
    $address_title = !empty($top_header['address']['title']) ? $top_header['address']['title'] : '';
    $address_url = !empty($top_header['address']['url']) ? $top_header['address']['url'] : '';
    $facebooklink = !empty($top_header['facebooklink']) ? $top_header['facebooklink'] : '';
    $linkedin_link = !empty($top_header['linkedin_link']) ? $top_header['linkedin_link'] : '';

    $main_header = get_field('main_header', 'option');
    $logo = !empty($main_header['logo']) ? $main_header['logo'] : '';

    $get_a_quote_link_title = !empty($main_header['get_a_quote_link']['title']) ? $main_header['get_a_quote_link']['title'] : '';
    $get_a_quote_link_url = !empty($main_header['get_a_quote_link']['url']) ? $main_header['get_a_quote_link']['url'] : '';

    $menu_exists = wp_get_nav_menu_object('Primary Menu');
    $tree = wpse_nav_menu_2_tree($menu_exists->term_id);
    //print_r($tree);

    ?>
    <header class="theme__header">
        <div class="theme__header-top">
            <div class="theme__container">
                <div class="row">
                    <div class="col-md-11">
                        <ul class="contact__links">
                            <li><a href="tel:<?= $phone_number; ?>"><i class="fas fa-phone"></i> <?= substr($phone_number, 0, 3) . '-' . substr($phone_number, 3, 3) . '-' . substr($phone_number, 6); ?></a></li>
                            <li><a href="mailto:<?= $email; ?>"><i class="fas fa-envelope"></i> <?= $email; ?></a>
                            </li>
                            <li><a href="<?= $address_url; ?>" target="_blank"><i class="fas fa-map-marker-alt"></i><?= $address_title; ?></a></li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <ul class="social__links">
                            <li><a href="<?= $facebooklink; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= $linkedin_link; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="theme__header-main">
            <div class="theme__container">
                <div class="theme__header-row">

                    <a href="<?php echo site_url(); ?>" class="theme__logo">
                        <img src="<?= $logo; ?>" alt="Contractor Transport LLC" />
                    </a>


                    <nav class="theme__header-navigation">
                        <ul>
                            <?php
                            foreach ($tree as $k1 => $v1) {
                                if (empty($v1->wpse_children)) { ?>
                                    <li><a href="<?= $v1->url; ?>"><?= $v1->title; ?></a></li>
                                <?php } else {  ?>
                                    <li class="menu__has-children">
                                        <a href="<?= $v1->url; ?>"><?= $v1->title; ?> <i class="fas fa-angle-down"></i></a>
                                        <ul>
                                            <?php
                                            foreach ($v1->wpse_children as $k2 => $v2) { 
if (empty($v2->wpse_children)) { ?>
                                    <li><a href="<?= $v2->url; ?>"><?= $v2->title; ?></a></li>
                                <?php } else {  ?>
                                    <li class="menu__has-children">
                                        <a href="<?= $v2->url; ?>"><?= $v2->title; ?> <i class="fas fa-angle-down"></i></a>
                                        <ul>
                                            <?php
                                            foreach ($v2->wpse_children as $k3 => $v3) { 


?>
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

                            <!--  <li class="menu__has-children">
                                <a href="https://devt27.sg-host.com/about-us/">About <i class="fas fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="https://devt27.sg-host.com/about-us/business-principles/">Business
                                            Principles</a></li>
                                    <li><a href="javascript:void(0);">Our Team</a></li>
                                    <li><a href="javascript:void(0);">CT Cares</a></li>
                                    <li><a href="javascript:void(0);">Our Process</a></li>
                                </ul>
                            </li>
                            <li><a href="https://devt27.sg-host.com/news/">News</a></li>
                            




                            <li class="menu__has-children"><a href="javscript:void(0);">Services <i class="fas fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="https://devt27.sg-host.com/hot-shot-services/">Hot Shot Services</a>
                                    </li>
                                    <li><a href="https://devt27.sg-host.com/traffic-control-services/">Traffic Control
                                            Services</a></li>
                                    <li><a href="https://devt27.sg-host.com/water-hauling-sevices/">Water Hauling
                                            Sevices</a></li>
                                    <li><a href="https://devt27.sg-host.com/wellsite-services/">Wellsite Services</a>
                                    </li>
                                    <li><a href="https://devt27.sg-host.com/water-management/">Water Management</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);">Safety</a></li>
                            <li><a href="javascript:void(0);">Employment Opportunities</a></li>
                            <li><a href="https://devt27.sg-host.com/contact-us/">Contact</a></li> -->
                        </ul>
                    </nav>
                    
                </div>
            </div>
        </div>
    </header>

    <!-- Header End -->