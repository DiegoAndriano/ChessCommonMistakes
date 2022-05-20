const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            red: colors.red,
            blue: colors.blue,
            yellow: colors.yellow,
            gray: colors.gray,
            green: colors.green,
            black: '#222',
            white: '#fff',
            primary: {
                500: '#CC3B45',
            },
            analogue: {
                500: '#334155',
            }
        },
        extend: {
            screens: {
                'xs': '500px'
            },
            transitionProperty: {
                DEFAULT: 'padding, box-shadow,background-color, border-color, color, fill, stroke, opacity, transform',
                'spacing': 'padding',
            },
            fontFamily: {
                sans: ['Josefin Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants:  {
        placeholderColor: ['hover', 'focus', 'responsive'],
        padding: ['hover', 'focus', 'responsive'],
        cursor: ['hover', 'focus', 'responsive'],
    },
    plugins: [],
}
