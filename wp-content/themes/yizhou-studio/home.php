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

<?php
$categories = array(
    'lifestyle'=>'Lifestyle / 生活方式',
    'fashion'=>'Style / 风格',
    'entertainment'=>'Entertainment / 娱乐',
    'design-architecture'=>'Design-Architecture / 设计－建筑',
    'art'=>'Art / 艺术',
    'people'=>'People / 人物',
    'tips'=>'Tips / 臆想',
);
?>

<div class="row block-list category">
    <?php $i = 0; foreach($categories as $name => $label){ $i++; ?>
    <div class="col-xs-4 col-sm-3 category-item">
        <a href="<?=site_url()?>/category/<?=$name?>/">
            <div class="thumbnail">
                <?php $latest_post = get_posts(array('category_name'=>$name))[0]; ?>
                <?php if(has_post_thumbnail($latest_post->ID)){ ?>
                <?=get_the_post_thumbnail($latest_post->ID, 'thumbnail')?>
                <?php }else{ ?>
                <img src="<?=get_stylesheet_directory_uri()?>/images/category/nav-<?=substr($i + 100, -2)?>.jpg">
                <?php } ?>
            </div>
            <h2 class="caption">
                <span class="caption-text"><?=$label?></span>
            </h2>
        </a>
    </div>
    <?php } ?>
</div>
<?php get_footer(); ?>
