<script setup>
import TopHeader from "../Components/TopHeader.vue";
</script>

<template>
    <TopHeader></TopHeader>
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo/logo.png" alt="logo" />
                </a>
                <div class="mobile-menu-right">
                    <div class="search-btn">
                        <button type="button" class="nav-right-link search-box-outer">
                            <i class="far fa-search"></i>
                        </button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/courses">Courses</a>
                        </li>
                        <li class="nav-item mega-menu dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Academics</a>
                            <div class="dropdown-menu fade-down">
                                <div class="mega-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-md-3">
                                                <h5>About Us</h5>
                                                <div class="menu-about">
                                                    <a href="#" class="menu-about-logo"><img
                                                            src="assets/img/logo/logo-light.png" alt="" /></a>
                                                    <p>Allow us to shape your future! The Future is here. Grow with
                                                        us</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-3">
                                                <h5>Undergraduate</h5>
                                                <ul class="mega-menu-item">
                                                    <li>
                                                        <a class="dropdown-item" href="academic-single.html">Art And
                                                            Design</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="academic-single.html">Acting
                                                            And Drama</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="academic-single.html">Accounting And Finance</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="academic-single.html">Biology
                                                            And Conservation</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="academic-single.html">Science
                                                            And Engineering</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-3">
                                                <h5>Graduate Program</h5>
                                                <ul class="mega-menu-item">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="academic-single.html">Software Systems</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="academic-single.html">Human
                                                            Resource</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="academic-single.html">Health
                                                            Administration</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="academic-single.html">Biochemistry</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="academic-single.html">Computer Science</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-3">
                                                <h5>Resources</h5>
                                                <ul class="mega-menu-item">
                                                    <li>
                                                        <a class="dropdown-item" href="academic.html">Academics
                                                            Department</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="academic-single.html">Academic Department
                                                            Single</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="faculty.html">Our Faculty</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="faculty-single.html">Faculty
                                                            Single</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="contact.html">Contact With
                                                            Us</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/aboutus">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Admissions</a>
                            <ul class="dropdown-menu fade-down">
                                <li>
                                    <a class="dropdown-item" href="how-to-apply.html">How To Apply</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="application-form.html">Application Form</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <div class="nav-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link search-box-outer">
                                <i class="far fa-search"></i>
                            </button>
                        </div>
                        <div class="nav-right-btn mt-2">
                            <a href="application-form.html" class="theme-btn"><span
                                    class="fal fa-pencil"></span>Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<style scoped></style>
