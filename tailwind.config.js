/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./app/Http/Livewire/**/*.php",
      "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/typography'),
  ],
}
