import { createApp } from 'vue';
import app from './components/app.vue';
import router from './router/index';
import { createPinia } from 'pinia'

// import { createI18n } from 'vue-i18n';
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/dist/sweetalert2.css'

window.Swal = Swal
const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timeProgressBar: true,
})

window.toast = toast


// const i18n = createI18n({
//   locale: 'fr',
//   messages: {
//     en: require('./locales/en.json'),
//     fr: require('./locales/fr.json'),
//   },
// });

const pinia = createPinia()
createApp(app).use(pinia).use(router).mount('#app')

//export { i18n };

