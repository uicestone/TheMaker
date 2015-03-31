<?php get_header(); ?>

<div class="paging-wrapper row">
    <div class="visible-lg col-lg-2 advertisement">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/imagesadvertisement/1.jpg" width="142" height="310" alt="adv"></a>
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
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/advertisement/1.jpg" width="142" height="310" alt="adv"></a>
    </div>

    <div class="paging">
        <a href="#" class="paging-prev" title="Prev Page">Prev</a>
        <a href="#" class="paging-next" title="Next Page">Next</a>
    </div>

    <script id="listing-item-template" type="text/html">
        <div class="row block-list thumbnail-list paging-block">
            <div class="col-xs-3 thumbnail-list-item">
                <a href="{{ url }}" title="{{ linkTitle }}"><img src="{{ img }}" alt="{{ altText }}"></a>
            </div>
        </div>
    </script>
</div>
<?php get_footer(); ?>