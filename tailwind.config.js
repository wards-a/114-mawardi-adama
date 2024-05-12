/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Open Sans', 'Arial', 'sans-serif'],
      },
      colors: {
        'custom-purple': '#7e3bcf',
        'facebook-blue': '#3b5998',
        'instagram-pink': '#ea2c59',
        'youtube-red': '#a82400 ',
        'whatsapp-green': '#25D366',
        'mail-blue': '#0056b3',
      },
    },
  },
  plugins: [],
}

