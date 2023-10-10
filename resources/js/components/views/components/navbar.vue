<template>
    <div>
        <nav
            class="navbar"
            :class="{ 'fixed-nav': isMenuOpen || isScrolled }"
            style="background-color: #144669; color: aliceblue"
        >
            <!-- Placer le logo ici -->
            <div class="logo">
                <img
                    src="./imgs/plongeur_logo.jpeg"
                    alt=""
                    id="logo"
                    style="width: 40px; height: 40px"
                />
                <span style="font-size: 10px">LA PLONGEE SOUS MARINE</span>
            </div>
            <button class="menu-toggle" @click="toggleMenu">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-align-justify"
                >
                    <line x1="21" y1="10" x2="3" y2="10"></line>
                    <line x1="21" y1="6" x2="3" y2="6"></line>
                    <line x1="21" y1="14" x2="3" y2="14"></line>
                    <line x1="21" y1="18" x2="3" y2="18"></line>
                </svg>
            </button>
            <ul
                class="navbar-menu"
                :class="{ 'show-menu': isMenuOpen }"
                v-if="getLang.useLang == 'fr'"
            >
                <li>
                    <a href="#acc" style="color: aliceblue"
                        ><i class="fas fa-home"></i> Accueil</a
                    >
                </li>
                <li>
                    <a href="#propos" style="color: aliceblue"
                        ><i class="fa-solid fa-circle-exclamation"></i> A
                        Propos</a
                    >
                </li>
                <li>
                    <a href="#temoignage" style="color: aliceblue"
                        ><i class="fas fa-comments"></i> Service</a
                    >
                </li>
                <li>
                    <a href="#contact" style="color: aliceblue"
                        ><i class="fas fa-envelope"></i> Contact</a
                    >
                </li>
            </ul>
            <ul class="navbar-menu" :class="{ 'show-menu': isMenuOpen }" v-else>
                <li>
                    <a href="#acc" style="color: aliceblue"
                        ><i class="fas fa-home"></i> Home</a
                    >
                </li>
                <li>
                    <a href="#propos" style="color: aliceblue"
                        ><i class="fa-solid fa-circle-exclamation"></i> About</a
                    >
                </li>
                <li>
                    <a href="#temoignage" style="color: aliceblue"
                        ><i class="fas fa-comments"></i> Our Service</a
                    >
                </li>
                <li>
                    <a href="#contact" style="color: aliceblue"
                        ><i class="fas fa-envelope"></i> Contact</a
                    >
                </li>
            </ul>
        </nav>
        <!-- Your page content here -->
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { useLocation } from "../store/pinia";

const getLang = useLocation();

const isMenuOpen = ref(false);
const isScrolled = ref(false);

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};

const handleScroll = () => {
    if (window.scrollY > 50 && !isMenuOpen.value) {
        isScrolled.value = true;
    } else {
        isScrolled.value = false;
    }
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>

<style scoped>
/* Styles for mobile */
.navbar-menu {
    z-index: 1000;
    display: none;
    flex-direction: column;
    background-color: #144669;
    position: absolute;
    top: 60px;
    left: 0;
    width: 100%;
    text-align: center;
    padding: 15px;
    margin: 0;
    list-style: none;
}

.navbar-menu.show-menu {
    display: flex;
}

.navbar-menu li {
    padding: 15px;
}

.menu-toggle {
    z-index: 1000;
    display: block;
    text-align: right;
    padding: 2px;
    background-color: #144669;
    color: rgb(242, 237, 237);
    cursor: pointer;
}

/* Styles for desktop */
@media screen and (min-width: 768px) {
    .navbar-menu {
        z-index: 1000;
        display: flex;
        font-size: small;
        flex-direction: row;
        position: static;
        background-color: transparent;
        top: auto;
        left: auto;
        width: auto;
    }

    .navbar-menu.show-menu {
        display: flex;
    }

    .navbar-menu li {
        padding: 0 20px;
    }

    .menu-toggle {
        display: none;
    }
}

.fixed-nav {
    z-index: 1000;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    backdrop-filter: blur(8px) brightness(1.2);
    -webkit-backdrop-filter: blur(8px) brightness(1.2);
    /* text-shadow: 0 0 5px rgba(0, 0, 0, 0.5); */
    padding: 10px 20px 15px 20px;
    transition: 0.3s ease-out;
    background-color: #144669;
    color: rgb(252, 249, 249);
    font-size: 16px;
}
</style>
