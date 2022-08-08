/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors:{
        "red":"#dc2626",
        "white":"#f8fafc",
        "gray":"#6b7280",
        "blue":"#2563eb",
        "teal":"#0d9488",
        "teal100":"#ccfbf1",
        "teal300":"#5eead4",
        "teal600":"#0d9488",
        "cyan":"#22d3ee",
        "black":"#171717",
        "gray200":"#f1f5f9",
        "gray300":"#e5e7eb",
        "gray400":"#374151",
        "blue1":"#0284c7",
        "blue2":"#e0f2fe",
        "blue3":"#1e3a8a",
        "orange1":"#fb923c",
        "orange2":"#fdba74",
        "orange3":"#ea580c"
      },

      fontFamily:{
        Poppins:["Popppins, sans-serif"],
        Readex:["Readex"]
      },

      container:{
        center:true,
        padding:"1rem",
        screens:{
          lg: "1124px",
          xl: "1124px",
          "2xl": "1124px"
        }
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
