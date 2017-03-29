//Include gulp
var gulp = require('gulp');

//Include plugins
var gutil = require('gulp-util');
var watch = require('gulp-watch');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var livereload = require('gulp-livereload');

//Styles
gulp.task('sass-theme', function () {
	gulp.src('./sass/style.scss')
		.pipe(sourcemaps.init())
			.pipe(sass({
		        style: 'compressed',
		        errLogToConsole: false,
		        onError: function(err) {
		            return notify().write(err);
		        }
		    }))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./'))
		.pipe(livereload())
});

//Metabox Styles
gulp.task('sass-meta', function () {
	gulp.src('./metaboxes/meta.scss')
		.pipe(sourcemaps.init())
			.pipe(sass({
		        style: 'compressed',
		        errLogToConsole: false,
		        onError: function(err) {
		            return notify().write(err);
		        }
		    }))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./metaboxes/'))
		.pipe(livereload())
});

//Scripts
gulp.task('scripts', function() {
	gulp.src(['./js/lib/*.js'])
		.pipe(sourcemaps.init())
		.pipe(concat('dist.js'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./js/dist/'));
});



//JSHint
gulp.task('lint', function() {
	return gulp.src('./js/lib/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter(stylish));
});

//Watch
gulp.task('watch', function() {
	livereload.listen();
	//watch scss files
	gulp.watch('sass/**/*.scss', ['sass-theme']);
	gulp.watch('metaboxes/meta.scss', ['sass-meta']);
	//watch js files
	gulp.watch('js/lib/*.js', ['scripts', 'lint']);
});

gulp.task('default', ['sass-theme', 'scripts', 'lint', 'watch']);