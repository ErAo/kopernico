let mix = require('laravel-mix');
require('laravel-mix-purgecss');

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

mix.setPublicPath('dist')
   .js('resources/assets/js/app.js', 'js/')
   .extract([
     'babel-polyfill',
     'vue'
   ])
   .sass('resources/assets/styles/app.scss', 'css/')
   .options({
     processCssUrls: false,
     postCss: [ require('tailwindcss')('./tailwind.js') ],
   })
   .purgeCss({
    whitelist: [
      "rtl",
      "home",
      "blog",
      "archive",
      "date",
      "error404",
      "logged-in",
      "admin-bar",
      "no-customize-support",
      "custom-background",
      "wp-custom-logo",
      "menu-item",
      "menu-menu-2",
      "menu-main",
      "menu-padre",
      "menu-main_menu-container",
      "menu-main_menu",
      "menu-item",
      "sub-menu",
      
      "menu-responsive",
      "img-fei-menu",
      "menu-container",
      "menu-menu-1",
      "img-menu"
    ],
    whitelistPatterns: [
      /^search(-.*)?$/,
      /^(.*)-template(-.*)?$/,
      /^(.*)?-?single(-.*)?$/,
      /^postid-(.*)?$/,
      /^attachmentid-(.*)?$/,
      /^attachment(-.*)?$/,
      /^page(-.*)?$/,
      /^(post-type-)?archive(-.*)?$/,
      /^author(-.*)?$/,
      /^category(-.*)?$/,
      /^tag(-.*)?$/,
      /^tax-(.*)?$/,
      /^term-(.*)?$/,
      /^(.*)?-?paged(-.*)?$/
  ]
  })

if (mix.inProduction()) {
  mix.version()
}

// Browser Sync

const app       = 'app';
const resources = 'resources';
const assets    = `${resources}/assets`;
const dist      = 'dist';

mix.browserSync({
  proxy: 'http://kopernico.test',
  port: 3000,

  files: [
    `${app}/**/*.php`,
    `${resources}/**/*.php`,
    `${dist}/**/*.css`,
    `${dist}/**/*.js`
  ]
});