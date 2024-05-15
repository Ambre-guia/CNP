const { src, dest, series, task, watch, parallel } = require("gulp");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const cleanCSS = require("gulp-clean-css");
const autoprefixer = require("gulp-autoprefixer");

// --------------------
// --- VERSION PROD ---
// --------------------
// ajouter les vendors prefix sur les règles css pour le fichier style.css
// grouper les fichiers css sous un fichier
// minifier le fichier css
// enregistre le fichier dans le dossier
function minifyCss() {
  return src("css/*.css")
    .pipe(
      autoprefixer({
        cascade: false,
      })
    )
    .pipe(concat("app.css"))
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(dest("dist/assets/css"));
}

// grouper les fichiers ls sous un fichier
// minifier le fichier js
// enregistre le fichier dans le dossier
function minifyJs() {
  return src("js/*.js")
    .pipe(concat("script.js"))
    .pipe(uglify())
    .pipe(dest("dist/assets/js"));
}

// --------------------
// --- VERSION PREPROD ---
// --------------------
// ajouter les vendors prefix sur les règles css pour le fichier style.css
// grouper les fichiers css sous un fichier
// minifier le fichier css
// enregistre le fichie dans le dossier
function minifyCssPreProd() {
  return src("css/*.css")
    .pipe(
      autoprefixer({
        cascade: false,
      })
    )
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(dest("dist/assets/css"));
}

function minifyJsPreProd() {
  return src("js/*.js").pipe(uglify()).pipe(dest("dist/assets/js"));
}

// si modification dans le dossier css et js , lancer la
function watchTask() {
  watch("js/*.js", minifyJsPreProd);
  watch("css/*.css", minifyCssPreProd);
}

if (process.env.NODE_ENV === "production") {
  exports.build = parallel(minifyCss, minifyJs);
} else {
  exports.build = series(
    parallel(minifyCssPreProd, minifyJsPreProd),
    watchTask
  );
}
