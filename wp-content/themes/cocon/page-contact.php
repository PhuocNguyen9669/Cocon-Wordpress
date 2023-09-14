<?php
/* 
Template Name: Page Contact
*/
?>
<?php get_header(); ?>
<!-- Breadcrum Strat -->
<?php get_template_part('template-parts/breadcrumb') ?>
<!-- Breadcrum End -->
        <!-- Content Start -->
        <div class="content">
            <p class="contact-image">
                <img class="image-contact" src="<?php themeUrl(); ?>/assets/img/contact.jpg" alt="">
            </p>
            <p class="notice-contact">*は必須項目です。</p>
         <?php the_content(); ?>
        </div>
        <!-- Content End -->

<?php get_footer(); ?>