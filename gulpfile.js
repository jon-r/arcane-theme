
var gulp = require('gulp');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var rename = require("gulp-rename");
var cssnano = require('gulp-cssnano');
var zip = require('gulp-zip');

gulp.task('sass', function() {
  return gulp.src('library/scss/style.scss')
    .pipe(sass({outputStyle: 'compact'}).on('error', sass.logError))
    .pipe(prefix("last 2 version", "> 2%"))
    .pipe(gulp.dest('library/css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(cssnano())
    .pipe(gulp.dest('library/css'));
});

//gulp.task('sass-min', function() {
//  return gulp.src('./library/scss/style.scss')
//    .pipe(sass({outputStyle: 'compact'}).on('error', sass.logError))
//    .pipe(prefix("last 2 version", "> 2%"))
//    .pipe(rename('style.min.css'))
//    .pipe(gulp.dest('./library/css'));
//});

gulp.task('minjs', function() {
  return gulp.src('./library/js/scripts.js')
    .pipe(uglify({preserveComments: 'some'}))
    .pipe(rename('scripts.min.js'))
    .pipe(gulp.dest('./library/js'));
});

gulp.task('default', ['sass','minjs']);

gulp.task('watch', function () {
  gulp.watch('./library/scss/**/*.scss', ['sass']);
  gulp.watch('./library/js/scripts.js', ['minjs']);
});

gulp.task('zip', function() {
  return gulp.src(['../arcane*/**', '!./node_modules/**'])
      .pipe(zip('arcane-theme.zip'))
      .pipe(gulp.dest('../'));
})
