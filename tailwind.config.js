module.exports = {
    purge: {
        content: ['./resources/views/**/*.blade.php', './resources/js/**/*.vue', './resources/js/**/*.js'],
        options: {},
    },
    theme: {
        extend: {
        },
    },
    variants: {},
    plugins: [require('@tailwindcss/ui')],
};