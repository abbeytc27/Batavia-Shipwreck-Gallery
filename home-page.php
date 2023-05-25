<?php/*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->
 <!-- Dark History -->
    <section class="container-fluid history">
        <div class="container">
            <div class="row">
                
<div class="col-md-6">
    
<h3><?php the_field('titleforheader'); ?></h3><!--  custom field for the aboutme content-->
<p class="darkp"><?php the_field('subtitleforheader'); ?></p>
<p class="darkp mutinies"><?php the_field('paragraphforheader'); ?></p>
<p class="darkp survivor"><?php the_field('sectionforheader'); ?></p>
    
    <p class="darkp history-learn">Learn More</p>
</div>

<div class="col-md-6">
<h2><?php the_field('quoteforheader'); ?></h2>
</div>
        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- container fluid -->


<!-- Blog Posts -->
<section class="container-fluid blogbg">
<div class="container">
<h3 class="blog"><?php the_field('titleforblogs'); ?></h3>
 
    <div class="row">
<div class="col-md-4 blogpost">
    <img src="<?php the_field('blogimage1');?>" class="responsive blogimg" alt="vases">
    <h4 class="blogh"><?php the_field('blogtitle1'); ?></h4>
    <p class="blogp"><?php the_field('blogexcerpt'); ?></p>
    <p class="bloglm"><?php the_field('learnmore'); ?></p>
</div>

<div class="col-md-4 blogpost">
    <img src="<?php the_field('blogimage2');?>" class=" responsive blogimg" alt="shipwreck">
    <h4 class="blogh"><?php the_field('blogtitle2'); ?></h4>
    <p class="blogp"><?php the_field('blogexcerpt2'); ?></p>
    <p class="bloglm"><?php the_field('learnmore2'); ?></p>
    </div>

<div class="col-md-4 blogpost">
    <img src="<?php the_field('blogimage3');?>" class="responsive blogimg" alt="ship images">
    <h4 class="blogh"><?php the_field('blogtitle3'); ?></h4>
    <p class="blogp"><?php the_field('blogexcerpt3'); ?></p>
    <p class="bloglm"><?php the_field('learnmore3 '); ?></p>
    </div>

 </div> <!-- row -->
</div> <!-- container -->
</section> <!-- container-fluid -->

<!-- Bookings -->
<section class="container-fluid bookbg">
<div class="container">

    <h3><?php the_field('titleforbookings');?></h3>
<div class="row">
 
    <div class="col-md-6 bookimg">
<img src="<?php the_field('bookingsimage');?>" class="responsive bookimg" alt="girl looking at exhibits">
    </div>

    <div class="col-md-6">
    <h5><u><?php the_field('openingtimestitle');?></u></h5>
        <p class="bookp"><?php the_field('openingtimes');?> </p>
        <p class="bookp"><?php the_field('donationentry');?> </p>
        <h5><u><?php the_field('titleforlocation');?></u> </h5>
           <p class="bookp"> <?php the_field('location');?> </p>
        <p class="bookp"><?php the_field('bookrec');?> </p>

    <button type="button" class="btn btn-danger">Book Tickets</button>
            </div>

</div> <!-- row -->
</div> <!-- container -->
</section> <!-- container fluid -->
<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->