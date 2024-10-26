var gulp = require('gulp');
var notify = require("gulp-notify");
var plumber = require("gulp-plumber");
var sass = require('gulp-sass')(require('sass'));
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync').create();

// Sassコンパイルタスク
gulp.task('sass', function () {
  return gulp.src('./assets/scss/**/*.scss') // assetsフォルダ内のscssを指定
    .pipe(plumber({
      errorHandler: notify.onError("Error: <%= error.message %>")
    }))
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./assets/css')) // 出力先をassets内のcssフォルダに変更
    .pipe(browserSync.stream())
    .pipe(notify({ message: 'Sass compiled!', onLast: true }));
});

// JavaScriptの圧縮タスク
gulp.task('scripts', function () {
  return gulp.src('./assets/js/**/*.js')
    .pipe(plumber())
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js/min'))
    .pipe(notify({ message: 'Scripts minified!', onLast: true }));
});

// ブラウザ同期タスク
gulp.task('browser-sync', function () {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
});

// ファイル監視タスク
gulp.task('watch', function () {
  gulp.watch('./assets/scss/**/*.scss', gulp.series('sass')); // assetsフォルダ内のscssを監視
  gulp.watch('./assets/js/**/*.js', gulp.series('scripts'));
  gulp.watch("./*.html").on('change', browserSync.reload);
});

// デフォルトタスク
gulp.task('default', gulp.parallel('sass', 'scripts', 'browser-sync', 'watch'));
