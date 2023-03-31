import './bootstrap'

// import 'virtual:windi.css'
import '../css/app.css'
// import '@unocss/reset/tailwind.css'
// import 'uno.css'

import '@protonemedia/laravel-splade/dist/style.css'

// import 'vfonts/FiraSans.css'
// import 'vfonts/Inter.css'
import 'vfonts/Roboto.css'
// import 'vfonts/RobotoSlab.css'
import 'vfonts/FiraCode.css'

import { createApp } from 'vue/dist/vue.esm-bundler.js'
import { SpladePlugin, renderSpladeApp } from '@protonemedia/laravel-splade'

import {
  ArrowRightIcon,
  ClipboardDocumentCheckIcon as CheckIcon,
  BookmarkSquareIcon as DeadlineIcon,
  InboxIcon,
  PlusIcon,
  UserIcon,
  UserPlusIcon,
} from '@heroicons/vue/20/solid'

import Alpine from 'alpinejs'
import ToggleDark from './components/toggle-dark.vue'

window.Alpine = Alpine

Alpine.start()

const el = document.getElementById('app')

createApp({
  render: renderSpladeApp({ el }),
})
  .use(SpladePlugin, {
    max_keep_alive: 10,
    transform_anchors: false,
    progress_bar: true,
    components: {
      ArrowRightIcon,
      PlusIcon,
      CheckIcon,
      InboxIcon,
      UserIcon,
      UserPlusIcon,
      DeadlineIcon,
      ToggleDark,
    },
  })
  .mount(el)
