<script setup></script>

<template>


    <!-- TODO: - Design a working carousel for this layout -->

    <!-- hero slider -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single" style="background: url(assets/img/slider/slider-1.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                    <i class="far fa-book-open-reader"></i>Welcome To SIBAST!
                                </h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Start Your Beautiful And
                                    <span>Bright</span> Future
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    Get the chance to change the trajectory of your education with us!
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="about.html" class="theme-btn">About More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                    <a href="contact.html" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero slider end -->


</template>

<style scoped>
.owl-carousel {
    display: block;
}
</style>
