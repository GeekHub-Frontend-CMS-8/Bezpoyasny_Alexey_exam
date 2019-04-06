var gulp        = require('gulp');
var clean       = require('gulp-clean');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var uglifyCss   = require('gulp-uglifycss');
var rename      = require('gulp-rename');
var sourcemaps  = require('gulp-sourcemaps');

gulp.task('clean', function () {
    return gulp.src('dist', {read: false})
        .pipe(clean());
});

gulp.task('sass', function () {
    return gulp.src('app/sass/**/*.sass')
        .pipe(sass())
        .pipe(sourcemaps.init())
            .pipe(rename({ suffix: '.min' }))
            .pipe(uglifyCss())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('css', function () {
    return gulp.src('app/css/**/*.css')
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('img', function () {
    return gulp.src('app/img/**/*')
        .pipe(gulp.dest('dist/img'))
        .pipe(browserSync.reload({stream: true}));

});

gulp.task('fonts', function () {
    return gulp.src('app/fonts/**/*')
        .pipe(gulp.dest('dist/fonts'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('js', function () {
    return gulp.src('app/js/**/*')
        .pipe(sourcemaps.init())
            .pipe(concat('main.js'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('dist/js'))
        .pipe(browserSync.reload({stream: true}));

});

gulp.task('browser-sync', function () {
    var files = ['./app/sass/**/*.sass', './*.php'];
    browserSync.init(files, {
        proxy: 'http://localhost/mitalent/',
        notify: false
    });
});

gulp.task('watch', [ 'clean', 'sass', 'css', 'img', 'fonts', 'js', 'browser-sync'], function () {

    gulp.watch('app/sass/**/*.sass', ['sass']);
    gulp.watch('app/css/**/*.css', ['css']);
    gulp.watch('app/img/**/*', ['img']);
    gulp.watch('app/fonts/**/*', ['fonts']);
    gulp.watch('app/js/**/*', ['js']);

});
