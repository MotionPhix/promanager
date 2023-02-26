import './bootstrap'
import { install } from '@twind/core'
import '@protonemedia/laravel-splade/dist/style.css'

import 'vfonts/FiraSans.css'
import { Icon } from '@vicons/utils'

import UserAccess from '@vicons/carbon/UserAccess'

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
    components: {
      ArrowRightIcon,
      PlusIcon,
      CheckIcon,
      UserIcon,
      InboxIcon,
      Icon,
      UserAccess,
      UserPlusIcon,
      DeadlineIcon,
    },
  })
  .mount(el)
