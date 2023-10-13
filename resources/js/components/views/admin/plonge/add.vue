<script setup>
import Base from "./../base.vue"
import router from "./../../../../router/index.js"

import {reactive,ref,onMounted} from 'vue'

const moniteurs = ref([])
const centres = ref([])
const form = reactive({
    lieu:"",
    duree:"",
    prix:"",
    nb_places:"",
    description:"",
    image:"",
    statut:"",
    profondeur:"",
    temps:"",
    pallier:"",
    moniteur_id:"",
    centre_id:"",
   
})

const getMoniteurs = async () => {
    await axios.get('/api/get_moniteurs').then((response) => {
        moniteurs.value = response.data.moniteurs
        console.log('moniteur',response.data.moniteurs)
    })
}
const getCentres = async () => {
    await axios.get('/api/get_centres').then((response) => {
        centres.value = response.data.centres
        console.log('centre',response.data.centres)
    })
}

onMounted(() => {
    getMoniteurs()
    getCentres()
})

const changePhoto = (e) => {
    let file = e.target.files[0];
    let reader = new FileReader();
    let limit = 4024 * 4024 * 7;
    if (file["size"] > limit) {
        swal({
            icon: "error",
            title: "Ooops...",
            text: "You are uploading a large file",
        });
        return false;
    }

    reader.onloadend = (file) => {
        form.image = reader.result;
    };
    reader.readAsDataURL(file);

}

const savePlonge = async () => {
  await axios.post('/api/create_plonge',form).then((response) => {
    if(response.data.success){

                 router.push("/admin/plonge")

                console.log('ok')
                  toast.fire({
                      icon: "success",
                      title: "Plonge enregistrer avec success",
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
                               <label for="francaisInput" class="form-label">Image</label>
                               <input type="file" class="form-control" @change="changePhoto">
                           </div>
                           <!-- <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Lieu</label>
                               <input type="text" class="form-control" v-model="form.lieu">
                           </div> -->
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Durée</label>
                               <input type="number" class="form-control" v-model="form.duree">
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Profondeur</label>
                               <input type="number" class="form-control" v-model="form.profondeur">
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Temps</label>
                               <input type="number" class="form-control" v-model="form.temps">
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Pallier</label>
                               <input type="number" class="form-control" v-model="form.pallier">
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Prix</label>
                               <input type="number" class="form-control" step="any" v-model="form.prix">
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Nombre de place</label>
                               <input type="number" class="form-control" v-model="form.nb_places">
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Moniteur</label>
                               <select class="form-control"  v-model="form.moniteur_id" >
                                    <option v-for="moniteur in moniteurs" :key="moniteur.id" :value="moniteur.id ">{{moniteur.nom}}</option>
                                    
                               </select>
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Centre</label>
                               <select class="form-control"  v-model="form.centre_id" >
                                    <option v-for="centre in centres" :key="centre.id" :value="centre.id ">{{centre.nom}}</option>
                                    
                               </select>
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
                           <button type="button"  class="btn btn-primary mt-2" @click="savePlonge()">Valider</button>
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
