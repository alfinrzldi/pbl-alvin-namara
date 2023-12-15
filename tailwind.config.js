/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.php" ,"./node_modules/flowbite/**/*.js", "./**/*.{html,js,php}" ], 
  theme: {
    extend: {
      poppins :["Poppins"],
      animation: {
        marquee: 'marquee 10s linear infinite',
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(-200%)' },
        },
      },
    },
    colors: {
        clifford: "#da373d",
        pinknamara: "#fcc4ac",
        headline: "#00473e",
        buttontext: "#00473e",
        button: "#faae2b",
        secondary: "#ffa8ba",
      },
      
  },
  
  plugins: [require('flowbite/plugin')]
};

