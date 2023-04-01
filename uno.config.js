import { defineConfig, presetAttributify, presetIcons, presetUno } from 'unocss'
import transformerVariantGroup from '@unocss/transformer-variant-group'

export default defineConfig({
  presets: [
    presetAttributify(),
    presetIcons(),
    presetUno(),
  ],

  transformers: [
    transformerVariantGroup(),
  ],

  shortcuts: {
    'btn': 'outline outline-1 flex items-center gap-2 rounded font-semibold px-1.5 py-0.5 transition-all ease-in-out duration-300',
    'btn-primary': 'outline-gray-800 bg-gray-800 text-gray-300 dark:(text-gray-400 bg-gray-600 outline-gray-600) hover:(dark:text-gray-500 bg-gray-500 outline-gray-500 text-gray-300)',
    'btn-outline': 'outline-gray-600 dark:outline-gray-400 hover:(dark:(outline-gray-400 text-gray-400) outline-gray-500 text-gray-500)',
    'btn-lg': 'py-5 px-5 text-2xl',

    'explainer': 'text-xs text-gray-400',
  },
})
