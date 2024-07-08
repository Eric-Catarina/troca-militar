import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    build: {
        outDir: 'public/build',  // Adicione esta linha para garantir que o output seja no diretório correto
        rollupOptions: {
            input: 'resources/js/app.js',
        },
    },
    esbuild: {
        target: "es2022",
    },
    optimizeDeps: {
        esbuildOptions: {
            target: "es2022",
        },
    },
});
