/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      keyframes: {
        fadeInBounce: {
          '0%': { opacity: 0, transform: 'translateY(30px) scale(0.95)' },
          '60%': { opacity: 1, transform: 'translateY(-5px) scale(1.02)' },
          '100%': { opacity: 1, transform: 'translateY(0) scale(1)' },
        },
      },
      animation: {
        fadeInBounce: 'fadeInBounce 0.8s ease-out forwards',
      },
    },
  },
  plugins: [],
}
