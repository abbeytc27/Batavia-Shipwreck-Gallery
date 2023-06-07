<?php
    /*
    Template Name: Exhibits1
    */
    ?>
<?php require_once('blog_header.php'); ?>
<header class="container-fluid" style="background-size: cover; background-image: url(<?php the_field('exhibitsbackgroundimage') ?>);">
    <div class="container">
        <div class="row">
        <?php 
$args = array(
  'category_name' =>  'Exhibits1',
 // 'posts_per_page'    =>   1
);
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
 <div class="thepost">
<h2><?php the_title(); ?></h2> 
    
<?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('thumbnail');
                } ?>
<p class="about-text"><?php the_excerpt(); ?></p>
    <a class="readmore" href="<?php the_permalink(); ?>"> CONTINUE READING</a>
</div>    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

           
     </div>
    </div>
  </div>
<?php get_footer(); ?>