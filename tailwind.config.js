const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand-gray': {
                    light: '#4C546A',
                    DEFAULT: '#232834',
                    dark: '#1C212B'
                },
                'brand-pink': {
                    light: '#ff4d93',
                    DEFAULT: '#FA0062',
                    dark: '#a50041',
                },
            },
            minHeight: (theme) => ({
              ...theme('spacing'),
            }),
            maxHeight: (theme) => ({
              ...theme('spacing'),
            }),
            minWidth: (theme) => ({
              ...theme('spacing'),
            }),
            maxWidth: (theme) => ({
              ...theme('spacing'),
            }),
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            backgroundColor: ['active'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
