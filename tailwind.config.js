/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        custom: {
          lightGray: '#F0F0F0',
          darkBlue: '#213555',
          blueGray: '#4F709C',
          gold: '#E5D283',
        }
      }
    },
  },
  plugins: [],
}