/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/protonemedia/laravel-splade/lib/**/*.vue',
    './vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],

  darkMode: 'class',

  theme: {
    fontFamily: {
      sans: 'v-sans',
    },

    extend: {
      colors: {
        primary: {
          DEFAULT: '#3C8DBC',
          dark: '#2C3E50',
        },
        secondary: {
          DEFAULT: '#87D37C',
          dark: '#4B662E',
        },
        neutral: {
          DEFAULT: '#ECECEC',
          dark: '#2C2C2C',
        },
        accent: {
          DEFAULT: '#F9690E',
          dark: '#8C5A2C',
        },
        success: {
          DEFAULT: '#4CAF50',
          dark: '#1B5E20',
        },
        warning: {
          DEFAULT: '#FFC107',
          dark: '#FFA000',
        },
        error: {
          DEFAULT: '#F44336',
          dark: '#B71C1C',
        },
        info: {
          DEFAULT: '#2196F3',
          dark: '#0D47A1',
        },
      },
    },
  },

  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}
