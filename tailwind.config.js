// tailwind.config.js
const colors = require("tailwindcss/colors");
module.exports = {
    purge: [],

    purge: [
        "./resources/**/*.blade.php",

        "./resources/**/*.js",

        "./resources/**/*.vue"
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px"
        },

        fontFamily: {
            sans: ["Graphik", "sans-serif"],
            serif: ["Merriweather", "serif"]
        },
        extend: {
            colors: {
                amarillo: "#fff059",
                gray: colors.coolGray,
                blue: colors.lightBlue,
                red: colors.rose,
                pink: colors.fuchsia,
                gris: "#ebebeb",
                blue: "#1259c3"
            },
            spacing: {
                "128": "32rem",
                "144": "36rem"
            },
            borderRadius: {
                "4xl": "2rem"
            }
        }
    },
    variants: {
        extend: {}
    },
    plugins: []
};
