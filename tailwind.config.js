/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./main/*.php"],
  theme: {
    extend: {

        fontFamily: {
          heading: 'Ubuntu, sans-serif',
        },
        colors: {
            primary: "#edeef3",
            secondary: "#040406",
            third : "#FDD835",
            extra: "#6069f0",
            lightblack: "#464242",
            header: "#23232e",
          
        },
      
  
      
    },
  },
  plugins: [],
}

