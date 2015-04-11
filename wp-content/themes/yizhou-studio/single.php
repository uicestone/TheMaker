<?php get_header(); the_post(); ?>                
<div class="article-wrapper">
   <?php the_content(); ?>
   <div class="visible-lg advertisement">
        <?php $ad_side = get_posts(array('tag'=>'content-ad-side', 'posts_per_page'=>1, 'orderby'=>'rand')); ?>
        <?php if($ad_side){ ?>
        <a href="<?=$ad_side[0]->post_content?>" target="_blank"><?=get_the_post_thumbnail($ad_side[0]->ID, 'ad-content-side')?></a>
        <?php } ?>
   </div>
</div>

<br>

<!--<div class="paging">
    <a href="#" class="paging-prev" title="Prev Page">Prev</a>
    <a href="#" class="paging-next" title="Next Page">Next</a>
</div>-->
<?php get_footer(); ?>
