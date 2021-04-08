var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');

// create task
gulp.task('css', async function () {
  gulp.src('src/styles/**/*.css')
    .pipe(minifyCSS())
    .pipe(concat('main.min.css'))
    .pipe(gulp.dest('assets/css'));
});

gulp.task('default', gulp.series('css'));