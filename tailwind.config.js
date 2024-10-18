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
                    "Orange-Peel" : "#FF9900",
                    "Shalimar" : "FFF3AE",
                    "Flamingo" : "F15950",
                    "Beauty-Bush" : "EEB3B0",
                    "Brick-Red" : "#B5333D"
                    ,
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

