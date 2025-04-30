<script setup>
import Preloader from "../Components/Preloader.vue";
import Navbar from "../Components/Navbar.vue";
import PopupSearch from "../Components/PopupSearch.vue";
import Footer from "../Components/Footer.vue";
</script>


<template>

    <!-- Preloader componet -->
    <Preloader></Preloader>

    <!-- header area -->
    <Navbar></Navbar>
    <!-- header area end -->

    <!-- popup search -->
    <PopupSearch></PopupSearch>
    <!-- popup search end -->

    <main class="main">
        <slot />
    </main>

    <Footer></Footer>


</template>

<style scoped></style>
