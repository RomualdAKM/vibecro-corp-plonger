<template>
  <div>
    <div class="parallax-section">
      <div class="container">
        <div class="apply-text">
          <span>Lorem ipsum</span>
          <h2> Lorem ipsum dolor sit amet</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
            lobortis eros id urna sollicitudin feugiat. In imperdiet at dui
            nec vehicula. Aenean nec sapien odio. Nunc laoreet auctor Testimony
            you mister music.Discipline assets
            briefs with tone completely
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

/* Ajoutez d'autres styles pour le texte et les éléments de la section ici */

/* Ajoutez une classe pour l'animation */
.apply-text {
  opacity: 0; /* L'élément est invisible au départ */
  transform: translateY(20px); /* Déplacez l'élément vers le bas */
  transition: opacity 1.5s ease, transform 1.5s ease; /* Augmenter la durée de l'animation */
}

.apply-text.show {
  opacity: 1; /* Rendre l'élément visible */
  transform: translateY(0); /* Animer le déplacement vers le haut */
}

</style>

<script >
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
