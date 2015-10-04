var gulp  = require('gulp'),
 notify   = require('gulp-notify'),
 phpspec = require('gulp-phpspec'),
 watch = require('gulp-watch'),
 _        = require('lodash');

gulp.task('phpspec', function() {
  gulp.src('./vendor/phpspec/phpspec/phpspec.yml')
    .pipe(phpspec('./vendor/bin/phpspec', {notify: true}))
    .on('error', notify.onError(notifyMessage('fail', 'phpspec')))
    .pipe(notify(notifyMessage('pass', 'phpspec')));
});

gulp.task('watch', function () {
  gulp.watch('src/**/*.php', ['phpspec']);
});

function notifyMessage(status, pluginName, override) {
    var options = {
        title:   ( status == 'pass' ) ? 'Tests Passed' : 'Tests Failed',
        message: ( status == 'pass' ) ? '\n\nAll tests have passed!\n\n' : '\n\nOne or more tests failed...\n\n',
        icon:    __dirname + '/node_modules/gulp-' + pluginName +'/assets/test-' + status + '.png'
    };
    options = _.merge(options, override);
  return options;
}

gulp.task('default', ['phpspec', 'watch']);