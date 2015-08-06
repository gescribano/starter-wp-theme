var gulp = require('gulp');

// JS is watched by watchify, specified in the browserify task
gulp.task( 'watch', function(){

  global.isWatching = true;

  gulp.watch( global.themePath+'assets/src/less/**/*.less', ['less'] );
  gulp.watch( global.themePath+'assets/src/js/**/*.js', ['javascript'] );
  gulp.watch( global.themePath+'assets/src/images/**', ['images'] );
  gulp.watch( global.themePath+'assets/src/fonts/**', ['fonts'] );

});

// TODO: why gulp does not trigger watch on new added files ?
