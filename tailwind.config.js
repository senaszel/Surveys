const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
        },
        extend: {
            colors: {
                brightRed: "hsl(12, 88%, 59%)",
                brightRedLight: "hsl(12, 88%, 69%)",
                brightRedSupLight: "hsl(12, 88%, 95%)",
                darkBlue: "hsl(228, 39%, 23%)",
                darkGrayishBlue: "hsl(227, 12%, 13%)",
                veryDarkBlue: "hsl(233, 12%, 13%)",
                veryPaleRed: "hsl(13, 100%, 96%)",
                veryLightGray: "hsl(0, 0%, 98%)",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
