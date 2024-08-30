const defaultConfig = require('@wordpress/scripts/config/webpack.config.js');
const path = require('path');

module.exports = {
    ...defaultConfig,
    entry: {
        // Point to the main JS file in your assets folder
        main: path.resolve(__dirname, 'assets/js/index.js'),
    },
    output: {
        // Output the bundle to the build folder
        path: path.resolve(__dirname, 'build'),
        filename: 'bundle.js',
    },
    // Optional: You can add or override other settings as needed
};