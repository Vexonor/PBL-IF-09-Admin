/** @type {import('tailwindcss').Config} */
export default {
    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
                  colors: {
                    "Genoa" : "#368666",
                    "Aquamarine" : "#B5FFCE",
                    "Medium-Carmine" : "#B6333C",
            },
        fontFamily: {
                poppins: ["Poppins", "mono"],
            },
    },
  },
  plugins: [
     require('preline/plugin'),
  ],
}

