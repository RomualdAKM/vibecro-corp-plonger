<template>
  <div class="about-another pt-100 pb-70" id="propos">
    <div class="container-fluid m-0 p-0">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="about-img2">
            <img src="assets/img/about/2.png" alt="About Images" />
            <div class="icon-shape-5">
              <i class="flaticon-waves"></i>
            </div>
            <div class="icon-shape-6">
              <i class="flaticon-waves"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="about-content">
            <span>{{ $t('messages.propos1') }}</span>
            <h2>{{ $t('messages.propos2') }}</h2>
            <p>
              {{ $t('messages.propos3') }}
            </p>
            <p>
              {{ $t('messages.propos3') }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* Ajoutez une classe pour l'animation */
.about-content {
  opacity: 0; /* L'élément est invisible au départ */
  transform: translateY(20px); /* Déplacez l'élément vers le bas */
  transition: opacity 2.5s ease, transform 2.5s ease; /* Augmenter la durée de l'animation */
}

.about-content.show {
  opacity: 1; /* Rendre l'élément visible */
  transform: translateY(0); /* Animer le déplacement vers le haut */
}


</style>