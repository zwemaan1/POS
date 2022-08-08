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
        },
        table:{
          100: '#75C6F7',
        }
      }
    },
    screens: {
      'tablet': '640px',
      // => @media (min-width: 640px) { ... }

      'laptop': '1024px',
      // => @media (min-width: 1024px) { ... }

      'desktop': '1280px',
      // => @media (min-width: 1280px) { ... }
    },
  },
  plugins: [],
}
