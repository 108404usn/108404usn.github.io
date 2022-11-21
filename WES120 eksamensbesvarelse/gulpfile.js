var gulp = require("gulp"),
    sass = require('gulp-sass')(require('sass')),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    sourcemaps = require("gulp-sourcemaps");

// var browserSync = require("browser-sync").create();

var paths = {
    styles: {
        src: "./assets/sass/**/*.scss",
        dest: "./assets/dist/css"
    }
};

function style() {
    return (
        gulp
            .src(paths.styles.src)
            .pipe(sourcemaps.init())
            .pipe(sass())
            .on("error", sass.logError)
            .pipe(postcss([autoprefixer(), cssnano()]))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(paths.styles.dest))
            // .pipe(browserSync.stream())
    );
}

// function reload() {
//     browserSync.reload();
// }

function watch() {
    // browserSync.init({
    //     proxy: "localhost:8888",
    //     port: 8888,
    // });
    gulp.watch(paths.styles.src, style);
    // gulp.watch("./wp-content/themes/**/*", reload);
}

gulp.task('default', function () {
    watch()
});
