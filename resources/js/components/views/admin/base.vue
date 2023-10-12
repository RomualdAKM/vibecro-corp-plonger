<template>
   <!-- Barre de navigation (Sidebar) -->
   <nav id="sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Tableau de bord
                        </a>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin/section1" class="nav-link" >
                            Section 1
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin/section2" class="nav-link" >
                            Section 2
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin/section3" class="nav-link" >
                            Section 3
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin/section4" class="nav-link" >
                            Section 4
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin/moniteurs" class="nav-link" >
                            Moniteurs
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin/plonge" class="nav-link" >
                            Plonge
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin/centres" class="nav-link" >
                            Centre
                        </router-link>
                    </li>
                  
                    <!-- Ajoutez d'autres liens de navigation ici -->
                </ul>
            </div>
        </nav>
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