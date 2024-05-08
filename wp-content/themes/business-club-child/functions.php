<?php
/*
 * This is the child theme for Business Club theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action('wp_enqueue_scripts', 'business_club_child_enqueue_styles');
function business_club_child_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );

    wp_enqueue_style(
        'child-style-local',
        get_stylesheet_directory_uri() . '/assets/css/local.css',
        array('parent-style')
    );

    // wp_enqueue_script('child-js-local', get_stylesheet_directory_uri() . '/assets/js/local.js', [], '3.3.4');
}
/*
 * Your code goes below
 */


function load_more_posts()
{
    $page = $_POST['page'];

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6, // Adjust this to the number of posts you want to load per click
        'paged' => $page,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // Your loop code here
            get_template_part('template-parts/content', 'news');
        endwhile;
        wp_reset_postdata();
    // else :
    //     echo 'No more posts found';
    endif;

    die(); // Always end with die().
}

add_action('wp_ajax_load_more_posts', 'load_more_posts'); // If called from admin panel
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts'); // If called from elsewhere


add_shortcode('shortcode_latest_news', 'shortcode_latest_news');

function shortcode_latest_news()
{

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 6, // Adjust this to the number of posts you want to load per click
        'paged' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);
    ob_start();
?>

    <?php
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // Your loop code here
            get_template_part('template-parts/content', 'news');
        endwhile;
    ?>

        <div class="col-12 text-center">
            <button id="load-more" class="theme__btn theme__btn-primary">Load More</button>
        </div>

        <script>
            jQuery(document).ready(function($) {
                var page = 1; // Initialize page variable

                // Triggered when the "Load More" button is clicked
                $('#load-more').on('click', function() {
                    page++; // Increment page for the next set of posts

                    // AJAX request
                    $.ajax({
                        url: "<?= admin_url('admin-ajax.php'); ?>",
                        type: 'post',
                        data: {
                            action: 'load_more_posts',
                            page: page,
                        },
                        success: function(response) {
                            // Append the new posts to the container
                            $('#load-more').parent().before(response);


                            // If there are no more posts, hide the "Load More" button
                            if (response.trim() === '' || page >= 6) {
                                console.log(page);
                                $('#load-more').hide();
                            }
                        }
                    });
                });
            });
        </script>
    <?php
        wp_reset_postdata();
    else :
        echo 'No more posts found';
    endif;
    return ob_get_clean();
}


/**
 * Summary of shortcodeToDisplayLatestNewsToHomePage
 * @return void
 */
function shortcodeToDisplayLatestNewsToHomePage_fn()
{
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3, // Adjust this to the number of posts you want to load per click
        'paged' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);
    ob_start();
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // Your loop code here
            get_template_part('template-parts/content', 'news');
        endwhile;
        wp_reset_postdata();
    endif;
    return ob_get_clean();
}

add_shortcode('shortcodeToDisplayLatestNewsToHomePage', 'shortcodeToDisplayLatestNewsToHomePage_fn');

define('codeflies_acf_path', __DIR__ . '/advanced-custom-fields-pro/');
define('codeflies_acf_url', '/wp-content/themes/business-club-child/advanced-custom-fields-pro/');

require_once codeflies_acf_path . 'acf.php';
add_filter('acf/settings/url', 'codeflies_acf_settings_url');
function codeflies_acf_settings_url($url)
{
    return codeflies_acf_url;
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'General Settings',
        'menu_title'    => 'Custom Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}



// menu setup


function buildTree(array &$elements, $parentId = 0)
{
    $branch = array();
    foreach ($elements as &$element) {
        if ($element->menu_item_parent == $parentId) {
            $children = buildTree($elements, $element->ID);
            if ($children)
                $element->wpse_children = $children;
            $branch[$element->ID] = $element;
            unset($element);
        }
    }
    return $branch;
}
function wpse_nav_menu_2_tree($menu_id)
{
    $items = wp_get_nav_menu_items($menu_id);
    return $items ? buildTree($items, 0) : null;
}




// Footer navigation shortcode
/**
 * Summary of shortcode_footer_navigate_fn
 * @return void
 */
function shortcode_footer_navigate_fn()
{
    ob_start();
    $menu_exists = wp_get_nav_menu_object('Footer Navigate');
    $tree = wpse_nav_menu_2_tree($menu_exists->term_id);
    foreach ($tree as $k1 => $v1) { ?>
        <li><a href="<?= $v1->url; ?>"><?= $v1->title; ?></a></li>
    <?php
    }

    return ob_get_clean();
}
add_shortcode('shortcode_footer_navigate', 'shortcode_footer_navigate_fn');



function shortcode_footer_newsletter_fn()
{
    ob_start();
    ?>
    <div class="tnp tnp-subscription ">
        <form method="post" action="https://devt27.sg-host.com/?na=s">

            <input type="hidden" name="nlang" value="">
            <div class="tnp-field tnp-field-email"><!--<label for="tnp-3">Enter Email Address</label>-->
                <input class="tnp-email" type="email" placeholder="Enter Email Address" name="ne" id="tnp-3" value="" required>
            </div>
            <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Subscribe Now">
            </div>
        </form>
    </div>
<?php
    return ob_get_clean();
}
add_shortcode('shortcode_footer_newsletter', 'shortcode_footer_newsletter_fn');


// function custom_rewrite_rules()
// {
//     add_rewrite_rule(
//         '^news/([^/]+)/?$',
//         'index.php?post_type=post&name=$matches[1]',
//         'top'
//     );
// }
// add_action('init', 'custom_rewrite_rules');
// function overwrite_post_slug($args, $post_type)
// {
//     if ($post_type === 'post') {
//         $args['rewrite'] = array(
//             'slug'       => 'news',
//             'with_front' => true,
//         );
//     }
//     die('Hello, I am here!');
//     return $args;
// }
// add_filter('register_post_type_args', 'overwrite_post_slug', 10, 2);



function shortcodeToDisplayLatestNewsToCategory_fn()
{
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category__in' => ['16'],
        'posts_per_page' => -1, // Adjust this to the number of posts you want to load per click
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);
    ob_start();
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // Your loop code here
            get_template_part('template-parts/content', 'news');
        endwhile;
        wp_reset_postdata();
    endif;
    return ob_get_clean();
}

add_shortcode('shortcodeToDisplayLatestNewsToCategory', 'shortcodeToDisplayLatestNewsToCategory_fn');
