<?php $the_query = custom_query_for_category_notice('all'); ?>
<!-- Content Start -->
<div class="notice_archive">
    <img src="<?php themeUrl(); ?>/assets/img/ttl_news.png" alt="">
</div>
<div class="content-new-archive">
    <table>
        <?php if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();  ?>
                <tr class="notice_list">
                    <td>
                        <a class="notice-item" href="<?php the_permalink(); ?>">
                            <span class="date"><?php echo get_post_time('Y.m.d'); ?></span>
                            <span class="description"><?php the_title(); ?>〇〇〇〇〇〇〇〇〇〇〇〇〇〇</span>
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php endif; ?> 
    </table>
</div>
<!-- Content End -->