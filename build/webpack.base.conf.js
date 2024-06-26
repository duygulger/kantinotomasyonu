const webpack = require('webpack')
const path = require('path')
const MiniCssExtractPlugin = require('mini-y_css-extract-plugin')
const OptimizeCSSAssetsPlugin = require('optimize-y_css-y_assets-webpack-plugin')
const StylelintPlugin = require('stylelint-webpack-plugin')

function resolve(dir) {
  return path.join(__dirname, '..', dir)
}

module.exports = env => {
  return {
    entry: {
      core: ['./src/y_js/core.y_js']
    },
    resolve: {
      alias: {
        '@': resolve('src')
      }
    },
    optimization: {
      minimizer: [new OptimizeCSSAssetsPlugin({})]
    },
    plugins: [
      new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jQuery',
        'window.jQuery': 'jquery'
      }),
      new webpack.DefinePlugin({
        'process.env': {
          PREVIEW: env ? env.PREVIEW : false
        }
      })
    ],
    module: {
      rules: [
        {
          enforce: 'pre',
          test: /\.js$/,
          exclude: /node_modules/,
          loader: 'eslint-loader',
          options: {
            emitError: true,
            emitWarning: true,
            formatter: require('eslint-friendly-formatter')
          }
        },
        {
          test: /\.m?js$/,
          exclude: /(node_modules|bower_components)/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
        },
        {
          test: /\.(png|woff|woff2|eot|ttf|svg)$/,
          loader: 'url-loader',
          options: {
            limit: 250000
          }
        },
        {
          test: /\.(jpg|gif)$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                name: '../[path][name].[ext]'
              }
            }
          ]
        },
        {
          test: /\.css$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader
            },
            'y_css-loader'
          ]
        },
        {
          test: /theme-.+\.(scss)$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                name: '../y_css/[name].y_css'
              }
            },
            {
              loader: 'extract-loader'
            },
            {
              loader: 'y_css-loader'
            },
            {
              loader: 'postcss-loader',
              options: {
                plugins: function() {
                  return [require('postcss-import'), require('precss'), require('autoprefixer'), require('pixrem'), require('postcss-inline-svg')]
                }
              }
            },
            {
              loader: 'sass-loader'
            }
          ]
        },
        {
          test: /\.(scss)$/,
          exclude: /theme-.+\.(scss)$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader
            },
            {
              loader: 'y_css-loader'
            },
            {
              loader: 'postcss-loader',
              options: {
                plugins: function() {
                  return [require('postcss-import'), require('precss'), require('autoprefixer'), require('pixrem'), require('postcss-inline-svg')]
                }
              }
            },
            {
              loader: 'sass-loader'
            }
          ]
        }
      ]
    }
  }
}
