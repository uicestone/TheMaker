<?php get_header(); the_post(); ?>
<div class="contributors">
    <h1><?php the_title(); ?></h1>
    <h6>Founder: YiZhou</h6>
    <div class="row">
        <?php the_content(); ?>
    </div>
</div>
<?php get_footer(); ?>