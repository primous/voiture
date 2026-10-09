import fs from 'fs';

// A clean 120x36 placeholder PNG or SVG
const svg = `<svg xmlns="http://www.w3.org/2000/svg" width="160" height="40" viewBox="0 0 160 40">
  <rect x="0" y="8" width="8" height="24" rx="4" fill="#FF0000" />
  <text x="18" y="27" font-family="Montserrat, Arial, sans-serif" font-weight="900" font-size="20" fill="#000000" letter-spacing="1">AUTO</text>
  <text x="82" y="27" font-family="Montserrat, Arial, sans-serif" font-weight="900" font-size="20" fill="#FF0000" letter-spacing="1">EXPERT</text>
</svg>`;

// Also write a valid base64 PNG fallback
const pngBase64 = "iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoCAYAAABgSOfnAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABCSURBVHhe7cExAQAAAMKg9U9tDQ8gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4GYw7QAB5tVn7wAAAABJRU5ErkJggg==";

fs.writeFileSync('public/logo.svg', svg);
fs.writeFileSync('public/logo.png', Buffer.from(pngBase64, 'base64'));
console.log('Logo created');
