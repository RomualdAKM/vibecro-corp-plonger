<script setup>
import { ref,onMounted } from "vue"
import axios from 'axios';
import { useLocation } from '../store/pinia';

const getLang = useLocation()

const contenu = ref({
    titre:"",
    description:"",
})

const getContenu = async () => {
    let response = await axios.get("/api/get_contenu2");
    contenu.value = response.data.contenu
    console.log(contenu.value);
};

onMounted( async () => {
    getContenu();
})
</script>


<template>
  <div class="about-another pt-100 pb-70" id="propos">
    <div class="container-fluid m-0 p-0">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="about-img2">
            <img src="assets/img/about/2.png" alt="About Image" />
            <div class="icon-shape-5">
              <i class="flaticon-waves"></i>
            </div>
            <div class="icon-shape-6">
              <i class="flaticon-waves"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-7" v-if="contenu.length > 0">
          <div class="about-content" v-if="getLang.useLang == 'fr'">
            <span>A Propos</span>
            <h2>{{ contenu[0].titre }}</h2>
            <p>
              {{ contenu[0].description }}
            </p>
            
          </div>
          <div class="about-content" v-else>
            <span>About</span>
            <h2>{{ contenu[1].titre }}</h2>
            <p>
              {{ contenu[1].description }}
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

