/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
    "./node_modules/flowbite/**/*.js" // set up the path to the flowbite package

  ],
  theme: {
      extend: {
        animation: {
          'infinite-scroll': 'infinite-scroll 25s linear infinite',
        },
        keyframes: {
          'infinite-scroll': {
            from: { transform: 'translateX(0)' },
            to: { transform: 'translateX(-100%)' },
          }
        }                    
      },
      colors:{
        'em-green': '#04444D',
        'em-greenest': '#04BA70',
        'em-pink': '#FF60A4',
        'em-blue': '#00C2FF',
        'em-violet': '#CC60FF',
        'em-yellow': '#FDC727',
        'em-white': '#FFF6DD',
      },
      fontFamily : {
        'agrandir-normal' : ['Agrandir Regular'],
        'agrandir-bold' : ['Agrandir Bold'],
        'agrandir-light' : ['Agrandir Light'],
        'agrandir-black' : ['Agrandir Heavy'],
        'virgilgs' : ['virgilgs']
      },
  },
  plugins: [
    //require('flowbite/plugin'),  add the flowbite plugin
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],    
}

