
<?php get_header(); ?>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-8">
<?php
 if(have_posts()):
    while(have_posts()) : the_post();?>
    <?php get_template_part('content',get_post_format()); ?>

<?php       
    endwhile;
    endif;
    ?>
    </div><!-- end of md-8 -->
    <div class="col-md-4">
         <?php get_sidebar(); ?>
    </div><!-- end of md-4-->

</div><!-- end of md-12 -->
</div><!-- end of row -->
<?php get_footer(); ?>