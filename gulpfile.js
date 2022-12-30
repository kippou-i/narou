import gulp from 'gulp';
import sass from 'gulp-dart-sass';
import plumber from 'gulp-plumber';
import notify from 'gulp-notify';
import browserSync from 'browser-sync';
import uglify from 'gulp-uglify';
import imageMin from 'gulp-imagemin';
import autoprefixer from 'gulp-autoprefixer';
import rename from 'gulp-rename';
import sassGlob from 'gulp-sass-glob-use-forward';
import { deleteSync } from 'del';


// 入出力するフォルダを指定
const src = './src';
const dist = './dist';

const srcPath = {
  'sass': src + '/sass/**/*.{scss,sass}',
  'js': src + '/**/*.js',
  'image': src + '/img/**/*.{jpg,jpeg,png,gif,svg}',
  'file': [src + '/img/**/*', '!' + src + '/img/**/*.{jpg,jpeg,png,gif,svg}'],
};

const distPath = {
  'clean': dist + '/**/*',
  'css': dist + '/',
  'js': dist + '/',
  'image': dist + '/img/',
  'file': dist + '/img/',
};

const delPath = {
  'js': dist + '/**/*.js',
  'image': dist + '/img/**/*.{jpg,jpeg,png,gif,svg}',
  'file': [dist + '/img/**/*', '!' + dist + '/img/**/*.{jpg,jpeg,png,gif,svg}'],
};


/**
 * フォルダ削除
 */
function cleaner() {
  return deleteSync(distPath.clean);
}
function jsClean() {
  return deleteSync(delPath.js);
}
function imageClean() {
  return deleteSync(delPath.image);
}
function fileClean() {
  return deleteSync(delPath.file);
}


/**
 * sass
 */
function cssSass() {
  return gulp
    .src(srcPath.sass, { sourcemaps: true, })
    .pipe(sassGlob())
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(browserSync.stream())
    .pipe(
      rename({
        extname: '.min.css',
      })
    )
    .pipe(
      autoprefixer({
        cascade: false,
      })
    )
    .pipe(gulp.dest(distPath.css, { sourcemaps: './', }))
    .pipe(
      plumber({
        errorHandler: notify.onError('Error:<%= error.message %>')
      }))
    .pipe(notify({
      message: 'Sassをコンパイルしました！',
      onLast: true,
    }));
}

/**
 * js
 */
function js() {
  return gulp
    .src(srcPath.js)
    .pipe(
      uglify()
    )
    .pipe(gulp.dest(distPath.js));
}

/**
 * image
 */
function image() {
  return gulp
    .src(srcPath.image)
    .pipe(
      imageMin()
    )
    .pipe(gulp.dest(distPath.image));
}

function file() {
  return gulp
    .src(srcPath.file)
    .pipe(gulp.dest(distPath.file));
}

/**
 *
 * ファイル監視 ファイルの変更を検知したら、browserSyncReloadでreloadメソッドを呼び出す
 * seriesは「順番」に実行
 * parallelは並列で実行
 * watch('監視するファイル',処理)
 */
function watchFiles() {
  gulp.watch(srcPath.sass, cssSass);
  gulp.watch(srcPath.js, jsClean);
  gulp.watch(srcPath.js, js);
  gulp.watch(srcPath.image, imageClean);
  gulp.watch(srcPath.image, image);
  gulp.watch(srcPath.file, fileClean);
  gulp.watch(srcPath.file, file);
}

export default function (done) {
  cleaner();
  cssSass();
  js();
  image();
  file();
  watchFiles();
  done();
};