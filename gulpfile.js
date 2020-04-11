const { src, dest, parallel, series } = require('gulp');
const del = require('del');
const archiver = require('gulp-archiver');
const concat = require('gulp-concat');

const sass = require('gulp-sass');
sass.compiler = require('node-sass');

const cleanCSS = require('gulp-clean-css');

function arhive() {
    return src(['./**','./_**/*','!./style/*.scss',])
        .pipe(archiver('_uploade_archive.zip'))
        .pipe(dest('./'));
}

function deleteFile() {
    return del(['_uploade_archive.zip']);
}

function style() {
    return src('./style/*.scss')
           .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
           .pipe(concat('style.css', {newLine: ''}))
           .pipe(cleanCSS({level: {1: {specialComments: false}}}))
           .pipe(dest('./style/'));
}

exports.arhive = arhive;
exports.deleteFile = deleteFile;
exports.style = style;
exports.all = series( deleteFile, style, arhive);

exports.default = series( deleteFile, style, arhive);