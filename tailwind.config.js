/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'ghostwhite': '#f8f8ff',
        'card-color': '#e2f0fb'
      },
      textColor: {
        'card-font-color': '#385d7a',
      },
    },
  },
  plugins: [],
}