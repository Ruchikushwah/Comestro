import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
  build: {
    outDir: 'public/build', // Ensure this matches your desired path
    manifest: true,
  },
  base:'/build/',


});
