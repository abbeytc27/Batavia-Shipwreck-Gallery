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
    <p class="bloglm"><?php the_field('learnmore3'); ?></p>
    </div>

 </div> <!-- row -->
</div> <!-- container -->
</section> <!-- container-fluid -->

<!-- Bookings -->
<section class="container-fluid bookbg">
<div class="container">

    <h3>Bookings</h3>
<div class="row">
 
    <div class="col-md-6 bookimg">
<img src="http://170.187.231.66/~mesh5/wp-content/themes/Batavia-Shipwreck-Gallery/images/girl_looking.png" class="responsive bookimg" alt="girl looking at exhibits">
    </div>

    <div class="col-md-6">
    <h5><u>Opening Hours</u></h5>
        <p class="bookp">9:30-5pm daily </p>
        <p class="bookp">Donation Entry </p>
        <h5><u>Location</u> </h5>
           <p class="bookp"> 47 Cliff St, Fremantle WA 6160 </p>
        <p class="bookp">Bookings are recommended </p>

    <button type="button" class="btn btn-danger">Book Tickets</button>
            </div>

</div> <!-- row -->
</div> <!-- container -->
</section> <!-- container fluid -->
<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->