/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    content: [],
    theme: {
        container: {
            center: true,
            padding: "1rem",
        },
        extend: {
            fontFamily: {
                serif: ["RobotoSlab", ...defaultTheme.fontFamily.serif],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
