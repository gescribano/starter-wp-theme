var gulp = require('gulp');
var changed = require('gulp-changed');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var gulpif = require('gulp-if');
var handleErrors = require('../util/handleErrors');
var sourcemaps = require('gulp-sourcemaps');

// Javascript compilation
gulp.task('javascript', function() {

  var jsPaths = [
    global.themePath+'assets/src/js/vendor/*.js',
    global.themePath+'assets/src/js/main.js'
  ];

  var dest = global.themePath+'assets/build/js';

  // ASnyc
  return gulp.src( jsPaths )
    .on( 'error', handleErrors )
    .pipe( sourcemaps.init() )
      .pipe( concat('main.js') )
      .pipe( gulpif( !global.isWatching, uglify() ) )
    .pipe( sourcemaps.write('.') )
    .pipe( gulp.dest( dest ) );

});
