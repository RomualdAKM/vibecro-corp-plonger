<script setup>
import { ref,onMounted } from "vue"
import { useLocation } from '../store/pinia';
import axios from 'axios';

const getLang = useLocation()

const contenu = ref({
    titre:"",
    description:"",
})

const getContenu = async () => {
    let response = await axios.get("/api/get_contenu1");
    contenu.value = response.data.contenu
    console.log(contenu.value);
};

onMounted( async () => {
    getContenu();
})

</script>

<template>
  <div class="home-slider">
    <!-- Texte fixe -->
    <div class="slider-fixed-text" v-if="contenu.length > 0">
      <div class="container">
        <div class="slider-text" v-if="getLang.useLang == 'fr'">
          <h1 :class="['animate-text', 'animate-slide']" style="color: aliceblue;">{{ contenu[0].titre }}</h1>
          <p :class="['animate-text', 'animate-slide']" style="color: aliceblue;">{{ contenu[0].description }}</p>
          <div class="store-images">
            <span>
              <img src="images/App_Store.svg" id="img1" class="img-fluid fade-in-left" style="max-height: 60px; padding-right: 5rem;">
            </span>
            <span>
              <img src="images/Play_Store.svg" id="img2" class="img-fluid fade-in-right" style="max-height: 60px;">
            </span>
          </div>
        </div>
        <div class="slider-text" v-else>
          <h1 :class="['animate-text', 'animate-slide']" style="color: aliceblue;">{{ contenu[1].titre }}</h1>
          <p :class="['animate-text', 'animate-slide']" style="color: aliceblue;">{{ contenu[1].description }}</p>
          <div class="store-images">
            <span>
              <img src="images/App_Store.svg" class="img-fluid fade-in-left" style="max-height: 60px; padding-right: 5rem;">
            </span>
            <span>
              <img src="images/Play_Store.svg" class="img-fluid fade-in-right" style="max-height: 60px;">
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Carrousel Owl Carousel -->
    <div  class="slider-area owl-carousel owl-theme">
      <!-- Diapositive 1 -->
      <div class="slider-item slider-bg1">
        <!-- Contenu de la première diapositive -->
        <!-- Vous pouvez ajouter d'autres éléments si nécessaire -->
      </div>
      <!-- Diapositive 2 -->
      <div class="slider-item slider-bg2">
        <!-- Contenu de la deuxième diapositive -->
        <!-- Vous pouvez ajouter d'autres éléments si nécessaire -->
      </div>
      <!-- Diapositive 3 -->
      <div class="slider-item slider-bg3">
        <!-- Contenu de la troisième diapositive -->
        <!-- Vous pouvez ajouter d'autres éléments si nécessaire -->
      </div>
    </div>
  </div>
</template>

<style scoped>
.animate-text {
  opacity: 0;
  transform: translateY(80px);
  transition: opacity 2s ease, transform 1s ease;
}


.animate-slide {
  animation: slide-in 3s ease-in-out forwards;
}


@keyframes slide-in {
  0% {
    opacity: 0;
    transform: translateY(50px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.store-images {
  display: flex;
  align-items: center;
}

.store-images img {
  max-height: 80px;
  margin-right: 5px;
}

.fade-in-left {
  animation: fade-in-left 2s ease forwards;
}

.fade-in-right {
  animation: fade-in-right 3s ease forwards;
}

@keyframes fade-in-left {
  0% {
    opacity: 0;
    transform: translateX(-40px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fade-in-right {
  0% {
    opacity: 0;
    transform: translateX(40px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
/* Styles pour le texte fixe */
.slider-fixed-text {
  position: absolute;
  top: 25%;
  left: 0;
  width: 100%;
  z-index: 200; /* Assurez-vous que le texte fixe est au-dessus du carrousel */
}
@media screen and (max-width: 968px) {
  /* Adjust styles for smaller screens */
  .slider-area .owl-carousel .owl-theme {
    height: 70rem;

  }
  .slider-fixed-text {
    top: 5%; /* Example: Change top position for smaller screens */
    margin-bottom: 10%;
  }
  .home-slider{
    height: 35rem;
    
  }
  .slider-fixed-text {
  top: 5px;
  font-size: small;
  left: 0;
  width: 100%;
  z-index: 200; /* Assurez-vous que le texte fixe est au-dessus du carrousel */
}
#img1{
  max-height: 20px;
}
#img2{
  max-height: 20px;
}
  
 
}
</style>


