const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix
//     .js(["resources/js/admin/admin.js"], "public/js")
//     .sass("resources/sass/admin/admin.scss", "public/css")
//     .vue();

mix
    .js(["resources/js/admin/admin.js", 
      "public/js/js/jquery.min.js",
      "public/js/js/jquery-ui.min.js",
      "public/js/js/perfect-scrollbar.min.js",
      "public/js/js/bootstrap.min.js",
      "public/js/js/jquery.validate.min.js",
      "public/js/js/es6-promise-auto.min.js",
      "public/js/js/moment.min.js",
      "public/js/js/bootstrap-datetimepicker.js",
      "public/js/js/bootstrap-selectpicker.js",
      "public/js/js/bootstrap-switch-tags.js",
      "public/js/js/jquery.easypiechart.min.js",
      "public/js/js/chartist.min.js",
      "public/js/js/bootstrap-notify.js",
      "public/js/js/sweetalert2.js",
      "public/js/js/jquery-jvectormap.js",
      "public/js/js/jquery.bootstrap.wizard.min.js",
      "public/js/js/bootstrap-table.js",
      "public/js/js/jquery.datatables.js",
      "public/js/js/fullcalendar.min.js",
      "public/js/js/paper-dashboard.js",
      "public/js/js/jquery.sharrre.js",
      "public/js/js/demo.js"], "public/js/admin.js")
    .sass("resources/sass/admin/admin.scss", "public/css")
    .vue()
    .styles([
      'public/css/bootstrap.min.css',
      'public/css/paper-dashboard.css',
      'public/css/demo.css',
      'public/css/themify-icons.css',
      // 'public/css/admin.css'
  ], 'public/css/admin.css'); // Combine into a single file
  

if (mix.inProduction()) {
  mix.version();
}
