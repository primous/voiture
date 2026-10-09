import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

// Configuration Vite pour le frontend Alpine.js & Tailwind CSS
export default defineConfig({
  plugins: [
    tailwindcss(),
  ],
  server: {
    port: 5173,
    open: false,
  }
})
