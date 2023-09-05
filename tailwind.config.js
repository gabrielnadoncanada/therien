import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './config/blade-components.php',
    ],
    plugins: [forms],
    theme: {
        screens: {
            xs: "490px",
            sm: "640px",
            md: "782px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1500px",
        },
        fontSize: {
            xs: ['0.75rem', { lineHeight: '1rem' }],
            sm: ['0.875rem', { lineHeight: '1.5rem' }],
            base: ['1rem', { lineHeight: '1.75rem' }],
            lg: ['1.125rem', { lineHeight: '1.75rem' }],
            xl: ['1.25rem', { lineHeight: '2rem' }],
            '2xl': ['1.5rem', { lineHeight: '2.25rem' }],
            '3xl': ['1.75rem', { lineHeight: '2.25rem' }],
            '4xl': ['2rem', { lineHeight: '2.5rem' }],
            '5xl': ['2.5rem', { lineHeight: '3rem' }],
            '6xl': ['3rem', { lineHeight: '3.5rem' }],
            '7xl': ['4rem', { lineHeight: '4.5rem' }],
        },
        extend: {
            colors: {
                // 'base': '#ffffff',
                'primary': 'var(--primary)',
                // 'primary-dark': '#003266',
                // 'primary-darker': '#00264d',
                // 'primary-light': '#AAC9E9',
                'secondary': 'var(--secondary)',
                'accent': 'var(--accent)',
                'foreground': 'var(--foreground)',
                // 'foreground-gray': '#221f20',
                // 'foreground-light': '#222123',
                // 'danger': "#c02b0a"
            },
            borderRadius: {
                '4xl': '2.5rem',
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: [
                    ['Bricolage Grotesque', ...defaultTheme.fontFamily.sans],
                    { fontVariationSettings: '"wdth" 125' },
                ],
            },
        },
    },
};
