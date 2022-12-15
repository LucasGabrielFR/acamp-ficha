import { createApp } from 'vue'
import App from './App.vue'
import { plugin, defaultConfig } from '@formkit/vue'
import { pt } from '@formkit/i18n'
import '@formkit/themes/genesis'

createApp(App).use(plugin, defaultConfig({
    // Define additional locales
    locales: { pt },
    // Define the active locale
    locale: 'pt',
  })).mount('#app')