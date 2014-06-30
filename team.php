<?php
/*
Template Name: Team
*/

$team = new WP_Query(array(
    'post_type' => 'team',
    'order' => 'ASC',
    'orderby' => 'menu_order'
));

get_header();

?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="page-<?php the_id(); ?>">
	<div id="content" class="team">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
	<?php endwhile; else: ?>
	<?php endif; ?>
	

    <?php while ( $team->have_posts() ) : $team->the_post(); ?>
    <div class="teammember">
        <div class="image">
            <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail('team-thumbnail');
                } 
            ?>
        </div>
        <div class="contentRight">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        </div>
        <div class="clear"></div>
    </div>
    <?php endwhile; ?>
</section>

<?php get_footer(); ?>