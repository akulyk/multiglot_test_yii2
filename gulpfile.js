'use strict';

const gulp = require('gulp'),
    sass = require('gulp-sass'),
	less = require('gulp-less'),
    concatCss = require('gulp-concat-css'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    gcmq = require('gulp-group-css-media-queries'),
    cssnano = require('gulp-cssnano'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    jpegtran = require('imagemin-jpegtran'),
    jpegoptim = require('imagemin-jpegoptim'),
    gifsicle = require('imagemin-gifsicle'),
    svgo = require('imagemin-svgo'),
    watermark = require("gulp-watermark"),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    sourcemaps = require('gulp-sourcemaps'),
    plumber = require('gulp-plumber'),
 //   download = require('gulp-download'),
    newer = require('gulp-newer'),
    remember = require('gulp-remember'),
//    cache = require('gulp-cache'),
//    livereload = require('gulp-livereload'),
    browserSync = require('browser-sync'),
    del = require('del');


var app = 'application';
var frontend = 'frontend';
var backend = 'backend';

var frontendAssets = 'frontend/views/assets';
var backendAssets = 'backend/views/assets';

var frontendWeb = 'frontend/web';
var backendCss = 'backend/web/css';

gulp.task('styles:prepare', function() {
  return  gulp.src([
      frontendAssets + '/less/*.less',
	'!' + frontendAssets + '/less/smart-grid.less'
   
   
        ],{base: frontendAssets + '/less'})
    .pipe(plumber({errorHandler:notify.onError(function(error){
            return {
                title: "Styles compress",
                message:error.message
            };
    })}))
  //  .pipe(newer({dest:'design/new',ext:'.min.css'}))    
  //  .pipe(sourcemaps.init())
  //  .pipe(rename({suffix: '.min'}))
    .pipe(less())
    .pipe(gcmq())
    .pipe(autoprefixer({
          browsers: ['> 0.1%'],
          cascade: false
      }))
  //  .pipe(cleanCSS({level: 2}))
    //.pipe(cssnano())
    
   // .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(frontendWeb + '/css'))
    .pipe(notify({ message: 'Css file <%= file.relative %> handled' }));
});


/*
 * make gulp to watch after changes
 */

gulp.task('watch',function(){
  gulp.watch(frontendAssets +'/less/*.less',gulp.series('styles:prepare'));
  
});

gulp.task('serve',function(){

    browserSync.watch([
        app +'/**/*.php',
        frontend +'/**/*.php',
        backend +'/**/*.php',
        frontendWeb + '/css/*.css',
        frontendWeb + '/js/*.js',
                       

                       ])
            .on('change',browserSync.reload);
    
});


gulp.task('bs:init',function () {
  return browserSync.init({
        open: 'external',
        host: 'multiglot.dev',
        proxy: {
            target: "multiglot.dev",
        },
        port: 81
    });
});

/*
 * force to reload browser if
 * php,css or js files changed
 */
gulp.task('dev',
    gulp.series( gulp.parallel('bs:init','watch','serve'))
);


