/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php",'./template/*.php','node_modules/preline/dist/*.js',],
    theme: {
    extend: {},
  },
  plugins: [
    // require('@tailwindcss/forms'),
      require('preline/plugin'),
  ],
}

