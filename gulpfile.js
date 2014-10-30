var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var watch = require('gulp-watch');

gulp.task('default', function() {
    gulp.start('sass');
    gulp.start('serve');
});

gulp.task('sass', function() {
    return gulp.src('scss/*.scss')
	.pipe(sass())
	.pipe(gulp.dest('./'))
});

gulp.task('serve', function() {

    watch('**/*.scss', function() {
	gulp.start('sass');
    })

    watch('js/**/*.js')

    watch('**/*.php')
});
