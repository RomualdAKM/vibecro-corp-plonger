<script setup>
import { ref, watch } from 'vue';
import navbar from './components/navbar.vue'
import sidebar from './components/sidebar.vue'
import bannerarea from './components/bannerarea.vue'
import about from './components/about.vue'
import service from './components/service.vue'
import apply from './components/apply.vue'
import testimonials from './components/testimonials.vue'
import footer from './components/footer.vue'
import contact from './components/contact.vue'

// État du consentement aux cookies (initialisé à false)
const cookieConsent = ref(false);

// Fonction pour accepter les cookies
const acceptCookies = () => {
  cookieConsent.value = true;
  // Enregistrez le consentement dans un cookie ou dans un autre stockage persistant
  document.cookie = 'cookieConsent=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';
};

// Fonction pour retirer le consentement aux cookies
const withdrawCookies = () => {
  cookieConsent.value = false;
  // Supprimez le cookie de consentement
  document.cookie = 'cookieConsent=; expires=Thu, 02 Jan 2023 00:00:00 GMT; path=/';
};

// Vérifiez si l'utilisateur a déjà donné son consentement (par exemple, à partir d'un cookie)
watch(() => {
  const cookies = document.cookie.split('; ');
  for (const cookie of cookies) {
    const [name, value] = cookie.split('=');
    if (name === 'cookieConsent' && value === 'true') {
      cookieConsent.value = true;
      break;
    }
  }
});

</script>

<template>
 
   <navbar />
   <sidebar />
   <bannerarea />
   <about />
   <service />
   <apply />
   <testimonials />
   <contact />
   <footer class="footer-area">
      <div class="footer-top pt-60 pb-40">
        <div class="container">
         
           Tout droit reserver
         
        </div>
      </div>
      
   </footer>
   <!-- Bannière d'acceptation des cookies (modal en bas) -->
  <div class="cookie-modal" :class="{ 'show-modal': !cookieConsent }">
    <div class="cookie-banner">
      <p style="color: aliceblue;">Nous utilisons des cookies pour améliorer votre expérience sur notre site. En continuant à utiliser notre site, vous acceptez notre utilisation des cookies.</p>
      <button @click="acceptCookies">Accepter</button>
    </div>
  </div>
</template>
<style scoped>
/* Styles pour la bannière de cookies */
.cookie-modal {
  z-index: 1000;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  min-height: 60px; /* Hauteur minimale pour la bannière des cookies */
  background-color: rgba(0, 0, 0, 0.8);
  transition: transform 0.3s ease;
  transform: translateY(100%);
}

.cookie-modal.show-modal {
  transform: translateY(0);
}

.cookie-banner {
  background-color: #333;
  color: rgb(249, 248, 248);
  padding: 10px;
  text-align: center;
}

.cookie-banner button {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}
</style>