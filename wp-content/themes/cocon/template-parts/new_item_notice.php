<?php $query_notice = custom_query_for_category_notice(); ?>
<div class="notification-message">
    <!-- Notice Start -->
    <div class="notice-alt">
            <img src="<?php themeUrl(); ?>/assets/img/ttl_news.png" alt="">
        <div class="notice-container">
            <ul class="notice-list">
                <?php
                    if ($query_notice->have_posts()) :
                        while ($query_notice->have_posts()) :
                            $query_notice->the_post();
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <p class="note-date"><?php echo get_post_time('Y.m.d'); ?></p>
                                    <p class="note-descipriton"><?php the_title(); ?>〇〇〇〇〇〇〇〇〇〇〇〇〇〇<br></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                        <?php endif; 
                    wp_reset_query();
                ?>
            </ul>
        </div>
        <div class="a-notice">
            <a href="<?php echo get_category_link(get_cat_ID('学び')); ?>">もっと見る</a>
        </div>
    </div>
</div>
<!-- Notice End -->