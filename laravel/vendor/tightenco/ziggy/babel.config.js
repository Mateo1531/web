module.exports = {
    env: {
        test: {
            presets: ['power-assert'],
            plugins: ['@babel/plugin-transform-modules-commonjs'],
        },
    },
    plugins: [
        new webpack.ProvidePlugin({
          $: 'jquery',
          jQuery: 'jquery',
          'window.jQuery': 'jquery'
        }),
    ],
};
