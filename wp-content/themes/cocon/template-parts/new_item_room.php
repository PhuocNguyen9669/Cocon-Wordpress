<?php $query_room = custom_query_for_category_room(); ?>
<!-- Trouble consultation room Start -->
<div class="bulletinBoard">
    <p class="consultation">
        <img src="<?php themeUrl(); ?>/assets/img/ttl_onayami.png" alt="">
    </p>
    <div class="bulletin">
        <?php
            if ($query_room->have_posts()) :
                while ($query_room->have_posts()) :
                    $query_room->the_post();
                    ?>
                        <div class="bulletin-board-list">
                            <a href="<?php the_permalink(); ?>">
                                <p class="bulletin-board">
                                    <span class="desscription"><?php the_title(); ?>〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇<br></span>
                                    <span class="date-text"><?php echo get_post_time('Y.m.d'); ?></span>
                                </p>
                            </a>
                        </div>
                    <?php endwhile; ?>
            <?php endif; 
        wp_reset_query();
        ?>
    </div>
</div>
<!-- Trouble consultation room End -->