import './bootstrap';
import { createApp } from 'vue'
// import { createPinia } from 'pinia'
import app from './components/app.vue'
import router from './router/index'
import { VueReCaptcha, useReCaptcha } from 'vue-recaptcha-v3'


// import Swal from 'sweetalert2/dist/sweetalert2.js'
// import 'sweetalert2/dist/sweetalert2.css'

// window.Swal = Swal
// const toast = Swal.mixin({
//     toast: true,
//     position: 'top-end',
//     showConfirmButton: false,
//     timer: 3000,
//     timeProgressBar: true,
// })

// window.toast = toast
// const pinia = createPinia()

// createApp(app).use(pinia).use(router).mount('#app')

createApp(app).use(router).use(VueReCaptcha, { siteKey: '6Lfb4nEoAAAAAAmseDFBsgYz1f1ugTj5jP7dQhV3' })
.mount('#app')
