<script setup>
import Base from "./../base.vue"
import {ref, onMounted} from 'vue'

const  centres = ref([])

const getCentres = async () => {
    await axios.get('/api/get_centres').then((response) => {
        centres.value = response
        console.log('centres',response)
    })
}

onMounted(() => {
    getCentres()
})

</script>

<template>
    <div class="container-fluid">
    <div class="row">
       <Base />

       <main>

        <h1>Bienvenue dans le Dashboard</h1>
                <div >
                    
    <div class="table-container">
        <router-link to="/admin/add_centre" class="add-button">Ajouter</router-link>
        <table>
            <thead>
                <tr>
                    
                    <th>Nom</th>
                    <th>statu</th>
                  
                    <th>Actions </th>
                    
                </tr>
            </thead>
            <tbody>
               
                <tr v-for="centre in centres.data" :key="centre.id">
                    
                    <td>
                        <h3>{{ centre.nom }}</h3>
                    </td>
                    <td>
                        <h3>{{ centre.statut }}</h3>
                    </td>
                   
                    <td>
                        <a href="#" class="edit-button">Modifier</a>
                        <a href="#" class="delete-button">Supprimer</a>
                    </td>
                </tr>
               
            </tbody>
        </table>
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
    padding: 10px;
}

/* Reset CSS for cross-browser consistency */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic styling for the table */
.table-container {
    width: 100%;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
}

/* Header row styling */
thead {
    background-color: #3498db;
    color: #fff;
}

th {
    padding: 5px;
    text-align: left;
}

/* Alternate row coloring for better readability */
tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Cell padding and alignment */
td {
    padding: 5px;
    text-align: left;
}

/* Add hover effect on table rows */
tbody tr:hover {
    background-color: #e0e0e0;
}

/* Ajoutez du style pour le bouton "Ajouter" */
.add-button {
    margin: 10px;
    padding: 10px 20px;
    background-color: #3498db;
    color: #fff;
    border: none;
    cursor: pointer;
}

.add-button:hover {
    background-color: #2980b9;
}
</style>
