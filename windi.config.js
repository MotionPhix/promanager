import { defineConfig } from 'windicss/helpers'

// @ts-check - enable TS check for js file
export default defineConfig({
  // attributify: true,

  darkMode: 'class',

  extract: {
    include: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './vendor/protonemedia/laravel-splade/lib/**/*.vue',
      './vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
      './resources/js/**/*.vue',
    ],
    exclude: ['node_modules/**/*', '.git'],
  },

  alias: {
    'hstack': 'flex items-center',
    'vstack': 'flex flex-col',
    'icon': 'w-6 h-6 fill-current',
    'app': 'text-red',
    'app-border': 'border-gray-200 dark:border-dark-300',
  },

  presets: [],

  theme: {
    fontFamily: {
      sans: 'v-sans',
    },
    // extend: {
    //   screens: {
    //     'sm': '640px',
    //     'md': '768px',
    //     'lg': '1024px',
    //     'xl': '1280px',
    //     '2xl': '1536px',
    //   },

    //   colors: {
    //     blue: colors.sky,
    //     red: colors.rose,
    //     pink: colors.fuchsia,
    //   },

    //   spacing: {
    //     128: '32rem',
    //     144: '36rem',
    //   },

    //   borderRadius: {
    //     '4xl': '2rem',
    //   },
    // },
  },

  shortcuts: {
    'btn': 'outline outline-1 flex items-center gap-2 rounded font-semibold px-1.5 py-0.5 transition-all duration-300',
    'btn-primary': 'outline-gray-800 bg-gray-800 text-gray-300 dark:(text-gray-400 bg-gray-600 outline-gray-600) hover:(dark:text-gray-500 bg-gray-500 outline-gray-500 text-gray-300)',
    'btn-outline': 'outline-gray-600 dark:outline-gray-400 hover:(dark:(outline-gray-400 text-gray-400) outline-gray-500 text-gray-500)',

    'explainer': 'text-xs text-gray-400',
  },

  plugins: [
    // plugin(({ addUtilities }) => {
    //   const newUtilities = {
    //     '.skew-10deg': {
    //       transform: 'skewY(-10deg)',
    //     },
    //     '.skew-15deg': {
    //       transform: 'skewY(-15deg)',
    //     },
    //   }
    //   addUtilities(newUtilities)
    // }),
    // plugin(({ addComponents }) => {
    //   const buttons = {
    //     '.btn': {
    //       padding: '.5rem 1rem',
    //       borderRadius: '.25rem',
    //       fontWeight: '600',
    //     },
    //     '.btn-blue': {
    //       'backgroundColor': '#3490dc',
    //       'color': '#fff',
    //       '&:hover': {
    //         backgroundColor: '#2779bd',
    //       },
    //     },
    //     '.btn-red': {
    //       'backgroundColor': '#e3342f',
    //       'color': '#fff',
    //       '&:hover': {
    //         backgroundColor: '#cc1f1a',
    //       },
    //     },
    //   }
    //   addComponents(buttons)
    // }),
    // plugin(({ addDynamic, variants }) => {
    //   addDynamic('skew', ({ Utility, Style }) => {
    //     return Utility.handler
    //       .handleStatic(Style('skew'))
    //       .handleNumber(0, 360, 'int', number => `skewY(-${number}deg)`)
    //       .createProperty('transform')
    //   }, variants('skew'))
    // }),
    require('windicss/plugin/filters'),
    require('windicss/plugin/forms'),
    require('windicss/plugin/aspect-ratio'),
    require('windicss/plugin/line-clamp'),
    require('windicss/plugin/typography')({
      modifiers: ['DEFAULT', 'sm', 'lg', 'red'],
    }),
  ],
})
