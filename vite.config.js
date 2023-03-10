import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

// import WindiCSS from 'vite-plugin-windicss'
// import Unocss from 'unocss/vite'

export default defineConfig({
  plugins: [
    laravel({
      input: 'resources/js/app.js',
      ssr: 'resources/js/ssr.js',
      refresh: true,
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false,
        },
      },
    }),
    // WindiCSS(),
    // Unocss(),
  ],
  ssr: {
    noExternal: ['vue', '@protonemedia/laravel-splade'],
  },
})
