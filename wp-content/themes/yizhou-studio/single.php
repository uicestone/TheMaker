<?php get_header(); the_post(); ?>                
<div class="article-wrapper">
   <div class="row">
       <div class="col-md-6">
           <h1 class="page-heading">
               <small><?=get_post_meta(get_the_ID(), 'subtitle', true)?></small>
               <span><?php the_title(); ?></span>
           </h1>
           <?php the_content(); ?>
       </div>
   </div>

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
