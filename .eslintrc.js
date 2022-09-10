module.exports = {
    env: {
        "vue/setup-compiler-macros": true,
    },
    rules: {
        "no-console": process.env.NODE_ENV === "production" ? "warn" : "off",
        "no-debugger": process.env.NODE_ENV === "production" ? "warn" : "off",
        "prettier/prettier": "error",
        "arrow-body-style": "off",
        "prefer-arrow-callback": "off",
        "no-unused-vars": "off",
        "@typescript-eslint/no-unused-vars": [
            "warn",
            {
                argsIgnorePattern: "^_",
                varsIgnorePattern: "^_|^props$|^emit$",
                caughtErrorsIgnorePattern: "^_",
            },
        ],
        // "comma-dangle": ["error", "only-multiline"],
    },

    root: true,

    env: {
        "vue/setup-compiler-macros": true,
        browser: true,
        node: true,
    },

    extends: [
        "plugin:vue/vue3-recommended",
        "@vue/typescript/recommended",
        "@vue/eslint-config-typescript",
        "@vue/eslint-config-prettier",
    ],

    plugins: ["prettier", "vue", "@typescript-eslint", "html"],

    parserOptions: {
        ecmaVersion: 2020,
    },
};
