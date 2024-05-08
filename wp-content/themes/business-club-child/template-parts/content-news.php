<?php
$thumbnail_img = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail');

?>
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="news__item">
        <div class="news__item-in">
            <a href="<?= get_permalink(get_the_ID()); ?>">
                <img src="<?= esc_url($thumbnail_img); ?>" alt="<?= get_the_title(); ?>">
            </a>
            <div class="news__content">
                <div class="news__date">
                    <?= get_the_date('d'); ?> <span><?= get_the_date('F'); ?></span>
                </div>
                <h2><a href="<?= get_permalink(get_the_ID()); ?>" class="news__title"><?= get_the_title(); ?></a></h2>
                <p><?= get_the_excerpt(); ?></p>
            </div>
        </div>
    </div>
</div>