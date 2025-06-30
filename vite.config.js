import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css',
                'resources/css/home.css', 'resources/css/profile.css', 'resources/css/dashboard.css',
                'resources/css/faq.css', 'resources/css/blog.css'],
            refresh: true,
        }),
    ],
});
