/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
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

