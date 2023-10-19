<script setup>
import Base from "./../base.vue"
import router from "./../../../../router/index.js"

import {reactive,ref,onMounted} from 'vue'

const form = reactive({
    nom:"",
    bio:"",
    note:"",
    image: null, // Pour stocker le fichier image
})

// const changePhoto = (e) => {
//     let file = e.target.files[0];
//     let reader = new FileReader();
//     let limit = 4024 * 4024 * 7;
//     if (file["size"] > limit) {
//         swal({
//             icon: "error",
//             title: "Ooops...",
//             text: "You are uploading a large file",
//         });
//         return false;
//     }

//     reader.onloadend = (file) => {
//         form.image = reader.result;
//     };
//     reader.readAsDataURL(file);
// }

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
const saveMoniteur = async () => {
    const formData = new FormData();

    // Ajoutez les autres champs au formulaire
    formData.append("nom", form.nom);
    formData.append("bio", form.bio);
    formData.append("note", form.note);

    // Ajoutez le fichier image s'il est défini
    if (form.image) {
        formData.append("image", form.image);
    }

    await axios.post('/api/create_moniteur', formData).then((response) => {
        if (response.data.success) {
            router.push("/admin/moniteurs");
            console.log('ok');
            toast.fire({
                icon: "success",
                title: "Moniteur enregistré avec succès",
            });
        } else {
            toast.fire({
                icon: "error",
                title: "Remplissez correctement tous les champs",
            });
            console.log('erreur', response.data.message);
        }
    });
}

// const saveMoniteur = async () => {
//   await axios.post('/api/create_moniteur',form).then((response) => {
//     if(response.data.success){

//                  router.push("/admin/moniteurs")

//                 console.log('ok')
//                   toast.fire({
//                       icon: "success",
//                       title: "Moniteur enregistrer avec success",
//                   });

//                 }

                 
//               else{
//                 toast.fire({
//                       icon: "error",
//                       title: "Remplissez correctement tout les champs",
//                   });
//                 console.log('errorr',response.data.message)
//               }
      
      
   
//   })

// }
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
                               <input type="file" name="image" @change="changePhoto">

                           </div>
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Nom</label>
                               <input type="text" class="form-control" v-model="form.nom" >
                           </div>
                           
                          
                           <div class="mb-3 form-group">
                               <label for="francaisInput" class="form-label">Note</label>
                               <input type="number" class="form-control" v-model="form.note">
                           </div>
                           
                           <div class="mb-3 form-group">
                               <label for="francaisTextarea" class="form-label">Bio</label>
                               <textarea class="form-control"  rows="2" v-model="form.bio"></textarea>
                           </div>
                           <button type="button" @click="saveMoniteur()"  class="btn btn-primary mt-2">Valider</button>
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
