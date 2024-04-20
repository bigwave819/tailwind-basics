const colors = require('tailwindcss/colors');
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primary:'#ff6363',
        secondary : {
          100: '#E2E2D5',
          200: '#888883'
        },
        "cyan": colors.cyan,
        "teal": colors.teal
      }
    },
  },
  plugins: [],
}

