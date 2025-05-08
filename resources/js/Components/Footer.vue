<script setup>
console.log("footer")

var year = new Date().getFullYear().toString();

</script>

<template>

    <!-- footer area -->
    <footer class="footer-area">
        <div class="footer-shape">
            <img src="assets/img/shape/03.png" alt="" />
        </div>
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="assets/img/logo/logo.png" alt="" />
                            </a>
                            <p class="mb-3">
                                There are many variations of passages available for success. But we guide you to the best!
                            </p>
                            <ul class="footer-contact">
                                <li>
                                    <a href="tel:+21236547898"><i class="far fa-phone"></i>+237 678 31 15 73</a>
                                </li>
                                <li>
                                    <i class="far fa-map-marker-alt"></i>Rail, Bonaberi, Second
                                    Entrance
                                </li>
                                <li>
                                    <a href="mailto:info@example.com"><i
                                            class="far fa-envelope"></i>sibast@sibast.org</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> About Us</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> FAQ's</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Testimonials</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Update News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Our Campus</h4>
                            <ul class="footer-list">
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Campus Safety</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Student Activities</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Academic Department</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Planning &
                                        Administration</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Office Of The
                                        Chancellor</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-caret-right"></i> Facility Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>Coming Soon</p>
:q


                                <!-- <p>Subscribe Our Newsletter To Get Latest Update And News</p> -->
                                <!-- <div class="subscribe-form"> -->
                                <!--     <form action="#"> -->
                                <!--         <input type="email" class="form-control" placeholder="Your Email" /> -->
                                <!--         <button class="theme-btn" type="submit"> -->
                                <!--             Subscribe Now <i class="far fa-paper-plane"></i> -->
                                <!--         </button> -->
                                <!--     </form> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copyright-wrapper">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p class="copyright-text">
                                &copy; Copyright
                                <span id="date"></span>{{ year + " " }}
                                <a href="/">SIBAST</a> All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <ul class="footer-social">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

</template>

<style scoped></style>
