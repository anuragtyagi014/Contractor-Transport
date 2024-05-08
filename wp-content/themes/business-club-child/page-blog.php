<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div id="post-container">
            <?php
            do_shortcode('[shortcode_latest_news]');
            // $args = array(
            //     'post_type' => 'post',
            //     'posts_per_page' => 5, // Adjust this to the number of posts you want to load per click
            //     'paged' => 1,
            // );

            // $query = new WP_Query($args);

            // if ($query->have_posts()) :
            //     while ($query->have_posts()) : $query->the_post();
            //         // Your loop code here
            //         get_template_part('template-parts/content', get_post_format());
            //     endwhile;
            //     wp_reset_postdata();
            // else :
            //     echo 'No more posts found';
            // endif;

            ?>




        </div>
        <button id="load-more">Load More</button>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
/**
 * Hook - business_club_action_sidebar.
 *
 * @hooked: business_club_add_sidebar - 10
 */
//do_action('business_club_action_sidebar');

get_footer();
?>
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
                    $('#post-container').append(response);

                    // If there are no more posts, hide the "Load More" button
                    if (response.trim() === '') {
                        $('#load-more').hide();
                    }
                }
            });
        });
    });
</script>