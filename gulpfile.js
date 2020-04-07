const { src, dest, parallel, series } = require('gulp');
const del = require('del');
const archiver = require('gulp-archiver');
const concat = require('gulp-concat');

const minify = require('gulp-minify');
const sass = require('gulp-sass');
sass.compiler = require('node-sass');


function arhive() {
    return src('./**')
        .pipe(archiver('archive.zip'))
        .pipe(dest('./'));
}

function deleteFile() {
    return del(['archive.zip']);
}

function style() {
    return src('./style/*.scss')
           .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
           .pipe(concat('style.css', {newLine: ''}))
           .pipe(dest('./style/'));
}

exports.arhive = arhive;
exports.deleteFile = deleteFile;
exports.style = style;

exports.default = series( deleteFile, style, arhive);