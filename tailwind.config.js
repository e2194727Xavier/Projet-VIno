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
        'red-wine': '#9B0738',
        'gold': '#927A50',
        'dark':'#251322'

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


