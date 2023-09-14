<?php
$the_query = custom_query_for_category_new();
?>
<?php get_template_part('template-parts/new_item_notice') ?>
<?php get_template_part('template-parts/new_item_room') ?>

<!-- Banner Start -->
<div class="banner">
    <div class="banner-list">
        <a class="banner-li" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
            <p class="banner-item">
                coconのバナーなど
            </p>
        </a>
        <a class="banner-li" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
            <p class="banner-item">
                バナーなど
            </p>
        </a><a class="banner-li" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
            <p class="banner-item">
                バナーなど
            </p>
        </a>
    </div>
</div>
<!-- Banner End -->