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
        secondary:{
          100: '#E2E2D5',
          200: '#33B2FF',
        },
        bluePOS:{
          100: '#086788',
          200: '#06AED5',
        },
        bgPOS:{
          100: '#F2F4F3',
        }
      }
    },
  },
  plugins: [],
}
