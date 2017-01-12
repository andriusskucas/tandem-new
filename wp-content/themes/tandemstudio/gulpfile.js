'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var minifycss = require('gulp-clean-css');
var rename = require('gulp-rename');
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var minify = require('gulp-minify');
var plumber = require('gulp-plumber');
var concat = require('gulp-concat');


gulp.task('sass', function () {
 return gulp.src('./_assets/scss/**/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
  .pipe(sourcemaps.write('./maps'))
  .pipe(gulp.dest('./assets/css'));
});

gulp.task('sass-min', function () {
 return gulp.src('./_assets/scss/**/*.scss')

  .pipe(sass().on('error', sass.logError))
  .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
  .pipe(rename({suffix: '.min'}))
  .pipe(minifycss())
  .pipe(gulp.dest('./assets/css'));
});

gulp.task('js', function() {
  return gulp.src([

           // Grab your custom scripts

      './_assets/js/app.js'


  ])
  .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(concat('app.js'))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('./assets/js'))
    .pipe(minify())
    .pipe(gulp.dest('./assets/js'))
});

gulp.task('watch', function () {
  gulp.watch('./_assets/scss/**/*.scss', ['sass']);
  gulp.watch('./_assets/js/*.js', ['js']);
});
