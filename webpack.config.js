module.exports = {
  resolve: {
      extensions: ['.js', '.jsx', '.scss', '.css'],
  },
  module: {
      rules: [
          {
              test: /\.js$/,
              exclude: /(node_modules)/,
              use: {
                  loader: 'babel-loader',
                  options: {
                      presets: ['@babel/preset-env'],
                  },
              },
          },
          {
              test: /\.scss$/,
              use: [
                  'style-loader',
                  'css-loader',
                  'sass-loader'
              ],
          },
      ],
  },
  output: {
      filename: 'js/app.js',
  },
  experiments: {
      outputModule: true // Для поддержки модульного выхода
  }
};
