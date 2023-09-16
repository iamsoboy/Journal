const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        container: {
            center: true,
            padding: '20px'
        },
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
                //primary: '#3b3958',
                secondary: {
                    DEFAULT: '#00fff0',
                    500: '#00e4d7'
                },
                accent: {
                    DEFAULT: '#1a34f5',
                },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                'text-slide': {
                    '0%, 44%': {
                        transform: 'translateY(0%)',
                    },
                    '55%, 99%': {
                        transform: 'translateY(-25%)',
                    },
                    '100%': {
                        transform: 'translateY(-50%)',
                    },
                },
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
};
