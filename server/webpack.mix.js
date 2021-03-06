const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .babelConfig({
      "plugins": [
         ["import", { "libraryName": "antd", "libraryDirectory": "es", "style": "css" }],
         "@babel/plugin-proposal-class-properties",
         "@babel/plugin-syntax-dynamic-import",
         ["react-intl", {
            "messagesDir": "resources/js/locales/messages/"
        }]
      ],
      "env": {
         "production": {
           "plugins": ["emotion"]
         },
         "development": {
           "plugins": [
               ["emotion", { "sourceMap": true }]
            ]
         }
       }
   }).webpackConfig({
      resolve: {
        alias: {
          '@': __dirname + '/resources/js',
          '@app': __dirname + '/resources/js',
          '@auth': __dirname + '/resources/js/components/Auth',
          '@layout': __dirname + '/resources/js/components/Layout',
          '@content': __dirname + '/resources/content',
          '@graphql': __dirname + '/resources/graphql',
          '@helpers': __dirname + '/resources/js/helpers',
          '@locales': __dirname + '/resources/js/locales',
          '@mining': __dirname + '/resources/js/components/Mining',
          '@modals': __dirname + '/resources/js/components/Modals',
          '@pages': __dirname + '/resources/js/components/Pages',
        },
      },
      module: {
        rules: [
          {
            test: /\.(md)$/i,
            use: 'raw-loader',
          },
          {
            test: /\.(graphql|gql)$/,
            exclude: /node_modules/,
            loader: 'graphql-tag/loader',
          },
        ],
      }
    })