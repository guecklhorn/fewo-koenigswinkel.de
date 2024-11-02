/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
    content: [],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: '#ffffff',
            black: '#030712',
            gray: '#9ca3af',
            muted: '#e5e7eb',
            highlight: '#053577',
        },
        container: {
            center: true,
            padding: '1rem',
        },
        extend: {
            fontFamily: {
                serif: ['RobotoSlab', ...defaultTheme.fontFamily.serif],
            },
        },
    },
    plugins: [require('@tailwindcss/typography')],
}
