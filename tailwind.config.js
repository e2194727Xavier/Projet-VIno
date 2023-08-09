/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  theme: {
    screens: {
      'xxs': '320px',
      // => @media (min-width: 320px) { ... }
      'xs': '500px'
    },
    extend: {
     
      colors: {
        'dark-red': '#251322',
        'red-wine': '#9B0738',
        'pale-pink': '#FB7F6',
        'gold': '#927A50',
      },
      maxWidth:{
        '80': '80px',
        '100': '100px',
        '150': '150px',
        '200': '200px'
      },
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
        'montserrat': ['Montserrat', 'sans-serif']
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}


