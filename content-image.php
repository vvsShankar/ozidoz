
    <h3>IMAGE POST: <?php the_title();?></h3>
    <div class="post-thumbnails"><?php the_post_thumbnail(); ?></div>
    <small>Posted On: <?php the_time('F j,Y'); ?> at <?php the_time('g:i a')?>, in <?php the_category();?></small>
    <p><?php the_content(); ?></p>
    <hr>