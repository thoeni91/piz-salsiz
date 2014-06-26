<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="page-<?php the_id(); ?>">
    
    <?php 
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail('page-thumbnail');
        } 
    ?>
    
    <div id="content">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
</section>
<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>