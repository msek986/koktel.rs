"use strict";

var gulp = require("gulp");
// JS Files
const concat = require("gulp-concat");
const terser = require("gulp-terser");
const sourcemaps = require("gulp-sourcemaps");
// CSS Files
const postcss = require("gulp-postcss");
const cssnano = require("cssnano");
const autoprefixer = require("autoprefixer");
// IMAGE Files
var imagemin = require("gulp-imagemin");
var once = require("gulp-once");
var mkdirp = require("mkdirp");
var path = require("path");

const { src, dest } = require("gulp");

// CSS Path
const cssPath = "./public/css/*.css";

// JS Path
const jsPath = "./public/js/*.js";

// IMAGE Paths
const cacheFile = "./gulp/cache/optimize-images.json";
const source = "./public/images/**/*";
const destination = "./public/images";

gulp.task("jsTask", async function () {
    await src(jsPath)
        .pipe(sourcemaps.init())
        .pipe(concat("app.js"))
        .pipe(terser())
        .pipe(sourcemaps.write("."))
        .pipe(dest("./public/js"));
});

gulp.task("cssTask", async function () {
    await src(cssPath)
        .pipe(sourcemaps.init())
        .pipe(concat("app.css"))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write("."))
        .pipe(dest("./public/css"));
});

function optimizeImages(source, destination, cacheFile) {
    mkdirp.sync(path.dirname(cacheFile));

    gulp.src(source)
        .pipe(
            once({
                file: cacheFile,
            })
        )
        .pipe(imagemin())
        .pipe(gulp.dest(destination))
        .pipe(
            once({
                file: cacheFile,
            })
        );
}

gulp.task("imageTask", async function () {
    await optimizeImages(source, destination, cacheFile);
});
