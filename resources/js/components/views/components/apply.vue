<template>
  <div>
    <div class="parallax-section"  v-if="contenu.length > 0">
      <div class="container" v-if="getLang.useLang == 'fr'">
        <div class="apply-text" >
          <span>Lorem ipsum</span>
          <h2> {{ contenu[0].titre }}</h2>
          <p>
            {{ contenu[0].description }}
          </p>
        </div>
      </div>
      <div class="container" v-else>
        <div class="apply-text" >
          <span>Lorem ipsum</span>
          <h2> {{ contenu[1].titre }}</h2>
          <p>
            {{ contenu[1].description }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>


<style scoped>
.parallax-section {
  background-image: url('./imgs/apply-bg-2.png'); /* Assurez-vous que le chemin vers votre image de fond est correct */
  background-size: cover;
  background-attachment: fixed;
  background-position: center center;
  color: #ffffff; /* Couleur du texte sur l'image de fond */
  /* Ajoutez d'autres styles selon vos besoins */
}

.apply-text {
  padding: 100px 0; /* Ajustez la valeur de remplissage selon vos besoins */
}



</style>

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
    let response = await axios.get("/api/get_contenu4");
    contenu.value = response.data.contenu
    console.log(contenu.value);
};

onMounted( async () => {
    getContenu();
})
// Fonction pour vérifier si l'élément est visible dans la fenêtre
function isElementInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Fonction pour gérer l'animation lorsque l'élément est visible
function handleAnimation() {
  const applyText = document.querySelector(".apply-text");
  
  if (isElementInViewport(applyText)) {
    applyText.classList.add("show");
    window.removeEventListener("scroll", handleAnimation);
  }
}

// Écouteur d'événement pour déclencher l'animation lorsque l'utilisateur fait défiler la page
window.addEventListener("scroll", handleAnimation);

</script>
