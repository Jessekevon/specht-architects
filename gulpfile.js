'use strict';

var gulp = require('gulp'),
	del = require('del'),
	plugins = require('gulp-load-plugins')();

var PATHS = {
	dist: 'wp-content/themes/specht/dist/',
	scss: 'source/scss/app.scss',
	source: 'source/',
	watch: 'source/scss/**/*.scss'
};

var AUTOPREFIXER_BROWSERS = [
	'ie >= 9',
	'ie_mob >= 9',
	'ff >= 30',
	'chrome >= 34',
	'safari >= 7',
	'opera >= 23',
	'ios >= 6',
	'android >= 4.4',
	'bb >= 10'
];

// gulp.task('clean', del([PATHS.dist]));

gulp.task('styles', function() {
	return gulp.src(PATHS.scss)
		// .pipe(plugins.sourcemaps.init())
		.pipe(plugins.changed(PATHS.dist + 'css', {extension: 'css'}))
		.pipe(plugins.sass({
			precision: 10,
			outputStyle: 'compressed',
			// outputStyle: 'expanded',
			onError: console.error.bind(console, 'Sass error:')
		}))
		.pipe(plugins.autoprefixer({
			browsers: AUTOPREFIXER_BROWSERS
		}))
		// .pipe(plugins.sourcemaps.write())
		.pipe(gulp.dest(PATHS.dist + 'css'))
		.pipe(plugins.size({
			title: 'styles'
		}));
});

gulp.task('jshint', function() {
	return gulp.src(PATHS.source + 'js/**/*.js')
		.pipe(plugins.jshint())
		.pipe(plugins.jshint.reporter('jshint-stylish'))
		.pipe(jshint.reporter('fail'))
		.pipe(plugins.uglify())
		.pipe(gulp.dest(PATHS.dist + 'js'))
		.pipe(plugins.size({
			title: 'javascript'
		}));
});


gulp.task('watch', function() {
	gulp.watch([PATHS.watch], ['styles']);
});

// gulp.task('build', ['clean'], function() {
// 	plugins.sequence('styles', ['jshint', 'images', 'fonts']);
// });

gulp.task('default', ['watch']);