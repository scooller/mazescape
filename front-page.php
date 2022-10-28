<?php get_header(); 
if ( have_posts() ): while ( have_posts() ) : the_post(); $ID=get_the_ID(); ?>
<section id="nn">
</section>
<?php endwhile; endif;
get_footer(); ?> 