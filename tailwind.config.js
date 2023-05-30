/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      'primary':'#0A3E70',
      'Secondary-1':'#F79940',
      'Secondary-2':'#006DCB',
      'Text-color':'#006DCB',
      'Second-text-color':'#737373',
      'Stroke':'#E5E5E5',
      'Neutral-white':'#FAFAFA',
      'black' : '#000000',
      'red' : '#FF0000	',
    }
  },
  plugins: [],
}