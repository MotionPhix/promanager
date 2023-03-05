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

  include: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/protonemedia/laravel-splade/lib/**/*.vue',
    './vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],
})
