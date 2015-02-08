// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    imagemin = require('gulp-imagemin'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    cmq = require('gulp-combine-media-queries'),
    copy = require('gulp-copy'),
    pxtorem = require('gulp-pxtorem');


// Copie des assets
gulp.task('copyjs', function() {
    return gulp.src('./src/Flyd/DashboardBundle/Resources/public/js/**')      
      .pipe(copy('web/js/', {prefix: 6}))
});

gulp.task('copyfonts', function() {
    return gulp.src('./src/Flyd/DashboardBundle/Resources/public/css/fonts/*')      
      .pipe(copy('./web/css/fonts/', {prefix: 8}))
});

gulp.task('copyimg', function() {
    return gulp.src('src/Flyd/DashboardBundle/Resources/public/img/**')      
      .pipe(copy('web/img/', {prefix: 6}))
});


// Sass
gulp.task('sass', function() {
    return gulp.src('src/Flyd/DashboardBundle/Resources/public/sass/main.scss')      
      .pipe(sass({ 
        style: 'expanded',
        noCache: true
      }))
      .on('error', function (err) { console.log(err.message); })
      .pipe(gulp.dest('web/css'))
});

// Postprocess
gulp.task('postprocess', function() {
  return gulp.src('web/css/main.css')
    .pipe(pxtorem({
      root_value: 16,
      unit_precision: 5,
      prop_white_list: ['font', 'font-size', 'line-height', 'letter-spacing'],
      replace: false,
      media_query: false
    }))
    .pipe(cmq())
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))

    .pipe(minifycss())
    .pipe(rename({suffix: '.min'}))    
    .pipe(gulp.dest('web/css'))


});

// Scripts
gulp.task('scripts', function() {  
    return gulp.src(['!src/Flyd/DashboardBundle/Resources/public/js/vendor/**', 'src/Flyd/DashboardBundle/Resources/public/js/main.js', '!src/Flyd/DashboardBundle/Resources/public/js/main.min.js'])
        .pipe(concat('web/main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/'))

});

// Minify scripts before production: todo

// Images
gulp.task('images', function() {
  return gulp.src(['src/Flyd/DashboardBundle/Resources/public/img/original/*.png', 'src/Flyd/DashboardBundle/Resources/public/img/original/*.jpg'])
    .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
    .pipe(gulp.dest('img/'))
});



  // Default task
gulp.task('default', function() {

    // Watch .scss files
    gulp.watch('src/Flyd/DashboardBundle/Resources/public/sass/*.scss', ['sass']);

    // Watch main.css files
    gulp.watch('web/css/main.css', ['postprocess']);

    // Watch .js files
    gulp.watch('src/Flyd/DashboardBundle/Resources/public/js/*.js', ['scripts']);

    // Copy
    gulp.watch('src/Flyd/DashboardBundle/Resources/public/js/vendor/*', ['copyjs']);
    gulp.watch('src/Flyd/DashboardBundle/Resources/public/css/fonts/*', ['copyfonts']);
    gulp.watch('src/Flyd/DashboardBundle/Resources/public/img/*', ['copyimg']);

    // Watch image files
    //gulp.watch('img/original/*', ['images']);

    livereload.listen();

    // Watch any files in dist/, reload on change
    gulp.watch(['web/css/main.min.css', 'web/js/main.min.js']).on('change', livereload.changed);
});

// Init 
gulp.task('init', ['copyjs', 'copyimg', 'copyfonts']);