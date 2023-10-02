import { createRouter, createWebHistory } from 'vue-router'
import index from '../components/views/index.vue'



const routes = [


    {
        path: '/',
        name: 'index',
        component: index
    },
   
]



const router = createRouter({
    history: createWebHistory(),
    routes,

})

export default router
