const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Mona Sans', ...defaultTheme.fontFamily.sans],
                mono: ['Fira Code']
            },
            colors: {
                gray: colors.neutral,
                blue: {
                    50: '#E3EAF7',
                    100: '#D6E1FA',
                    200: '#C0D4FD',
                    300: '#95B9FB',
                    400: '#6F9CF8',
                    500: '#3E6DF3',
                    600: '#473FEB',
                    700: '#3226D4',
                    800: '#3423B3',
                    900: '#151133',
                },
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
