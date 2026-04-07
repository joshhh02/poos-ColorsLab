const js = require("@eslint/js");
const globals = require("globals");

module.exports = [
  js.configs.recommended,
  {
    files: ["public/js/**/*.js"],
    languageOptions: {
      ecmaVersion: 2021,
      sourceType: "script",
      globals: {
        ...globals.browser,
        ...globals.node,
        md5: "readonly"
      }
    },
    rules: {
      "no-unused-vars": "off",
      "no-dupe-keys": "off"
    }
  }
];
