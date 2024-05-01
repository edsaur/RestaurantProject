<?php include_once('../components/header.php'); ?>
<section id="hero" style="position: relative;">
    <video autoplay loop muted playsinline poster="your-poster-image.jpg"
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
        <source src="../image/BurgerGrilling.mp4" type="video/mp4">
        <!-- Add additional source elements for 
        1.  SteakOnGrillCloseup
        other video formats if needed -->
    </video>
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(20, 20, 20, 0.1);">
    </div>
    <div class="hero container" style="position: relative; z-index: 1;">
        <div>
            <h1><strong>
                    <h1 class="text-center" style="font-family:Copperplate; color:whitesmoke;"> GRILL US!</h1>
                    <span></span>
                </strong></h1>
            <h1><strong style="color:white;">Send in your reviews!<span></span></strong></h1>
            <a href="#reviews" type="button" class="cta">Read Reviews</a>
        </div>
    </div>
</section>


<section id="reviews">
    <div class="container">
        <h1 class="section-title">See What People <span>Says!</span></h1>

        <div class="reviews-box">
            <div class="reviews">
                
            </div>
        </div>
    </div>
</section>

<?php include_once('../components/footer.php'); ?>