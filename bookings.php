<?php
    /*
    Template Name: Booking Page2
    */
    ?>
    <?php get_header();?>
<section class="container-fluid buttonbg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php the_field('imageforopening'); ?>" class="buttonimg" alt="opening times">
                <h2 class="buttonh"><?php the_field('titleforopening'); ?></h2>
                <p class="hpo"><?php the_field('paragraphforopening'); ?></p>
            </div>
            <div class="col-md-4">
                <img src="<?php the_field('imagefortickets'); ?>" class="buttonimg" alt="tickets">
                <h2 class="buttonh entry"><?php the_field('titlefortickets'); ?></h2>
                <p class="hpe"><?php the_field('paragraphforopening'); ?></p>
            </div>
            <div class="col-md-4">
                <img src="<?php the_field('imageforlocation'); ?>" class="buttonimg" alt="location">
                <h2 class="buttonh"><?php the_field('titleforlocation'); ?></h2>
                <p class="hpl"><?php the_field('paragraphforlocation'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- book a visit -->
        <section class="container-fluid visitus">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php the_field('bookingimage'); ?>" class="bookmum" alt="mum and daughter">
                    </div>
                    <div class="col-md-6 visit">
                        <h3 class="open"><?php the_field('bookingsubtitle1'); ?></h3>
                        <p class="time"><?php the_field('bookingparagraph1'); ?> </p>
                        <p class="anzac"> <?php the_field('bookingparagraph2'); ?></p>
                        <p class="days"><?php the_field('bookingparagraph3'); ?></p>
                        <p class="bookadv"><?php the_field('bookadvparagraph'); ?></p>
                        <button type="button" class="btn btn-dangerb">Book Here</button>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- container fluid -->

<!-- visitor information -->
<section class="container-fluid visitinfo">
    <div class="container">
        <h3 class="visith"><?php the_field('titleforvistorinfo'); ?></h3>
        <h4 class="visitph"><?php the_field('titleforaccess'); ?></h4>
        <p class="visitp"><?php the_field('paragraphforaccess'); ?></p>
            <h4 class="visitph"><?php the_field('titleforparking'); ?></h4>
        <p class="visitp"><?php the_field('paragraphforparking'); ?></p>
            <h4 class="visitph"><?php the_field('titleforguide'); ?></h4>
        <p class="visitp"><?php the_field('paragraphforguide'); ?></p>
            <h4 class="visitph"><?php the_field('titleforequipment'); ?></h4>
        <p class="visitp"><?php the_field('paragraphforequipment'); ?></p>
            <h4 class="visitph"><?php the_field('titleforhearing'); ?></h4>
        <p class="visitp"><?php the_field('paragraphforhearing'); ?></p>
    </div>
</section>
<?php get_footer();?>