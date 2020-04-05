var gulp = require('gulp');
var archiver = require('gulp-archiver');
 
gulp.task('default', function () {
    return gulp.src('./**')
        .pipe(archiver('archive.zip'))
        .pipe(gulp.dest('./'));
});