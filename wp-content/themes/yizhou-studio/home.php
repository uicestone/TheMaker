<?php get_header(); ?>
<div class="home-hero">
    <div class="visible-lg advertisement advertisement-left">
        <img src="<?=get_stylesheet_directory_uri()?>/images/advertisement/0.jpg" alt="adv" width="143" height="468">
    </div>

    <div id="home-hero" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
              <img src="<?=get_stylesheet_directory_uri()?>/images/homehero/0.jpg" alt="">
              <!-- <div class="carousel-caption"></div> -->
            </div>
            <div class="item">
                <img src="<?=get_stylesheet_directory_uri()?>/images/homehero/1.jpg" alt="">
                <!-- <div class="carousel-caption"></div> -->
            </div>
            <div class="item">
                <img src="<?=get_stylesheet_directory_uri()?>/images/homehero/0.jpg" alt="">
                <!-- <div class="carousel-caption"></div> -->
            </div>
            <div class="item">
                <img src="<?=get_stylesheet_directory_uri()?>/images/homehero/1.jpg" alt="">
                <!-- <div class="carousel-caption"></div> -->
            </div>
        </div>

         <ol class="carousel-indicators">
            <li data-target="#home-hero" data-slide-to="0" class="active"></li>
            <li data-target="#home-hero" data-slide-to="1"></li>
            <li data-target="#home-hero" data-slide-to="2"></li>
            <li data-target="#home-hero" data-slide-to="3"></li>
        </ol>
    </div>

    <div class="visible-lg advertisement advertisement-right">
        <img src="<?=get_stylesheet_directory_uri()?>/images/advertisement/0.jpg" alt="adv" width="143" height="468">
    </div>

</div>

<hr class="hidden-xs">

<div class="row block-list category">
    <div class="col-xs-4 category-item">
        <a href="listing.html" title="Entertainment">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Lifestyle</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 category-item">
        <a href="listing.html" title="Entertainment">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Art</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 category-item">
        <a href="listing.html" title="Entertainment">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Fashion</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 category-item">
        <a href="listing.html" title="Entertainment">
            <div class="thumbnail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/lifestyle.jpg" alt="">
            </div>
            <h2 class="caption">
                <span class="caption-text">Entertainment</span>
            </h2>
        </a>
    </div>

    <div class="col-xs-4 category-item">
        <a href="listing.html" title="Designer">
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
