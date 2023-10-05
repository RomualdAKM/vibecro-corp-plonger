<!-- <template>
  <div class="home-slider">
    <div class="slider-area owl-carousel owl-theme">
      <div class="slider-item slider-bg1">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">
              <div class="slider-text">
                <h1 class="animate-text" style="margin-top: -250px;">{{ $t('messages.welcome') }}</h1>
                <p class="animate-text" style="margin-top: -10px;">{{ $t('messages.banner') }}</p>
                <div class="store-images">
                  <span>

                  <img src="images/App_Store.svg" class="img-fluid fade-in-left" style="max-height: 60px;
                   padding-right: 5rem;">
                  </span>
                  <span>

                    <img src="images/Play_Store.svg" class="img-fluid fade-in-right" style="max-height: 60px;">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item slider-bg2">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">
              <div class="slider-text">
                <h1 class="animate-text" style="margin-top: -250px;">{{ $t('messages.welcome') }}</h1>
                <p class="animate-text" style="margin-top: -10px;">{{ $t('messages.banner') }}</p>
                <div class="store-images">
                  <span>

                  <img src="images/App_Store.svg" class="img-fluid fade-in-left" style="max-height: 60px;
                   padding-right: 5rem;">
                  </span>
                  <span>

                    <img src="images/Play_Store.svg" class="img-fluid fade-in-right" style="max-height: 60px;">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item slider-bg3">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">
              <div class="slider-text">
                <h1 class="animate-text" style="margin-top: -250px;">{{ $t('messages.welcome') }}</h1>
                <p class="animate-text" style="margin-top: -10px;">{{ $t('messages.banner') }}</p>
                <div class="store-images">
                  <span>

                  <img src="images/App_Store.svg" class="img-fluid fade-in-left" style="max-height: 60px;
                   padding-right: 5rem;">
                  </span>
                  <span>

                    <img src="images/Play_Store.svg" class="img-fluid fade-in-right" style="max-height: 60px;">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.animate-text {
  animation: text-fade-in 1s ease-in-out;
}

.store-images {
  display: flex;
  align-items: center;
}

.store-images img {
  max-height: 80px;
  margin-right: 5px;
}

@keyframes text-fade-in {
  0% {
    opacity: 0;
    transform: translateY(80px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.fade-in-left {
  animation: fade-in-left 2s ease forwards;
}

.fade-in-right {
  animation: fade-in-right 2s ease forwards;
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

</style> -->
<template>
  <div class="home-slider">
    <!-- Texte fixe -->
    <div class="slider-fixed-text">
      <div class="container">
        <div class="slider-text">
          <h1 :class="['animate-text', 'animate-slide']" style="color: aliceblue;">{{ $t('messages.welcome') }}</h1>
          <p :class="['animate-text', 'animate-slide']" style="color: aliceblue;">{{ $t('messages.banner') }}</p>
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
    <div class="slider-area owl-carousel owl-theme">
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
  transition: opacity 3s ease, transform 1s ease;
}

.animate-slide {
  animation: slide-in 4s ease-in-out forwards;
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
  animation: fade-in-right 4s ease forwards;
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
</style>


