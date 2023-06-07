<?php
    /*
    Template Name: Exhibits1
    */
    ?>
    <?php get_header();?>
        <section class="container-fluid exhibitsp">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php the_field('consignmentimage'); ?>" class="exhibitimg" alt="consignments of the ship">
                        <a href="consignment.html"><h4><?php the_field('consignmenttitle'); ?></h4></a>
                        <p class="exhibitsmp"><?php the_field('consignmentparagraph'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php the_field('inoutimage'); ?>" class="exhibitimg" alt="the making of the ship">
                        <a href="insandout.html"><h4><?php the_field('inouttitle'); ?></h4></a>
                        <p class="exhibitsmp"><?php the_field('inoutparagraph'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php the_field('historyimage'); ?>" class="exhibitimg" alt="the history of the ship">
                        <a href="history.html"><h4><?php the_field('historytitle'); ?></h4></a>
                        <p class="exhibitsmp"><?php the_field('historyparagraph'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php the_field('boatimage'); ?>" class="exhibitimg" alt="the ship">
                        <a href="exhibits.html"><h4><?php the_field('boattitle'); ?></h4></a>
                        <p class="exhibitsmp"><?php the_field('boatparagraph'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php the_field('survivorsimage'); ?>" class="exhibitimg" alt="the survivors">
                        <a href="exhibits.html"><h4><?php the_field('survivorstitle'); ?></h4></a>
                        <p class="exhibitsmp"><?php the_field('survivorsparagraph'); ?> </p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php the_field('wreckimage'); ?>" class="exhibitimg" alt="the wrecking of the ship">
                        <a href="exhibits.html"><h4><?php the_field('wrecktitle'); ?></h4></a>
                        <p class="exhibitsmp"><?php the_field('wreckparagraph'); ?></p>
                        </div>
                </div>
            </div>
        </section>
        <?php get_footer();?>