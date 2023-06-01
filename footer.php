<footer class="container-fluid footerbg"> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 widgetleft">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?>
            <!-- <img src="images/wam_logo.png" class="footwam" alt="wam logo"></div> -->

            <div class="col-md-6 widgetright">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?>


                <!-- <p class="footerp">The Western Australian Museum acknowledges and respects the Traditional Owners of their ancestral lands,
                 waters and skies.</p> --></div>
        

        <div>
        <!-- <p class="footerab">About the Gallery <br>
            Bookings <br>
            Exhibits</p> -->
        </div>

<div class="link">
    <img src="http://170.187.231.66/~mesh5/wp-content/themes/Batavia-Shipwreck-Gallery/images/facebook.png" class="link" alt="facebook">
</div>
<div class="link">
    <img src="http://170.187.231.66/~mesh5/wp-content/themes/Batavia-Shipwreck-Gallery/images/instagram.png" class="link" alt="instagram">
</div>
<div class="link">
    <img src="http://170.187.231.66/~mesh5/wp-content/themes/Batavia-Shipwreck-Gallery/images/pinterest.png" class="link" alt="pinterest">
</div>
<div class="link">
    <img src="http://170.187.231.66/~mesh5/wp-content/themes/Batavia-Shipwreck-Gallery/images/youtube.png" class="link" alt="youtube">
</div>

        <p class="footercopy">All content copyright Government of Western Australia, All rights reserved.</p>


    </div> <!-- row -->
    </div> <!-- container -->
</footer> <!-- container fluid -->
<?php wp_footer(); ?>
<!-- bottom of the page -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> -->
</body>
</html>