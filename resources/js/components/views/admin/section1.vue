<script setup>
import Base from "./base.vue"
import { ref,onMounted } from "vue"

const contenu = ref({
    titre:"",
    description:"",
})

const getContenu = async () => {
    let response = await axios.get("/api/get_contenu1");
    contenu.value = response.data.contenu
    console.log(contenu.value);
};

const updateVfr = async () => {
    const firstContenu = contenu.value[0];
    await axios.post("/api/update_vfr1/" + firstContenu.id, firstContenu).then((response)=>{
        if(response.data.success){
            console.log('ok')
            toast.fire({
            icon: "success",
            title: "Modifier avec success",
        })
           
        } else {
            toast.fire({
                      icon: "error",
                      title: "Remplissez Correctement tout les champs",
                  });
        }
    });
}
const updateVen = async () => {
    const firstContenu = contenu.value[1];
    await axios.post("/api/update_ven1/" + firstContenu.id, firstContenu).then((response)=>{
        if(response.data.success){
            console.log('ok')
            toast.fire({
            icon: "success",
            title: "Modifier avec success",
        })
           
        } else {
            toast.fire({
                      icon: "error",
                      title: "Remplissez Correctement tout les champs",
                  });
        }
    });
}


onMounted( async () => {
    getContenu();
    updateVfr()
})

</script>

<template>
 <div class="container-fluid">
    <div class="row">
       <Base />

        <!-- Contenu principal -->
        <main>
                <h1>Bienvenue dans le Dashboard</h1>
                <div >
                    <div class="col-md-6 compact-form mb-3">
                        <h2>Version française</h2>
                        <form v-if="contenu.length > 0">
                           
                            <div class="mb-3 form-group">
                                <label for="francaisInput" class="form-label">Titre</label>
                                <input type="text" class="form-control" v-model="contenu[0].titre" placeholder="Entrez le titre en français">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="francaisTextarea" class="form-label">Description</label>
                                <textarea class="form-control" v-model="contenu[0].description" rows="4" placeholder="Entrez la description en français"></textarea>
                            </div>
                            <button type="button" @click="updateVfr()" class="btn btn-primary mt-2">Valider</button>
                        </form>
                    </div>
                    <div class="col-md-6 compact-form">
                        <h2>Version anglaise</h2>
                        <form v-if="contenu.length > 0">
                            <div class="mb-3 form-group">
                                <label for="anglaisInput" class="form-label">Title</label>
                                <input type="text" class="form-control"  v-model="contenu[1].titre" id="anglaisInput" placeholder="Enter the title in English">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="anglaisTextarea" class="form-label">Description</label>
                                <textarea class="form-control" id="anglaisTextarea" v-model="contenu[1].description" rows="4" placeholder="Enter the description in English"></textarea>
                            </div>
                            <button type="button" @click="updateVen()" class="btn btn-primary mt-2">Valider</button>

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