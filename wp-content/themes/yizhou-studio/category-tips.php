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
            <div class="col-xs-6 col-sm-3">
                <a href="http://www.channel.com" title=""><img src="<?=get_stylesheet_directory_uri()?>/images/tips/6765.jpg" alt="" width="136" height="136"></a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="http://www.nike.com" title=""><img src="<?=get_stylesheet_directory_uri()?>/images/tips/2.jpg" alt="" width="136" height="136"></a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="http://www.channel.com" title=""><img src="<?=get_stylesheet_directory_uri()?>/images/tips/345.jpg" alt="" width="136" height="136"></a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="http://www.nike.com" title=""><img src="<?=get_stylesheet_directory_uri()?>/images/tips/nike.jpg" alt="" width="136" height="136"></a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="http://www.chopard.com" title=""><img src="<?=get_stylesheet_directory_uri()?>/images/tips/78.jpg" alt="" width="136" height="136"></a>
            </div>
             <div class="col-xs-6 col-sm-3">
                <a href="http://www.channel.com" title=""><img src="<?=get_stylesheet_directory_uri()?>/images/tips/90.jpg" alt="" width="136" height="136"></a>
            </div>
             <div class="col-xs-6 col-sm-3">
                <a href="http://www.chopard.com" title=""><img src="<?=get_stylesheet_directory_uri()?>/images/tips/89.jpg" alt="" width="136" height="136"></a>
            </div>
             <div class="col-xs-6 col-sm-3">
                <a href="http://www.channel.com" title=""><img src="<?=get_stylesheet_directory_uri()?>/images/tips/5645.jpg" alt="" width="136" height="136"></a>
            </div>
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