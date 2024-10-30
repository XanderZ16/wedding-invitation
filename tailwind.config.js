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
            'fraunces': ['Fraunces', 'serif'],
            'montecarlo': ['MonteCarlo', 'serif'],
            'jost': ['Jost', 'sans-serif'],
        }
      },
    },
    plugins: [],
  }
