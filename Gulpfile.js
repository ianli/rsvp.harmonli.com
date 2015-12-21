/**
 * Gulpfile for rsvp.harmonli.com
 *
 * @see http://tylermcginnis.com/reactjs-tutorial-pt-2-building-react-applications-with-gulp-and-browserify/
 */

var gae = require('gulp-gae');
var gulp = require('gulp');

var PORT = 14081;
var ADMIN_PORT = 14082;

gulp.task('gae_serve', function() {
  gulp.src('./app.yaml')
    .pipe(gae('dev_appserver.py', [], {
      port: PORT,
      admin_port: ADMIN_PORT
    }));
});

gulp.task('gae_deploy', function() {
  gulp.src('./app.yaml')
    .pipe(gae('appcfg.py', ['update'], {
      // appcfg.py parameters go here.
      // https://cloud.google.com/appengine/docs/python/tools/uploadinganapp?hl=en#Python_Command-line_arguments
      no_cookies: undefined
    }));
});

gulp.task('default', ['gae_serve']);
