// Import Gulp and plugins
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

// Compile Sass to CSS
function compileSass() {
  return gulp.src('./scss/style.scss')
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'));
}

// Watch for changes to Sass files
function watchFiles() {
  gulp.watch('./scss/**/*.scss', compileSass);
}

// Export tasks
exports.default = gulp.series(compileSass, watchFiles);
