// languageStore.js
import { ref, computed } from 'vue';

const selectedLanguage = ref('en'); // Par défaut, la langue est en anglais

function setLanguage(newLanguage) {
    selectedLanguage.value = newLanguage;
}

export { selectedLanguage, setLanguage };
