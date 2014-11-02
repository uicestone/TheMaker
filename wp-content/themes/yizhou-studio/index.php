<?php get_header(); ?>
<div class="row block-list thumbnail-list">
    <?php while(have_posts()): the_post(); ?>
    <div class="col-xs-6 col-sm-4 thumbnail-list-item">
        <a href="<?php the_permalink(); ?>" title="SECRET ICELAND">
            <div class="thumbnail">
                <?php the_post_thumbnail('list-thumbnail'); ?>
                <h2 class="caption hidden-xs">
                    <small><?=get_post_meta(get_the_ID(), 'subtitle', true)?></small>
                    <span><?php the_title(); ?></span>
                </h2>
                <!--<h3 class="caption visible-xs"><?php the_excerpt(); ?></h3>-->
            </div>
            <h2 class="caption visible-xs">
                <small><?=get_post_meta(get_the_ID(), 'subtitle', true)?></small>
                <span><?php the_title(); ?></span>
            </h2>
        </a>
    </div>
    <?php endwhile; ?>
<div class="paging">
    <?php if(get_previous_posts_link()){ ?><span class="paging-prev"><?php previous_posts_link(); ?></span><?php } ?>
    <?php if(get_next_posts_link()){ ?><span class="paging-next"><?php next_posts_link(); ?></span><?php } ?>
</div>
<?php get_footer(); ?>
