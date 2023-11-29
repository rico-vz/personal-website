/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: ["./src/**/*.{html,ts}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {},
  },
  fontFamily: {
    body: ["Inter", "ui-sans-serif", "system-ui", "-apple-system"],
    sans: ["Inter", "ui-sans-serif", "system-ui", "-apple-system"],
  },
  plugins: [
    require("flowbite/plugin"),
    require("@catppuccin/tailwindcss")({
      prefix: "cat",
      defaultFlavour: "macchiato",
    }),
  ],
};
