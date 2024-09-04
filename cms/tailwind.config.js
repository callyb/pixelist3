const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ], theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'blue': '#1C315E',
      'lightBlue': '#9db9f5',
      'green': '#227C70',
      'lightGreen': '#44ebd4',
      'sage': '#88A47C',
      'lightSage': '#c3ebb2',
      'cream': '#E6E2C3',
      'gray': 'gray',
      'white': 'white',
      'black': 'black',
      'red': 'red',
      'pale': '#f7f3e9'

    },
    screens: {
      'xxsm': '100px',
      'xsm': '320px',
      'xs': '475px',
      ...defaultTheme.screens,
    },
    extend: {
      spacing: {
        '11': '6rem',
        '13': '10rem',
        '15': '11rem',
      },
      lineHeight: {
        'extra-loose': '2.5',
        '12': '5rem',
      }
    },

  },
  plugins: [],
}
