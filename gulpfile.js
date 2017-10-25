const gulp = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const pug = require('gulp-pug');
const browserSync = require('browser-sync');

const PATH = {
  pug: './resources/pug/',
  scss: './resources/scss/',
  public: './public/',
  theme: './public/wp-content/themes/littlepad-2017/'
};

gulp.task('pug', function() {
  return gulp.src([`${PATH.pug}**/*.pug`, `!${PATH.pug}**/_*.pug`])
    .pipe(pug({
      'pretty': true
    }))
    .pipe(gulp.dest(PATH.public));
});

gulp.task('sass', function() {
  return gulp.src(`${PATH.scss}entries/*.scss`)
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(autoprefixer({
      browsers: ['last 2 versions', 'ie >= 11']
    }))
    .pipe(gulp.dest(`${PATH.theme}css/`));
});

gulp.task('server', function() {
  browserSync.init({
    server: PATH.public,
    notify: false
  });
});

gulp.task('watch', function() {
  gulp.watch(`${PATH.scss}**/*.scss`, ['sass']);
  gulp.watch(`${PATH.pug}**/*.pug`, ['pug']);
});

gulp.task('default', ['server', 'watch']);