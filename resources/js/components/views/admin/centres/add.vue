<script setup>
import Base from "./../base.vue";
import router from "./../../../../router/index.js";

import { reactive, ref, onMounted } from "vue";

const form = reactive({
<<<<<<< HEAD
  nom: "",
  lieu: "",
  statut: "",
  responsable: "",
  contact: "",
  email: "",
  description: "",
  titre: "",
  facebook: "",
  twitter: "",
  instagram: "",
  latitude: "",
  longitude: "",
  image: "",
});

const saveCentre = async () => {
  await axios.post("/api/create_centre", form).then((response) => {
    if (response.data.success) {
      router.push("/admin/centres");
=======
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
    latitude:"",
    longitude:"",
    image:"",
})

const changePhoto = (e) => {
    const file = e.target.files[0];
    const limit = 4024 * 4024 * 7; // Limite de taille en octets (7 Mo dans cet exemple)

    if (file.size > limit) {
        swal({
            icon: "error",
            title: "Ooops...",
            text: "Vous téléchargez un fichier trop volumineux.",
        });
        return false;
    }

    // Stockez le fichier image dans la propriété "image"
    form.image = file;
}

const saveCentre = async () => {
    const formData = new FormData();

    // Ajoutez les autres champs au formulaire
    formData.append("nom", form.nom);
    formData.append("lieu", form.lieu);
    formData.append("statut", form.statut);
    formData.append("responsable", form.responsable);
    formData.append("contact", form.contact);
    formData.append("email", form.email);
    formData.append("description", form.description);
    formData.append("titre", form.titre);
    formData.append("facebook", form.facebook);
    formData.append("twitter", form.twitter);
    formData.append("instagram", form.instagram);
    formData.append("latitude", form.latitude);
    formData.append("longitude", form.longitude);

   // Ajoutez le fichier image s'il est défini
   if (form.image) {
        formData.append("image", form.image);
    }

   
  await axios.post('/api/create_centre',formData).then((response) => {
    if(response.data.success){
>>>>>>> f2b6abdcf1ab9527d787ae7a6fa148618f325985

      console.log("ok");
      toast.fire({
        icon: "success",
        title: "Centre enregistrer avec success",
      });
    } else {
      toast.fire({
        icon: "error",
        title: "Remplissez correctement tout les champs",
      });
      console.log("error", response.data.message);
    }
  });
};
</script>

<template>
  <div class="container-fluid">
    <div class="row">
      <Base />
      <main>
        <h1>Bienvenue dans le Dashboard</h1>
<<<<<<< HEAD
        <div>
          <div class="col-md-6 compact-form mb-3">
            <form>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">Nom</label>
                <input type="text" class="form-control" v-model="form.nom" />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">Lieu</label>
                <input type="text" class="form-control" v-model="form.lieu" />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label"
                  >Responsable</label
                >
                <input
                  type="text"
                  class="form-control"
                  v-model="form.responsable"
                />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">contact</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="form.contact"
                />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">email</label>
                <input type="email" class="form-control" v-model="form.email" />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">titre</label>
                <input type="text" class="form-control" v-model="form.titre" />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">facebook</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="form.facebook"
                />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">twitter</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="form.twitter"
                />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">instagram</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="form.instagram"
                />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">Latitude</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="form.latitude"
                />
              </div>
              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">Longitude</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="form.longitude"
                />
              </div>
=======
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
                               <label for="francaisInput" class="form-label">Latitude</label>
                               <input type="text" class="form-control" v-model="form.latitude" >
                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Longitude</label>
                               <input type="text" class="form-control" v-model="form.longitude" >
                           </div>
                           
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Statut</label>
                               <select class="form-control" v-model="form.statut">
                                    <option value="explore">Explore</option>
                                    <option value="nonexplore">Non explore</option>
                                    
                               </select>
                           </div>
                           
                           <div class="mb-3 form-group">
                               <label for="francaisTextarea" class="form-label">Description</label>
                               <textarea class="form-control"  rows="2" v-model="form.description"></textarea>
                           </div>
                           
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Logo</label>
                               <input type="file" class="form-control" @change="changePhoto" >
                           </div>
>>>>>>> f2b6abdcf1ab9527d787ae7a6fa148618f325985

              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">Statut</label>
                <select class="form-control" v-model="form.statut">
                  <option value="explore">Explore</option>
                  <option value="nonexplore">Non explore</option>
                </select>
              </div>

              <div class="mb-3 form-group">
                <label for="francaisTextarea" class="form-label"
                  >Description</label
                >
                <textarea
                  class="form-control"
                  rows="2"
                  v-model="form.description"
                ></textarea>
              </div>

              <div class="mb-3 form-group">
                <label for="francaisInput" class="form-label">Logo</label>
                <input type="file" class="form-control" />
              </div>

              <button
                type="button"
                @click="saveCentre()"
                class="btn btn-primary mt-2"
              >
                Valider
              </button>
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
