<?php get_header(); ?>
<div class="home-hero">
    <div class="visible-lg advertisement advertisement-left">
        <?php $ad_left = get_posts(array('tag'=>'home-ad-left', 'posts_per_page'=>1, 'orderby'=>'rand')); ?>
        <?php if($ad_left){ ?>
        <a href="<?=$ad_left[0]->post_content?>" target="_blank"><?=get_the_post_thumbnail($ad_left[0]->ID, 'ad-content-side')?></a>
        <?php } ?>
    </div>

    <div id="home-hero" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $banners = get_posts(array('tag'=>'home-banner'));?>
            <?php foreach($banners as $index => $banner){ ?>
            <div class="item<?php if($index === 0){ ?> active<?php } ?>">
                <a href="<?=get_the_permalink($banner->ID)?>"><?=get_the_post_thumbnail($banner->ID)?></a>
                <!--<div class="carousel-caption"></div>--> 
            </div>
            <?php } ?>
        </div>

         <ol class="carousel-indicators">
            <?php foreach($banners as $index => $banner){ ?>
             <li data-target="#home-hero" data-slide-to="<?=$index?>"<?php if($index === 0){ ?> class="active"<?php } ?>></li>
            <?php } ?>
        </ol>
    </div>

    <div class="visible-lg advertisement advertisement-right">
        <?php $ad_right = get_posts(array('tag'=>'home-ad-right', 'posts_per_page'=>1, 'orderby'=>'rand')); ?>
        <?php if($ad_right){ ?>
        <a href="<?=$ad_right[0]->post_content?>" target="_blank"><?=get_the_post_thumbnail($ad_right[0]->ID, 'ad-content-side')?></a>
        <?php } ?>
    </div>

</div>

<hr class="hidden-xs">

<div class="row block-list category">
    <div class="col-xs-4 col-sm-3 category-item">
        <a href="<?=site_url()?>/category/lifestyle/">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/nav-01.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Lifestyle / 生活方式</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 col-sm-3 category-item">
        <a href="<?=site_url()?>/category/fashion/">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/nav-02.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Fashion / 时尚</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 col-sm-3 category-item">
        <a href="<?=site_url()?>/category/entertainment/">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/nav-03.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Entertainment / 娱乐</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 col-sm-3 category-item">
        <a href="<?=site_url()?>/category/design-architecture/">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/nav-04.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Design-Architecture / 设计－建筑</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 col-sm-3 category-item">
        <a href="<?=site_url()?>/category/art/">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/nav-05.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Art / 艺术</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 col-sm-3 category-item">
        <a href="<?=site_url()?>/category/people/">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/nav-06.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">People / 人物</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 col-sm-3 category-item">
        <a href="<?=site_url()?>/category/tips/">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/nav-07.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Tips / 臆想</span>
            </h2>
        </a>
    </div>

</div>
<?php get_footer(); ?>
