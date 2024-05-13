const gulp = require("gulp");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const cleanCSS = require("gulp-clean-css");
// const htmlmin = require('gulp-htmlmin');

gulp.task("minify-css", function () {
  return (
    gulp
      .src("css/*.css")
      //.pipe(concat("app.css"))
      .pipe(cleanCSS({ compatibility: "ie8" }))
      .pipe(gulp.dest("assets/css"))
  );
});

gulp.task("minify-js", function () {
  return (
    gulp
      .src("js/*.js")
      //.pipe(concat("script.js"))
      .pipe(uglify())
      .pipe(gulp.dest("assets/js"))
  );
});

// gulp.task('minify-html', function() {
//   return gulp.src('assets/**/*.html')
//     .pipe(htmlmin({collapseWhitespace: true}))
//     .pipe(gulp.dest('assets/'));
// });

gulp.task("default", gulp.series("minify-css", "minify-js"));
