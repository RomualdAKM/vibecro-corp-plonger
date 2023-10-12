<script setup>
import Base from "./../base.vue"
import router from "./../../../../router/index.js"

import {reactive,ref,onMounted} from 'vue'

const form = reactive({
    nom:"",
    lieu:"",
    statut:"",
    responsable:"",
    contact:"",
    email:"",
    description:"",
    titre:"",
    facebook:"",
    twitter:"",
    instagram:"",
   
})


const saveCentre = async () => {
  await axios.post('/api/create_centre',form).then((response) => {
    if(response.data.success){

                 router.push("/admin/centres")

                console.log('ok')
                  toast.fire({
                      icon: "success",
                      title: "Centre enregistrer avec success",
                  });

                }

                 
              else{
                toast.fire({
                      icon: "error",
                      title: "Remplissez correctement tout les champs",
                  });
                console.log('errorr',response.data.message)
              }
      
      
   
  })

}
</script>

<template>
    <div class="container-fluid">
    <div class="row">
       <Base />
       <main>

        <h1>Bienvenue dans le Dashboard</h1>
                <div >
                    <div class="col-md-6 compact-form mb-3">
                        
                        <form>
                           
                           
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Nom</label>
                               <input type="text" class="form-control" v-model="form.nom" >
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Lieu</label>
                               <input type="text" class="form-control" v-model="form.lieu" >
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Responsable</label>
                               <input type="text" class="form-control" v-model="form.responsable" >
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">contact</label>
                               <input type="text" class="form-control" v-model="form.contact" >
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">email</label>
                               <input type="email" class="form-control" v-model="form.email" >
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">titre</label>
                               <input type="text" class="form-control" v-model="form.titre" >
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">facebook</label>
                               <input type="text" class="form-control" v-model="form.facebook" >
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">twitter</label>
                               <input type="text" class="form-control" v-model="form.twitter" >
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">instagram</label>
                               <input type="text" class="form-control" v-model="form.instagram" >
                           </div>
                           
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Statut</label>
                               <select class="form-control" v-model="form.statut">
                                    <option value="dispo">dispo</option>
                                    <option value="nondispo">nondispo</option>
                                    
                               </select>
                           </div>
                           
                           <div class="mb-3 form-group">
                               <label for="francaisTextarea" class="form-label">Description</label>
                               <textarea class="form-control"  rows="2" v-model="form.description"></textarea>
                           </div>
                           <button type="button" @click="saveCentre()"  class="btn btn-primary mt-2">Valider</button>
                       </form>
                    </div>
                </div>
       </main>
    </div>
    </div>

</template>

<style scoped>
/* Styles personnalisés pour le sidebar */
#sidebar {
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    padding-top: 20px;
    background-color: #333;
    color: #fff;
}

#sidebar ul.nav.flex-column {
    padding-left: 20px;
}

#sidebar ul.nav.flex-column .nav-item {
    margin-bottom: 10px;
}

#sidebar ul.nav.flex-column .nav-item a {
    color: #fff;
}

#sidebar ul.nav.flex-column .nav-item a:hover {
    color: #f8f9fa;
}

/* Styles pour le contenu principal */
main {
    margin-left: 250px;
    padding: 20px;
}


</style>
