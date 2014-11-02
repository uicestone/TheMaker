<?php get_header(); ?>
<div class="home-hero">
    <div class="visible-lg advertisement advertisement-left">
        <img src="<?=get_stylesheet_directory_uri()?>/images/advertisement/0.jpg" alt="adv" width="143" height="468">
    </div>

    <div id="home-hero" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $banners = get_posts(array('tag'=>'home-banner'));?>
            <?php foreach($banners as $index => $banner){ ?>
            <div class="item<?php if($index === 0){ ?> active<?php } ?>">
                <?php the_post_thumbnail('home-banner'); ?>
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
        <img src="<?=get_stylesheet_directory_uri()?>/images/advertisement/0.jpg" alt="adv" width="143" height="468">
    </div>

</div>

<hr class="hidden-xs">

<div class="row block-list category">
    <div class="col-xs-4 category-item">
        <a href="<?=site_url()?>/category/lifestyle/" title="Lifestyle">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Lifestyle</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 category-item">
        <a href="<?=site_url()?>/category/art/" title="Art">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Art</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 category-item">
        <a href="<?=site_url()?>/category/fashion/" title="Fashion">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Fashion</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 category-item">
        <a href="<?=site_url()?>/category/entertainment/" title="Entertainment">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Entertainment</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 category-item">
        <a href="<?=site_url()?>/category/designer/" title="Designer">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Designer</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 hidden-lg hidden-md category-item">
        <div class="thumbnail">
            <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
        </div>
    </div>
</div>
<?php get_footer(); ?>
