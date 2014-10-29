var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var watch = require('gulp-watch');

gulp.task('default', function() {
    gulp.start('sass');
    gulp.start('serve');
});

gulp.task('sass', function() {
    return gulp.src('**/*.scss')
	.pipe(sass())
	.pipe(gulp.dest('./'))
	.pipe(reload({stream: true}));
});

gulp.task('serve', function() {
    browserSync({
	proxy: 'localhost:8888'
    });

    watch('**/*.scss', function() {
	gulp.start('sass');
    })

    watch('js/**/*.js')
	.pipe(reload({stream: true}));

    watch('**/*.php')
	.pipe(reload({stream: true}));
});
