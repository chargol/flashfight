/**
*
* PLUGINS
*
**/

var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var prefixer = require('gulp-autoprefixer');

/**
*
* PATH-Variables
*
**/

var bowerDir = "app/assets/bower_components";

var sassDir = 'app/assets/sass';
var targetCSSDir = 'public/css';
var sassCacheLocation = '/app/assets/sass/.sass-cache';

var jsDir = 'app/assets/scripts';
var targetJSDir = 'public/js/';

/**
*
* SASS / CSS - Handling
*
**/

gulp.task('css', function() {
	return gulp.src(sassDir + '/main.scss')
		.pipe(
			sass({
				style: 'compressed',
				loadPath: process.cwd() + '/' + sassDir,
				cacheLocation: process.cwd() + sassCacheLocation,
			})
		)
		.pipe(prefixer())
		.pipe(
			gulp.dest(targetCSSDir)
		);
});

/**
*
* SCRIPTS - Handling
*
**/

// gulp.task('js', []);

// gulp.task('task', function() {
// 	return gulp.src(jsDir + '/file.js')
// 	.pipe(
// 		gulp.dest(targetJSDir)
// 	);
// });
// 

/**
*
* LIBRARIES
*
**/

gulp.task('libs', ['jquery', 'bootstrap']);

// Library jQuery
gulp.task('jquery', function() {
	gulp.src(
		bowerDir + '/jquery/dist/jquery.min.js'
	).pipe(
		gulp.dest(targetJSDir)
	);

	gulp.src(
		bowerDir + '/jquery/dist/jquery.min.map'
	).pipe(
		gulp.dest(targetJSDir)
	);
});

// Library Twitter Bootstrap
gulp.task('bootstrap', function() {
	gulp.src(
		bowerDir + '/bootstrap/dist/js/bootstrap.min.js'
	).pipe(
		gulp.dest(targetJSDir)
	);

	gulp.src(
		bowerDir + '/bootstrap/dist/css/bootstrap.min.css'
	).pipe(
		gulp.dest(targetCSSDir)
	);

	gulp.src(
		bowerDir + '/bootstrap/dist/css/bootstrap.css.map'
	).pipe(
		gulp.dest(targetCSSDir)
	);

	gulp.src(
		bowerDir + '/bootstrap/dist/fonts/*'
	).pipe(
		gulp.dest('public/fonts')
	);

});


/**
*
* WATCHES
*
**/

gulp.task('watch-sass', function() {
	gulp.watch(sassDir +'/**/*.scss', ['css']);
});

gulp.task('watch-js', function() {
	gulp.watch(jsDir +'/**/*.js', ['js']);
});

/**
*
* GULP DEFAULT ACTIONS
*
**/

gulp.task('default', ['css', 'js', 'watch-sass', 'watch-js']);
