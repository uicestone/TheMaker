<?php if(strpos($_SERVER['HTTP_ACCEPT'], 'application/json') === false){ get_header(); ?>
<div class="paging-wrapper">
    <div class="row block-list thumbnail-list paging-block" data-paging-src="<?=site_url()?>/category/<?=get_the_category()[0]->slug?>" data-paging-total="<?=floor($wp_query->found_posts / $wp_query->query_vars['posts_per_page'])?>">
        <?php while(have_posts()): the_post(); ?>
        <div class="col-xs-6 thumbnail-list-item">
            <a href="<?php the_permalink(); ?>" title="">
                <div class="thumbnail">
                <?php the_post_thumbnail('large-thumbnail'); ?>
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
        <script id="listing-item-template" type="text/html">
            <div class="col-xs-6 thumbnail-list-item">
                <a href="{{url}}" title="{{ altText }}">
                    <div class="thumbnail">
                        {{ thumbnail }}
                        <h2 class="caption hidden-xs">{{ title }}</h2>
                        <h3 class="caption visible-xs">{{ summary }}</h3>
                    </div>
                    <h2 class="caption visible-xs">{{ title }}</h2>
                </a>
            </div>
        </script>
    </div>
    
    <div class="paging">
        <a href="#" class="paging-prev" title="Prev Page">Prev</a>
        <a href="#" class="paging-next" title="Next Page">Next</a>
    </div>

  </div>
<?php get_footer(); }else{

    $response = array();
    
    while(have_posts()){
        the_post();
        $response[] = array(
            'id'=>get_the_ID(),
            'url'=>get_the_permalink(),
            'title'=>'<small>' . get_post_meta(get_the_ID(), 'subtitle', true) . '</small><span>' . get_the_title() . '</span>',
            'thumbnail'=>get_the_post_thumbnail(get_the_ID(), 'list-thumbnail'),
            'summary'=>get_the_excerpt(),
            'altText'=>get_the_title()
        );
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);

} ?>
