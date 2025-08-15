import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: {
            host: '192.168.1.8', //this will add if you run sa npm run dev in your system
        },
    },

    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
