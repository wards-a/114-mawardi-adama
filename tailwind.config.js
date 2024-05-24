/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    fontFamily: {
      sans: ['Open Sans', 'Arial', 'serif'],
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

