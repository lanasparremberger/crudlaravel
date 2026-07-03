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
        colors: {
            blush: '#FFF3F6',
            petal: '#FFD3E1',
            rose: '#EC5A93',
            wine: '#7A1F44',
            plum: '#5C1638',
            gold: '#D8A863',
        },
        fontFamily: {
            display: ['Fraunces', 'serif'],
            body: ['Inter', 'sans-serif'],
        },
        boxShadow: {
            soft: '0 20px 45px -20px rgba(122,31,68,0.35)',
        },
    },
},

    plugins: [forms],
};
