<?php get_header(); the_post(); ?>                
<div class="article-wrapper">
   <?php the_content(); ?>
   <div class="visible-lg advertisement">
        <img src="<?=get_stylesheet_directory_uri()?>/images/advertisement/1.jpg" width="142" height="310" alt="adv">
   </div>
</div>

<br>

<!--<div class="paging">
    <a href="#" class="paging-prev" title="Prev Page">Prev</a>
    <a href="#" class="paging-next" title="Next Page">Next</a>
</div>-->
<?php get_footer(); ?>
