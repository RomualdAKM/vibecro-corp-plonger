<!-- <template>
  <div class="language-selector">
    <div class="select-container">
      <select id="language" v-model="selectedLanguage" @change="changeLocale">
        <option value="en">English</option>
        <option value="fr">Français</option>
      </select>
      <img v-if="selectedLanguage === 'fr'" src="./imgs/drapfr.png" alt="French Flag">
      <img v-else src="./imgs/drapen.png" alt="English Flag">
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { i18n } from '../../../app.js' 

const selectedLanguage = ref('fr'); 
const changeLocale = () => {
  i18n.global.locale = selectedLanguage.value;
};
</script> -->
<template>
  <div class="language-selector">
    <div class="select-container">
      <select id="language" v-model="selectedLanguage" @change="changeLocale">
        <option value="en">English</option>
        <option value="fr">Français</option>
      </select>
      <img v-if="selectedLanguage === 'fr'" src="./imgs/drapfr.png" alt="French Flag">
      <img v-else src="./imgs/drapen.png" alt="English Flag">
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'; 
import { useLocation } from '../store/pinia';

const selectedLanguage = ref('fr')
const getLang = useLocation()
const changeLocale = () => {
  getLang.useLang = selectedLanguage.value;
};

</script>

<style scoped>
.language-selector {
  position: fixed;
  bottom: 0;
  left: 0;
  display: flex;
  font-size: 16px;
  background-color: transparent;
  padding: 10px;
  z-index: 9999; /* Assurez-vous que le composant reste au-dessus du reste de la page */
}

.select-container {
  display: flex;
  align-items: center;
}

/* Style pour le select */
#language {
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 5px 10px;
  background-color: white;
  outline: none;
  margin-right: 10px;
}

/* Style pour les options du select */
#language option {
  background-color: transparent;
  color: #333;
}

/* Style pour les images */
img {
  max-width: 30px;
  margin-left: 10px;
}

/* Ajoutez ici vos styles spécifiques si nécessaire */
</style>
