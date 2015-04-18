<?php get_header(); ?>

<div class="paging-wrapper row">
    <div class="visible-lg col-lg-2 advertisement">
        <?php $ad_left = get_posts(array('tag'=>'tips-ad-left', 'posts_per_page'=>1, 'orderby'=>'rand')); ?>
        <?php if($ad_left){ ?>
        <a href="<?=$ad_left[0]->post_content?>" target="_blank"><?=get_the_post_thumbnail($ad_left[0]->ID, 'ad-content-side')?></a>
        <?php } ?>
    </div>              

    <div class="col-lg-8 tips">
        <div class="row block-list paging-block">
            <?php query_posts(array('posts_per_page'=>-1, 'category_name'=>'tips')); ?>
            <?php while(have_posts()): the_post(); ?>
            <div class="col-xs-6 col-sm-3">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('tips'); ?></a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>

    <div class="visible-lg col-lg-2 advertisement text-right">
        <?php $ad_right = get_posts(array('tag'=>'tips-ad-right', 'posts_per_page'=>1, 'orderby'=>'rand')); ?>
        <?php if($ad_right){ ?>
        <a href="<?=$ad_right[0]->post_content?>" target="_blank"><?=get_the_post_thumbnail($ad_right[0]->ID, 'ad-content-side')?></a>
        <?php } ?>
    </div>

</div>
<?php get_footer(); ?>