import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/css/styles.css',  // Include custom CSS
                'public/css/support.css', // Include custom CSS
            ],
            refresh: true,
        }),
    ],
});
