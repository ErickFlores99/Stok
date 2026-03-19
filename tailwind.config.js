import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            // 🔤 Tipografía base
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {

                // 🔵 COLOR PRINCIPAL (botones, links, branding)
                primary: {
                    50:  '#eef6ff', // hover light backgrounds
                    100: '#d9eaff',
                    200: '#bcd9ff',
                    300: '#8fc2ff',
                    400: '#5aa3ff',
                    500: '#2f7df6', // ✅ BOTONES PRINCIPALES
                    600: '#1f5fd1', // hover botones
                    700: '#1749a6',
                    800: '#143d85',
                    900: '#12356e',
                },

                // ⚫ SECUNDARIO (textos, títulos, UI elegante)
                secondary: {
                    50:  '#f4f7fb',
                    100: '#e6ecf5',
                    200: '#cfd9e8',
                    300: '#aabbd6',
                    400: '#7f99c0',
                    500: '#5c7daa', // texto secundario
                    600: '#48648c',
                    700: '#3a506f',
                    800: '#32445c',
                    900: '#2c3b4f', // ✅ TÍTULOS
                },

                // 🟢 SUCCESS (entradas, positivo)
                success: {
                    500: '#22c55e', // ✅ ENTRADAS / OK
                },

                // 🔴 DANGER (salidas, errores)
                danger: {
                    500: '#ef4444', // ✅ SALIDAS / ERROR
                },

                // 🟡 WARNING (stock bajo, alertas)
                warning: {
                    500: '#f59e0b', // ✅ ALERTAS
                },

                // 🎨 FONDOS GENERALES
                background: {
                    DEFAULT: '#f5f7fb', // fondo app
                    dark: '#eef2f7'     // secciones alternas
                },

                // 🧾 TARJETAS (cards)
                card: {
                    DEFAULT: '#ffffff', // fondo card
                    muted: '#f9fafb'    // cards suaves
                },

                // ⚙️ UTILIDADES EXTRA (muy recomendadas)
                border: '#e5e7eb', // bordes suaves
                muted: '#6b7280',  // texto gris
            }
        },
    },

    plugins: [forms],
};