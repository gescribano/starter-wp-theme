var gulp = require( 'gulp' );
var less = require( 'gulp-less' );
var gutil = require( 'gulp-util' );
var handleErrors = require('../util/handleErrors');
var rename = require('gulp-rename');
var minifyCss = require('gulp-minify-css');
var gulpif = require('gulp-if');
var sourcemaps = require('gulp-sourcemaps');

// CSS compilation tasks
gulp.task( 'less', function(){

  var dest = global.themePath+'assets/build/css';

  // Asnyc
  return gulp.src( global.themePath+'assets/src/less/main.less' )
    .on( 'error', handleErrors )
    .pipe( sourcemaps.init() )
      .pipe( less({compress:false}) )
      .pipe( gulpif( !global.isWatching, minifyCss({compatibility:'ie8'}) ) )
    .pipe( sourcemaps.write('.') )
    .pipe( gulp.dest( dest ) );

});
