const gulp = require("gulp");
const uglify = require("gulp-uglify");
const cleanCSS = require("gulp-clean-css");
// const htmlmin = require('gulp-htmlmin');

gulp.task("minify-css", function () {
  return gulp
    .src("css/*.css")
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(gulp.dest("_site"));
});

gulp.task("minify-js", function () {
  return gulp.src("js/*.js").pipe(uglify()).pipe(gulp.dest("_site"));
});

// gulp.task('minify-html', function() {
//   return gulp.src('_site/**/*.html')
//     .pipe(htmlmin({collapseWhitespace: true}))
//     .pipe(gulp.dest('_site'));
// });

gulp.task("default", gulp.series("minify-css", "minify-js"));
