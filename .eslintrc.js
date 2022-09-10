module.exports = {
    rules: {
        "no-console": process.env.NODE_ENV === "production" ? "warn" : "off",
        "no-debugger": process.env.NODE_ENV === "production" ? "warn" : "off",
        "prettier/prettier": "error",
        "arrow-body-style": "off",
        "prefer-arrow-callback": "off",
        "comma-dangle": ["error", "only-multiline"],
    },

    root: true,

    env: {
        node: true,
    },

    extends: [
        "eslint:recommended",
        "plugin:vue/vue3-recommended",
        "plugin:prettier/recommended",
        "prettier",
    ],

    plugins: ["prettier"],

    parserOptions: {
        ecmaVersion: 2020,
    },
};
