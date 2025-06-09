import { createI18n } from 'vue-i18n';
import fr from './locales/fr.json';
import en from './locales/en.json';

const i18n = createI18n({
    legacy: false,
    locale: 'fr', // langue par défaut
    fallbackLocale: 'en', // langue de repli
    messages: {
        fr,
        en
    }
});

export default i18n;
