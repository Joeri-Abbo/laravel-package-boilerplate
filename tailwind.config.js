module.exports = {
    content: [
        "./resources/views/*.{html,php,js}",
        "./resources/views/pages/*.{html,php,js}",
        "./resources/views/components/*.{html,php,js}",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
}