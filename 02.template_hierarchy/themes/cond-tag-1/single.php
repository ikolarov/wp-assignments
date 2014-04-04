<h2><?php the_title(); ?></h2>
 <?php if(have_posts()) :?>
    <div class="post">
        <div class="entry">
                <?php the_content(); ?>
        </div>
    </div>
<?php endif; ?>