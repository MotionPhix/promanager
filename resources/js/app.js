import './bootstrap'
import { install } from '@twind/core'
import '@protonemedia/laravel-splade/dist/style.css'

import { createApp } from 'vue/dist/vue.esm-bundler.js'
import { SpladePlugin, renderSpladeApp } from '@protonemedia/laravel-splade'

import config from '../../twind.config'

const el = document.getElementById('app')

// activate twind - must be called at least once
install(config)

createApp({
  render: renderSpladeApp({ el }),
})
  .use(SpladePlugin, {
    max_keep_alive: 10,
    transform_anchors: false,
    progress_bar: true,
  })
  .mount(el)
