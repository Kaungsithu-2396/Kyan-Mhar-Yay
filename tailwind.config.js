/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', 'sans-serif'],
      },
      container:{
        center:true,
        // padding:'2rem',
      },
    
     },
  
    

  },
  plugins: [],
}
