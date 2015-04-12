<?php get_header(); the_post(); ?>                
<div class="article-wrapper">
   <?php the_content(); ?>
   <div class="visible-lg advertisement">
        <?php $ad_side = get_posts(array('tag'=>'content-ad-side', 'posts_per_page'=>2, 'orderby'=>'rand')); ?>
        <?php foreach($ad_side as $ad){ ?>
        <a href="<?=$ad->post_content?>" target="_blank"><?=get_the_post_thumbnail($ad->ID, 'ad-content-side')?></a>
        <?php } ?>
   </div>
</div>

<br>

<div class="paging content">
    <a href="#" class="paging-prev hide" title="Prev Page">Prev</a>
    <a href="#" class="paging-next hide" title="Next Page">Next</a>
</div>

<?php get_footer(); ?>
