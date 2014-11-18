<?php if(!$paged){ get_header(); ?>
<div class="paging-wrapper">
    <div class="row block-list thumbnail-list paging-block" data-paging-src="<?=site_url()?>/category/<?=get_the_category()[0]->slug?>" data-paging-total="<?=floor($wp_query->found_posts / $wp_query->max_num_pages)?>">
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
        <a href="#" class="paging-prev" title="Prev Page">Prev</a>
        <a href="#" class="paging-next" title="Next Page">Next</a>
    </div>

    <script id="listing-item-template" type="text/html">
        <div class="col-xs-6 col-sm-4 thumbnail-list-item">
            <a href="{{url}}" title="{{ altText }}">
                <div class="thumbnail">
                    <img src="{{ thumbnail }}" alt="">
                    <h2 class="caption hidden-xs">{{ title }}</h2>
                    <h3 class="caption visible-xs">{{ summary }}</h3>
                </div>
                <h2 class="caption visible-xs">{{ title }}</h2>
            </a>
        </div>
    </script>
</div>
<?php get_footer(); }else{

    $response = array();
    
    while(have_posts()){
        the_post();
        $response[] = array(
            'id'=>get_the_ID(),
            'url'=>get_the_permalink(),
            'title'=>'<small>' . get_post_meta(get_the_ID(), 'subtitle', true) . '</small><span>' . get_the_title() . '</span>',
            'thumbnail'=>wp_get_attachment_url(get_post_thumbnail_id()),
            'summary'=>get_the_excerpt(),
            'altText'=>get_the_title()
        );
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);

} ?>
