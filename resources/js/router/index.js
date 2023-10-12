import { createRouter, createWebHistory } from 'vue-router'
import index from '../components/views/index.vue'
import section1 from '../components/views/admin/section1.vue'
import section2 from '../components/views/admin/section2.vue'
import section3 from '../components/views/admin/section3.vue'
import section4 from '../components/views/admin/section4.vue'
import plonges from '../components/views/admin/plonge/index.vue'
import addPlonge from '../components/views/admin/plonge/add.vue'
import moniteurs from '../components/views/admin/moniteurs/index.vue'
import addMoniteur from '../components/views/admin/moniteurs/add.vue'
import addCentre from '../components/views/admin/centres/add.vue'
import centres from '../components/views/admin/centres/index.vue'
import login from '../components/views/admin/login.vue'
import register from '../components/views/admin/register.vue'

const routes = [

    {
        path: '/',
        name: 'index',
        component: index,
        meta: {
            requiresAuth: false,
            
        }
    },
    {
        path: '/admin/section1',
        name: 'Section',
        component: section1,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/section2',
        name:'section2',
        component: section2,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/section3',
        name: 'section3',
        component: section3,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/section4',
        name: 'section4',
        component: section4,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/plonge',
        name: 'plonges',
        component: plonges,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/add_plonge',
        name: 'addPlonge',
        component: addPlonge,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/moniteurs',
        name: 'moniteurs',
        component: moniteurs,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/add_moniteurs',
        name: 'addMoniteur',
        component: addMoniteur,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/centres',
        name: 'centres',
        component: centres,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/add_centre',
        name: 'addCentre',
        component: addCentre,
        meta: {
            requiresAuth: true,
            
        }
    },
    {
        path: '/admin/login', 
        name: 'Login',
        component: login,
        meta: {
            requiresAuth: false,
            
        }
    },
    {
        path: '/admin/register',
        name: 'Register',
        component: register,
        meta: {
            requiresAuth: false,
            
        }
    },
   
]

const router = createRouter({
    history: createWebHistory(),
    routes,

})

router.beforeEach((to,from) =>{
    if(to.meta.requiresAuth && !localStorage.getItem('token')){
        return { name: 'Login' }
    }

    if(to.meta.requiresAuth == false && localStorage.getItem('token')){
        return { name: 'Section' }
    }
})

export default router
