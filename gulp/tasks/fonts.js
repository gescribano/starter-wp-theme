var gulp = require('gulp');
var changed = require('gulp-changed');

gulp.task( 'fonts', function() {

  var dest = global.themePath+'assets/build/fonts';

  return gulp.src( global.themePath+'assets/src/fonts/**' )
    .pipe( changed( dest ) ) // Ignore unchanged files
    .pipe( gulp.dest( dest ) );
    
});
