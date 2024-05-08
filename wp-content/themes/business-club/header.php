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
    <!-- Custom css -->
    <style>
        :root {
            --theme-black: #10181d;
            --theme-font: 'Poppins', sans-serif;
            --theme-accent: #ff9848;
            --theme-blue: #082457;
        }

        /* Global css start */

        *,
        8::after,
        *::before {
            padding: 0;
            margin: 0;
        }

        body {
            font-size: 16px;
            font-family: var(--theme-font);
            line-height: 1.5;
            color: var(--theme-black);
        }

        a,
        a:hover {
            text-decoration: none;
        }

        ul,
        li {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .theme__logo {
            max-width: 317px;
            width: 100%;
            display: block;
        }

        a {
            display: block;
        }

        .theme__container {
            width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            max-width: 1320px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Global css End */

        /*Overriding css of wordpress*/
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            line-height: inherit;
            font-size: inherit;
            color: inherit;
        }

        body {
            background: inherit;
        }

        p {
            color: inherit;
        }

        /*Overriding css of wordpress */


        /* Header Start */

        .theme__header-top {
            background-color: var(--theme-black);
            padding: 8px 0;
        }

        .contact__links {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .social__links {
            display: flex;
            align-items: center;
            gap: 15px;
            justify-content: end;
        }

        .contact__links li a,
        .social__links li a {
            color: #fff;
            font-size: 14px;
        }

        .contact__links li a i {
            color: var(--theme-accent);
            margin-right: 4px;
            transition: 150ms;
        }

        .social__links li a:hover i {
            color: var(--theme-accent);
            transition: 150ms;
        }

        .theme__header-navigation>ul {
            display: flex;
            align-items: center;
        }

        .theme__header-navigation ul li {
            position: relative;
        }

        .theme__header-navigation ul li a {
            color: var(--theme-blue);
            transition: 150ms;
        }

        .theme__header-navigation ul li:hover>a {
            transition: 150ms;
            color: var(--theme-accent);
        }

        .theme__header-navigation ul li>ul {
            position: absolute;
            width: 240px;
            background-color: #fff;
            box-shadow: 4px 4px 20px rgba(0, 0, 0, .15);
            border-radius: 4px;
            opacity: 0;
            pointer-events: none;
            transition: 150ms;
        }

        .theme__header-navigation ul li:hover>ul {
            opacity: 1;
            pointer-events: all;
            transition: 150ms;
        }

        .theme__header-navigation ul li>ul li a {
            padding: 10px 20px;
            font-size: 14px;
        }

        .theme__header-navigation>ul>li>a {
            padding: 18px;
        }

        .theme__header-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .menu__has-children>i {
            font-size: 12px;
            position: absolute;
            top: 23px;
            right: 3px;
        }

        .theme__header-main {
            padding: 16px 0;
        }

        .theme__btn {
            padding: 14px 32px;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 16px;
            font-weight: 600;
        }

        .theme__btn-primary {
            background-color: var(--theme-accent);
            transition: 150ms;
            color: #fff;
            border-color: var(--theme-accent);
        }

        .theme__btn-primary:hover {
            background-color: transparent;
            color: var(--theme-accent);
            transition: 150ms;
        }

        .menu__has-children a i {
            margin-left: 4px;
            transform: translateY(2px);
        }

        .theme__header-navigation {
            margin-left: auto;
        }

        .theme__header-actions {
            margin-left: 8px;
            display: flex;
            gap: 24px;
        }

        .theme__header {
            position: relative;
        }

        .theme__header-actions .mobile__menu-trigger {
            padding: 14px 18px;
            display: none;
        }



        /* Header End */

        /* Footer Start */

        .theme__footer {
            background-color: var(--theme-blue);
            padding: 90px 0 0;
            position: relative;

        }

        .footer__row {
            display: flex;
            justify-content: space-between;
            gap: 56px;
        }

        .footer__about {
            max-width: 376px;
            width: 100%;
        }

        .footer__column:first-child {
            width: 30%;
        }

        .footer__column:first-child .footer__item {
            background-color: #fff;
            padding: 24px;
            border-top: 6px solid var(--theme-accent);
            margin-top: -140px;
        }

        .footer__about .theme__logo {
            margin-bottom: 32px;
        }

        .footer__about p {
            text-align: center;
            line-height: 1.8;
        }

        .footer__about .theme__btn {
            margin-top: 16px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .footer__social-links {
            margin-top: 32px;
        }

        .footer__social-links {
            margin-top: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .footer__social-links li a {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f5f5;
            border-radius: 50px;
            color: var(--theme-blue);
        }

        .footer__item h4 {
            font-size: 19px;
            color: #fff;
            margin-bottom: 36px;
        }

        .footer__navigation li a {
            color: #fff;
            transition: 150ms;
        }


        .footer__navigation li a:hover {
            color: var(--theme-accent);
            transition: 150ms;
        }

        .footer__navigation li:not(:last-child) {
            margin-bottom: 18px;
        }

        .footer__newsletter p {
            color: #b4b4b4;
        }

        .footer__contact-list li span {
            width: 42px;
            height: 42px;
            display: flex;
            background: var(--theme-accent);
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 18px;
            border-radius: 50px;
            flex-shrink: 0;
        }

        .footer__contact-list li {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 18px;
        }

        .footer__contact-list li p {
            color: #b4b4b4;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .footer__contact-list li a {
            color: #fff;
            transition: 150ms;
        }

        .footer__contact-list li a:hover {
            color: var(--theme-accent);
            transition: 150ms;
        }

        .copyright__strip {
            background: #03132E;
            padding: 16px;
            text-align: center;
            color: #fff;
            margin-top: 90px;
            margin-bottom: 0;
        }

        .newsletter__form .form-control {
            border-radius: 2px;
            padding: 15.5px;
            font-size: 14px;
            height: auto;
        }

        .newsletter__form .theme__btn {
            border-radius: 2px;
            width: 100%;
        }

        .footer__item .theme__logo {
            max-width: 100%;
        }

        /* Footer End */

        /* Mobile menu */
        .mobile__menu {
            position: fixed;
            width: 100%;
            right: 0;
            top: 0;
            height: 100%;
            background: #fff;
            padding: 32px;
            box-shadow: 0 0 30px rgba(0, 0, 0, .1);
            overflow: auto;
            transform: translateX(100%);
            transition: 150ms;
        }

        .mobile__menu.active {
            transform: translateX(0);
            transition: 150ms;
        }

        .mobile__menu-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .mobile__menu .mobile__menu-close-btn {
            padding: 10px 16px;
            font-size: 18px;
        }

        .mobile__menu-navigation {
            margin-top: 24px;
            padding-top: 24px;
            margin-bottom: 36px;
        }

        .mobile__menu-navigation li a {
            color: var(--theme-black);
            padding: 8px;
            flex-grow: 1;
        }

        .mobile__menu-navigation li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            border-bottom: 1px solid #efefef;
        }

        .mobile__menu-navigation li>ul {
            width: 100%;
            background-color: #f5f5f5;
            padding: 8px;
            margin-top: 8px;
            display: none;
        }

        .mobile__menu-dropdown-btn {
            padding: 4px 12px;

        }

        .mobile__menu-navigation li>a {
            padding-left: 0;
        }

        .mobile__menu-navigation>li .mobile__menu-dropdown-btn i {
            transform: rotate(0);
            transition: 150ms;
        }

        .mobile__menu-navigation>li.active .mobile__menu-dropdown-btn i {
            transform: rotate(180deg);
            transition: 150ms;
        }

        .mobile__menu .mobile__menu-action .theme__btn {
            width: 100%;
            max-width: 320px;
        }

        .mobile__menu-navigation li li a {
            padding-left: 14px;
        }

        /* Mobile menu end */

        /* News section start */

        .news__content h2 {
            font-size: 18px;
            line-height: 28px;
            color: #00235a;
        }

        .news__content h2 a {
            color: #00235a;
            overflow: hidden;
            white-space: nowrap;
            display: block;
            text-overflow: ellipsis;
        }

        .news__date {
            position: absolute;
            right: 40px;
            top: -65px;
            background-color: #FF5E14;
            color: #fff;
            text-align: center;
            border-radius: 4px;
            padding: 16px 17px;
            padding-top: 12px;
            text-transform: capitalize;
            display: block;
            font-size: 40px;
            font-weight: 700;
            line-height: 1;
        }

        .news__date span {
            display: block;
            font-size: 14px;
            line-height: 1;
            font-weight: 400;
        }

        .news__content {
            padding: 32px 40px;
            position: relative;
            background-color: #fff;
        }

        .news__item img {
            width: 100%;
            height: 240px;
            background-color: #f6f6f6;
            object-fit: cover;
        }

        .news__item {
            height: 100%;
            padding-bottom: 30px;
        }

        .news__item-in {
            border: #e4e4e4 1px solid;
            border-radius: 10px;
            height: 100%;
            overflow: hidden;
        }

        .news__item:hover .news__content h2 a {
            color: #ff5f14;
        }

        @media (max-width:1199px) {
            .news__content {
                padding: 32px 20px 15px;
            }
        }

        @media (max-width:767px) {
            .news__content {
                padding: 25px 15px 10px;
            }

            .news__content h2 {
                font-size: 16px;
                line-height: 26px;
                margin-bottom: 10px;
            }
        }

        @media (max-width:575px) {
            .news__item img {
                width: 100%;
                height: auto;
            }

            .news__date {
                right: 20px;
                top: -45px;
                padding: 12px;
                font-size: 24px;
            }

            .news__date span {
                font-size: 12px;
            }

            .news__content p {
                font-size: 14px;
            }

            .news__item {
                padding-bottom: 15px;
            }
        }

        .post-header {
            background-color: #072457;
            padding: 40px 0;
        }

        .post-header header.entry-header h1.entry-title {
            color: #FFF;
            font-size: 40px;
            text-align: center;
            line-height: 50px;
            font-weight: 600;
        }

        .post-header header.entry-header .entry-meta {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .post-header header.entry-header .entry-meta span:before {
            color: #c8c8c8;
        }

        .post-header header.entry-header .entry-meta a {
            color: #c8c8c8;
        }

        .post-header header.entry-header .entry-meta span {
            font-weight: 400;
            display: flex;
            align-items: baseline;
            margin: 0 10px;
            font-size: 14px;
        }

        .post-content .post-img {
            padding: 40px 0;
        }

        .post-content .post-img img {
            width: 100%;
            height: 100%;
            border: #efeeee 1px solid;
            border-radius: 10px;
            margin: 0;
        }

        .single-content-area {
            padding: 0 0 100px;
        }

        .post-navigattion .nav-links a {
            background-color: #ff9849;
            border: none;
            color: #FFF;
            border-radius: 4px;
        }

        .post-content .entry-content p,
        .post-content .entry-content li {
            font-size: 16px;
        }

        .post-header header.entry-header .entry-meta span.byline {
            display: none !important;
        }

        @media (max-width: 1199px) {
            .post-header header.entry-header h1.entry-title {
                font-size: 36px;
                line-height: 46px;
            }
        }

        @media (max-width: 991px) {
            .post-header header.entry-header h1.entry-title {
                font-size: 26px;
                line-height: 36px;
            }

            .post-navigattion .nav-links {
                display: flex;
                flex-flow: column;
            }

            .post-navigattion .nav-links .nav-previous,
            .post-navigattion .nav-links .nav-next {
                margin: 6px 0;
                text-align: center;
            }

            .post-navigattion .nav-links a {
                display: inline-block;
            }
        }

        @media (max-width: 767px) {
            .post-header {
                padding: 30px 0;
            }

            .post-content .post-img {
                padding: 30px 0 10px;
            }

            .post-header header.entry-header h1.entry-title {
                font-size: 20px;
                line-height: 30px;
                font-weight: 500;
            }

            .post-content .entry-content p,
            .post-content .entry-content li {
                font-size: 14px;
            }

            .post-navigattion .nav-links a {
                font-size: 14px;
            }
        }

        /* News section end */

        /* Theme form Start */

        .theme__form .form-control {
            background: #f8f8f8;
            border-color: #f8f8f8;
            height: auto;
            padding: 16px;
        }

        .theme__form textarea.form-control {
            max-height: 120px;
            resize: none;
        }

        .theme__form input.btn.btn-default {
            padding: 14px 32px;
            background: var(--theme-blue);
            margin: auto;
            display: block;
            border-radius: 4px;
            border: 1px solid var(--theme-blue);
            font-size: 16px;
            font-weight: 600;
        }

        .theme__form input.btn.btn-default:hover {
            background-color: #fff color:var(--theme-blue);
        }

        .theme__form label {
            color: var(--theme-blue);
            font-family: 'Poppins';
            font-weight: 600;
        }

        .theme__form .form-group:nth-last-child(2) p {
            text-align: center;
            display: block;
        }

        /* Theme form End */

        /* Responsive Start */
        /* @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1320px;
            }
        } */

        @media(max-width:1399px) {
            /* .container {
                max-width: 1170px;
            }*/

            .theme__logo {
                max-width: 240px;
            }


            .theme__header-navigation>ul>li>a {
                font-size: 14px;
                padding: 14px;
            }

            .footer__newsletter p {
                font-size: 14px;
            }

            .footer__navigation li a {
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 1260px) {
            .container {
                width: 100%;
            }
        }

        @media(max-width:1199px) {
            .theme__logo {
                max-width: 240px;
            }

            .theme__header-actions .theme__btn {
                font-size: 14px;
            }

            .theme__header-navigation>ul>li>a {
                font-size: 13px;
                padding: 12px;
            }

            .footer__item h4 {
                font-size: 16px;
                margin-bottom: 24px;
            }

            .footer__newsletter p br {
                display: none;
            }

            .footer__contact-list li a {
                font-size: 14px;
            }

            .footer__contact-list li a br {
                display: none;
            }

            .footer__about p {
                font-size: 14px;
                line-height: 1.6;
            }

            .footer__column:first-child {
                width: 40%;
            }
        }

        @media(max-width:1023px) {
            .footer__row {
                flex-wrap: wrap;
            }

            .footer__column {
                width: calc(50% - 28px);
            }

            .footer__column:first-child {
                width: calc(50% - 28px);
            }

            .footer__column:first-child .footer__item {
                margin-top: -80px;
            }

            .theme__footer {
                padding-top: 45px;
            }

            .copyright__strip {
                margin-top: 45px;
            }

            .theme__header-navigation {
                display: none;
            }

            .theme__header-actions .mobile__menu-trigger {
                display: block;
            }

        }

        @media(max-width:767px) {
            .theme__header-top {
                display: none;
            }

            .theme__header-actions .header-get-a-quote {
                display: none;
            }

            .footer__column:first-child {
                width: 100%;
            }

            .footer__column {
                width: 100%;
            }

            .footer__column:first-child .footer__item {
                margin-top: -130px;
            }

            .copyright__strip {
                font-size: 14px;
            }

            .theme__logo {
                max-width: 210px;
            }

            .theme__header-actions .mobile__menu-trigger {
                padding: 8px 12px;
            }

            .mobile__menu .mobile__menu-close-btn {
                padding: 5px 12px;
            }

            .mobile__menu {
                padding: 16px;
            }

            .mobile__menu-dropdown-btn {
                padding: 2px 7px;
            }
        }

        /* Responsive End */
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- Header Start -->

    <header class="theme__header">
        <div class="theme__header-top">
            <div class="theme__container">
                <div class="row">
                    <div class="col-md-11">
                        <ul class="contact__links">
                            <li><a href="tel:304-973-0707"><i class="fas fa-phone"></i> 304-973-0707</a></li>
                            <li><a href="mailto:info@cxrtrans.com"><i class="fas fa-envelope"></i> info@cxrtrans.com</a>
                            </li>
                            <li><a href="javascript:void(0);"><i class="fas fa-map-marker-alt"></i> 1380 Mount Cobb
                                    Road, Lake Ariel, PA 18436</a></li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <ul class="social__links">
                            <li><a href="javscript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javscript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="theme__header-main">
            <div class="theme__container">
                <div class="theme__header-row">

                    <a href="javascript:void(0);" class="theme__logo">
                        <img src="/wp-content/uploads/2023/11/logo.png" alt="Contractor Transport LLC" />
                    </a>


                    <nav class="theme__header-navigation">
                        <ul>
                            <li class="menu__has-children">
                                <a href="javscript:void(0);">About <i class="fas fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Business Principles</a></li>
                                    <li><a href="javascript:void(0);">Our Team</a></li>
                                    <li><a href="javascript:void(0);">CT Cares</a></li>
                                    <li><a href="javascript:void(0);">Our Process</a></li>
                                </ul>
                            </li>
                            <li><a href="javscript:void(0);">News</a></li>
                            <li class="menu__has-children"><a href="javscript:void(0);">Services <i class="fas fa-angle-down"></i></a>

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
                    </nav>

                    <div class="theme__header-actions">
                        <button class="theme__btn theme__btn-primary header-get-a-quote">Get A Quote</button>
                        <button class="theme__btn theme__btn-primary mobile__menu-trigger"><i class="fas fa-bars"></i></button>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- Header End -->