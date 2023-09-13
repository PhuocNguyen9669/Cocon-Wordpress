<?php
$the_query = custom_query_for_category_blog();
?>
<ul class="ul-image">
    <?php
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
            $categories = get_the_category();
            $category_names = array();
            foreach ($categories as $category) {
                $category_names[] = $category->name;
            }
            $category_string = implode(' / ', $category_names);
    ?>
            <li class="image-item">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    $image = get_field('image');
                    if ($image) {
                        echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '">';
                    }
                    ?>
                </a>
                <h5 class="title-image"><?php echo $category_string; ?></h5>
                <a href="<?php the_permalink(); ?>">
                    <p class="text-image"><?php the_field('title_post_blog'); ?></p>
                </a>
            </li>
    <?php
            wp_reset_postdata();
        endwhile;
    endif;
    ?>
</ul>