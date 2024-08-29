/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                body: [
                    "Inter",
                    "ui-sans-serif",
                    "system-ui",
                    "-apple-system",
                    "system-ui",
                    "Segoe UI",
                    "Roboto",
                    "Helvetica Neue",
                    "Arial",
                    "Noto Sans",
                    "sans-serif",
                    "Apple Color Emoji",
                    "Segoe UI Emoji",
                    "Segoe UI Symbol",
                    "Noto Color Emoji",
                ],
                sans: [
                    "Inter var",
                    ...defaultTheme.fontFamily.sans,
                    "ui-sans-serif",
                    "system-ui",
                    "-apple-system",
                    "system-ui",
                    "Segoe UI",
                    "Roboto",
                    "Helvetica Neue",
                    "Arial",
                    "Noto Sans",
                    "sans-serif",
                    "Apple Color Emoji",
                    "Segoe UI Emoji",
                    "Segoe UI Symbol",
                    "Noto Color Emoji",
                ],
            },
            colors: {
                primary: {
                    50: "#eff6ff",
                    100: "#dbeafe",
                    200: "#bfdbfe",
                    300: "#93c5fd",
                    400: "#60a5fa",
                    500: "#3b82f6",
                    600: "#2563eb",
                    700: "#1d4ed8",
                    800: "#1e40af",
                    900: "#1e3a8a",
                    950: "#172554",
                },
                colors: {
                    magenta: "#ff00ff",
                    cyan: "#00ffff",
                    yellow: "#ffff00",
                },
                "big-stone": {
                    50: "#f5f7fa",
                    100: "#eaeef4",
                    200: "#d0dbe7",
                    300: "#a6bcd3",
                    400: "#7799b9",
                    500: "#557ca2",
                    600: "#426287",
                    700: "#37506d",
                    800: "#30455c",
                    900: "#2c3c4e",
                    950: "#1f2937",
                },
            },
        },
        // variants: {
        //     extend: {
        //         scale: ['hover', 'focus'],
        //     },
        // },
    },
    plugins: [require("flowbite/plugin"), require("flowbite-typography")],
    safelist: [],
};
