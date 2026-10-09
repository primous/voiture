/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./routes/**/*.php",
    "./app/**/*.php",
    "./index.html",
  ],
  theme: {
    extend: {
      colors: {
        reinex: {
          white: '#FFFFFF',
          black: '#000000',
          red: '#FF0000',
          'red-hover': '#CC0000',
          'red-light': '#FFE5E5',
          gray: '#F5F5F5',
          border: '#E5E5E0',
          secondary: '#6B6B6B',
        },
      },
      fontFamily: {
        sans: ['Montserrat', 'system-ui', 'sans-serif'],
        heading: ['Inter', 'system-ui', 'sans-serif'],
        inter: ['Inter', 'sans-serif'],
        montserrat: ['Montserrat', 'sans-serif'],
      },
      fontSize: {
        '12': ['12px', { lineHeight: '1.6' }],
        '14': ['14px', { lineHeight: '1.6' }],
        '16': ['16px', { lineHeight: '1.6' }],
        '18': ['18px', { lineHeight: '1.6' }],
        '20': ['20px', { lineHeight: '1.4' }],
        '24': ['24px', { lineHeight: '1.2' }],
        '30': ['30px', { lineHeight: '1.1', letterSpacing: '-0.02em' }],
        '36': ['36px', { lineHeight: '1.1', letterSpacing: '-0.02em' }],
        '48': ['48px', { lineHeight: '1.1', letterSpacing: '-0.02em' }],
        '60': ['60px', { lineHeight: '1.1', letterSpacing: '-0.02em' }],
      },
      borderRadius: {
        badge: '12px',
        card: '20px',
        pill: '999px',
      },
      boxShadow: {
        wayi: '0 2px 8px rgba(0, 0, 0, 0.06), 0 8px 24px rgba(0, 0, 0, 0.08)',
        'wayi-cta': '0 8px 24px rgba(255, 0, 0, 0.15)',
      },
      maxWidth: {
        wayi: '1140px',
      },
    },
  },
  plugins: [],
}
