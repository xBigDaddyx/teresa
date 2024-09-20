import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/Portal/**/*.php',
        './resources/views/filament/portal/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
