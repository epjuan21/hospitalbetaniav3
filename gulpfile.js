var gulp = require('gulp');
var webserver = require('gulp-webserver');
var sass = require('gulp-sass');
var minifyCss  = require('gulp-minify-css');
var browserify = require('browserify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var uglify = require('gulp-uglify');
var imageop = require('gulp-image-optimization');

var config = {
	styles: {
		main: './src/scss/style.scss',
		watch: './src/scss/**/*.scss',
		output: './css'
	},
	html: {
		watch: './dist/*.html'
	},
	scripts: {
		main: './src/scripts/main.js',
		watch: './src/scripts/**/*.js',
		output: './dist/js'
	},
	image: {
		watch: ['./scr/img/*.png', './scr/img/*.jpg', './scr/img/*.jpeg'],
		output: './dist/img'
	}
}

gulp.task('build:css', function(){
	gulp.src(config.styles.main)
		.pipe(sass())
		//.pipe(minifyCss())
		.pipe(gulp.dest(config.styles.output));
});

gulp.task('watch', function (){
	gulp.watch(config.styles.watch, ['build:css']);
});


gulp.task('build', ['build:css'])

gulp.task('default', ['build']);