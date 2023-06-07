<?php require_once('small_header.php'); ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext">

<article class="excerpts"> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
    <div <?php post_class(); ?>>

        <div class="postcontent">
            <?php ?>
            <?php the_content(); ?>
        </div>
                        
        <div class="content-band">
            <span class="postmeta-category"><?php the_category(', '); ?></span>
            <span class="postmeta-comments"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></span>
            
        </div>
    </div>
    <div class="related-template">
    <h3>RELATED POSTS</h3>
    <ul class="rel-list">
        <?php
        $backup = $post; 
        $current = $post->ID; 
                                
        global $post;


        $counter = 0;
        $allcats = '';
        foreach ((get_the_category()) as $cat) {
            if ($counter > 0) $allcats .= ',';
            $allcats .= $cat->cat_ID;
            $counter++;
        }
        
    $myposts = get_posts('numberposts=3&order=DESC&category=');
        foreach ($myposts as $post) :
            setup_postdata($post);
            ?>
        <li>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
            <span class="related-posts-date"><?php the_time('F jS, Y'); ?></span>
        </li>
        <?php endforeach;
                                
        $post = $backup; 
        wp_reset_query();
        ?>
    </ul>
</div>

    
    <div class="comments-template">
            <?php comments_template(); ?>
        </div>
        
    <?php endwhile; ?>
    <?php else: ?>
    <div class="post">
        <p>Sorry, no posts found.</p>
    </div>
    <?php endif; ?>
</article>
</section>

            
     </div>
    </div>
  </div>
<?php get_footer(); ?>

</article>
</section>

            
     </div>
    </div>
  </div>
<?php get_footer(); ?>