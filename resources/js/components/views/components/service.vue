<script setup>
import { ref,onMounted } from "vue"
import axios from 'axios';
import { useLocation } from '../store/pinia';

const getLang = useLocation()

const contenu = ref({
    titre:"",
    description:"",
    titrelment1: "",
    titrelment2: "",
    titrelment3: "",
})

const getContenu = async () => {
    let response = await axios.get("/api/get_contenu3");
    contenu.value = response.data.contenu
    console.log(contenu.value);
};

onMounted( async () => {
    getContenu();
})

</script>


<template>
  <section class="service-area-two ptb-100"  v-if="contenu.length > 0">
    <div class="container" v-if="getLang.useLang == 'fr'">
      <div class="section-title text-center mb-50">
        <span>Nos Services</span>
        <h2>{{ contenu[0].titre }}</h2>
        <p>
          {{ contenu[0].description }}
        </p>
      </div>
      <div class="row">
       
        <div class="col-lg-4 col-md-6">
          <div class="service-item box-shadow">
            <a href="#" class="service-item-icon">
              <i class="flaticon-flipper"></i>
            </a>
            <a href="#" class="service-head">
              <h3>{{ contenu[0].titrelment1 }}</h3>
            </a>
          
          </div>
        </div>
       
        <div class="col-lg-4 col-md-6">
          <div class="service-item box-shadow">
            <a href="#" class="service-item-icon">
              <i class="flaticon-dive"></i>
            </a>
            <a href="#" class="service-head">
              <h3>{{ contenu[0].titrelment2 }}</h3>

            </a>
           
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item box-shadow">
            <a href="#" class="service-item-icon">
              <i class="flaticon-oxigen"></i>
            </a>
            <a href="#" class="service-head">
              <h3>{{ contenu[0].titrelment3 }}</h3>

            </a>
            
          </div>
        </div>
        
      </div>
    </div>
    <div class="container" v-else>
      <div class="section-title text-center mb-50">
        <span>Our Service</span>
        <h2>{{ contenu[1].titre }}</h2>
        <p>
          {{ contenu[1].description }}
        </p>
      </div>
      <div class="row">
       
        <div class="col-lg-4 col-md-6">
          <div class="service-item box-shadow">
            <a href="#" class="service-item-icon">
              <i class="flaticon-flipper"></i>
            </a>
            <a href="#" class="service-head">
              <h3>{{ contenu[1].titrelment1 }}</h3>

            </a>
          
          </div>
        </div>
       
        <div class="col-lg-4 col-md-6">
          <div class="service-item box-shadow">
            <a href="#" class="service-item-icon">
              <i class="flaticon-dive"></i>
            </a>
            <a href="#" class="service-head">
              <h3>{{ contenu[1].titrelment2 }}</h3>

            </a>
           
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item box-shadow">
            <a href="#" class="service-item-icon">
              <i class="flaticon-oxigen"></i>
            </a>
            <a href="#" class="service-head">
              <h3>{{ contenu[1].titrelment3 }}</h3>

            </a>
            
          </div>
        </div>
        
      </div>
    </div>
  </section>
</template>
<style scoped>

</style>