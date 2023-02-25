import { defineConfig } from '@twind/core'
import presetTailwind from '@twind/preset-tailwind'
import presetAutoprefix from '@twind/preset-autoprefix'
import presetTailwindForms from '@twind/preset-tailwind-forms'
import pressetContainerQueries from '@twind/preset-container-queries'

export default defineConfig({
  presets: [
    presetAutoprefix(),
    presetTailwind(),
    presetTailwindForms(),
    pressetContainerQueries(),
  ],

  darkMode: 'class',

  rules: [
    ['btn', 'bg-gray-800 text-gray-300 dark:text-gray-400 rounded font-semibold px-1.5 py-0.5 transition duration-300 dark:bg-gray-800 hover:(dark:text-gray-500 bg-gray-700)'],
  ],
})
