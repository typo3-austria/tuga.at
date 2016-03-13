/* File: gulpfile.js */

// grab our gulp packages
var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    rename = require('gulp-rename'),
    changed = require('gulp-changed'),
    jshint = require ('gulp-jshint'),
    concat = require ('gulp-concat'),
    uglify = require ('gulp-uglify'),
    imagemin = require ('gulp-imagemin'),
    autoprefixer = require ('gulp-autoprefixer'),
    sass = require ('gulp-sass'),
	sassGlob = require('gulp-sass-glob'),
    sourcemaps = require('gulp-sourcemaps'),
    minifyCSS = require ('gulp-minify-css'),
    livereload = require('gulp-livereload');


var DEST = '../Resources/Public/';
var CSS_SRC = [
	'../Resources/Private/Scss/**/*.scss'
];
var HTML_SRC = '../Resources/Private/StaticHtml/**/*.html';
var IMG_SRC = '../Resources/Private/Images/**/*.{png,gif,jpg,svg}';
var JS_SRCS = [
    './bower_components/jquery/dist/jquery.min.js',
    './bower_components/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js',
    './bower_components/bootstrap-sass/assets/javascripts/bootstrap/transition.js',
    './bower_components/bootstrap-sass/assets/javascripts/bootstrap/alert.js',
    './bower_components/bootstrap-sass/assets/javascripts/bootstrap/button.js',
    './bower_components/bootstrap-sass/assets/javascripts/bootstrap/dropdown.js',
    './bower_components/bootstrap-sass/assets/javascripts/bootstrap/modal.js',
    '../Resources/Private/JavaScript/*.js'
];
var JSHEAD_SRCS = [
    '../Resources/Private/JavaScript/Vendor/modernizr.js'
];

// Styles task
gulp.task('styles', function () {
    gulp.src(CSS_SRC)
        .pipe(sass({ style: 'expanded' }))
        .pipe(autoprefixer("last 1 version", "ie 9"))
        .pipe(sourcemaps.init())
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(DEST + 'Css/'))
        .pipe(livereload());
});

// Images task
gulp.task('images', function () {
    gulp.src(IMG_SRC)
        .pipe(imagemin())
        .pipe(gulp.dest(DEST + 'Images/'));
});

// Script task
gulp.task('scripts', function() {
    gulp.src(JS_SRCS)
        .pipe(jshint())
        .pipe(concat('main.js'))
        .pipe(gulp.dest(DEST + 'JavaScript/'));
	gulp.src(JSHEAD_SRCS)
		.pipe(jshint())
		.pipe(concat('head.js'))
		.pipe(gulp.dest(DEST + 'JavaScript/'));
});

//
// Production start
//

// Styles production task
gulp.task('styles_prod', function () {
    gulp.src(CSS_SRC)
        .pipe(sass({ style: 'expanded' }))
        .pipe(autoprefixer("last 1 version", "ie 9"))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifyCSS())
        .pipe(gulp.dest(DEST + 'Css/'))
});
// Script production task
gulp.task('scripts_prod', function() {
    gulp.src(JS_SRCS)
        .pipe(jshint())
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(gulp.dest(DEST + 'JavaScript/'));
    gulp.src(JSHEAD_SRCS)
        .pipe(jshint())
        .pipe(concat('head.js'))
        .pipe(uglify())
        .pipe(gulp.dest(DEST + 'JavaScript/'));
});

//
// Production end
//

// HTML task
gulp.task('html', function() {
    gulp.src(HTML_SRC)
        .pipe(gulp.dest(DEST + 'StaticHtml/'))
        .pipe(livereload());
});

gulp.task('default', ['production']);

// Rerun the task when a file changes
gulp.task('watch', ['styles_prod', 'scripts_prod', 'images', 'html'], function () {
    livereload.listen();
    gulp.watch(CSS_SRC, ['styles']);
    gulp.watch([JS_SRCS, JSHEAD_SRCS], ['scripts']);
    gulp.watch(IMG_SRC, ['images']);
    gulp.watch(HTML_SRC, ['html']);
});

// Rerun the task when a file changes
gulp.task('production', ['styles_prod', 'scripts_prod', 'images', 'html'], function () {
    livereload.listen();
    gulp.watch(CSS_SRC, ['styles_prod']);
    gulp.watch([JS_SRCS, JSHEAD_SRCS], ['scripts_prod']);
    gulp.watch(IMG_SRC, ['images_prod']);
    gulp.watch(HTML_SRC, ['html']);
});
