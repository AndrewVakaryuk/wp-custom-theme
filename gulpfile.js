var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify-es').default;

// create task
gulp.task('css', async function () {
  gulp.src('src/styles/**/*.css')
    .pipe(minifyCSS())
    .pipe(concat('main.min.css'))
    .pipe(gulp.dest('assets/css'));
});

//Файл збирається і підгружається на сторінку, але все одно не працює
gulp.task("minify", function () {
  return gulp.src("src/js/*.js")
    .pipe(rename("main.min.js"))
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(sourcemaps.write()) 
    .pipe(gulp.dest("assets/js"));
});

gulp.task('default', gulp.series('css'));