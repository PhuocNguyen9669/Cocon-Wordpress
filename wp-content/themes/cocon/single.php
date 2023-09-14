<?php get_header(); ?>
<!-- Breadcrum Strat -->
<?php get_template_part('template-parts/breadcrumb') ?>
<!-- Breadcrum End -->
<!-- Content Start -->
<?php if (have_posts()) :
    while (have_posts()) : the_post();  ?>
        <div class="content">
            <h3 class="resultDetail">
                <p><?php the_field('title_post_blog') ?></p>
            </h3>
            <p class="resultNum">
                <span class="result-span"><?php the_title(); ?></span>
                <span class="result-date"><?php the_date('Y.m.d'); ?></span>
            </p>
            <div class="boxInfor">
                <p class="imageInfor">
                    <?php $custom_image = get_field('image'); 
                        if ($custom_image) {
                        echo '<img src="' . $custom_image['url'] . '" alt="' . $custom_image['alt'] . '">';
                    }?>
                </p>
                <div class="detailInfor">
                    <a href="">
                        <p class="titleInfor"><?php the_field('description'); ?></p>
                    </a>    
                </div>
            </div>
            <div class="text-description"><?php the_content(); ?></div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- Content End -->

<?php get_footer(); ?>
