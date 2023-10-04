import { createApp } from 'vue';
import app from './components/app.vue';
import router from './router/index';
import { createI18n } from 'vue-i18n';

const i18n = createI18n({
  locale: 'fr',
  messages: {
    en: require('./locales/en.json'),
    fr: require('./locales/fr.json'),
  },
});

const vueApp = createApp(app);
vueApp.use(router).use(i18n).mount('#app');

export { i18n }; // Exportez l'instance i18n
