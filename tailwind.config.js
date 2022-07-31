/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}"],
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
