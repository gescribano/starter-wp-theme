var gulp = require('gulp');
var changed = require('gulp-changed');

gulp.task( 'images', function() {
  
  var dest = global.themePath+'assets/build/img';

  return gulp.src( global.themePath+'assets/src/img/**' )
    .pipe( changed( dest ) ) // Ignore unchanged files
    .pipe( gulp.dest( dest ) );
    
});
