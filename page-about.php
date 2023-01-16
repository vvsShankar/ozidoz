
<?php get_header(); ?>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-8">
<?php
 if(have_posts()):
    while(have_posts()) : the_post();?>
    <h3><?php the_title();?></h3>
    
    <hr>

    <?php       
    endwhile;
    endif;
    ?>
    </div><!-- end of md-8 -->
    <div class="col-md-4">
         <?php get_sidebar(); ?>
    </div><!-- end of md-4-->


<?php get_footer(); ?>