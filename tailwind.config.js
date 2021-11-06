const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: {
        enabled: true,
        content: ['./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php']
    },

    theme: {
        extend: {
            transitionProperty: {
             'height': 'height',
             'top': 'top',
             'spacing': 'margin, padding',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand-gray': {
                    light: '#4C546A',
                    DEFAULT: '#02010d',
                    dark: '#111827'
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
            display: ["group-hover"],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
