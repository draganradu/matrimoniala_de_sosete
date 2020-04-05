const { src, dest, parallel, series } = require('gulp');
const del = require('del');
const archiver = require('gulp-archiver');


function arhive() {
    return src('./**')
        .pipe(archiver('archive.zip'))
        .pipe(dest('./'));
}

function deleteFile() {
    return del(['archive.zip']);
}

exports.arhive = arhive;
exports.deleteFile = deleteFile;

exports.default = series( deleteFile, arhive);