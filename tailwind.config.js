import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require("./vendor/wireui/wireui/tailwind.config.js")
    ],
    content: [
        './vendor/xbigdaddyx/falcon/resources/views/**/*.blade.php',
        './packages/xbigdaddyx/falcon/resources/views/**/*.blade.php',
        './vendor/awcodes/palette/resources/views/**/*.blade.php',
        './vendor/masmerise/livewire-toaster/resources/views/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        "./vendor/wireui/wireui/src/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/Components/**/*.php",
    ],
    daisyui: {
        themes: [
            {
                beverly: {
                    primary: '#f9b218',
                    secondary: '#306e6d',
                    accent: '#c8e0ca',
                    neutral: '#272727',
                    'base-100': '#ffffff',
                },
            }
        ],
        darkTheme: "dark",
        base: true,
        styled: true,
        utils: true,
        themeRoot: ":root"
    },
    theme: {
        extend: {
            colors: {

                primary: {
                    '50': '#fffaeb',
                    '100': '#fef1c7',
                    '200': '#fce18b',
                    '300': '#fbcc4e',
                    '400': '#f9b218',
                    '500': '#f3960d',
                    '600': '#d76f08',
                    '700': '#b34d0a',
                    '800': '#913b0f',
                    '900': '#773110',
                    '950': '#441804',
                },
                secondary: {
                    50: '#B3C1D8',
                    100: '#A5B6D1',
                    200: '#8AA0C4',
                    300: '#6F8AB6',
                    400: '#5574A7',
                    500: '#47618C',
                    600: '#3A4F71',
                    700: '#2C3C56',
                    800: '#1E293B',
                    900: '#0B0F16',
                    950: '#020203'
                },
                positive: {
                    '50': '#f4f9f5',
                    '100': '#e6f2e7',
                    '200': '#c8e0ca',
                    '300': '#a8cdab',
                    '400': '#7aae7f',
                    '500': '#57905d',
                    '600': '#447549',
                    '700': '#385d3c',
                    '800': '#304b33',
                    '900': '#283f2b',
                    '950': '#122114',
                },
                negative: colors.red,
                warning: colors.amber,
                info: colors.blue
            },
        },
    },

    plugins: [require('daisyui'), typography],
    darkMode: ['class'],
    // darkMode: ['selector', '[data-mode=”dark”]']
};
