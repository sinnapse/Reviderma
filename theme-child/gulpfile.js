var gulp = require("gulp"),
  sass = require("gulp-sass"),
  notify = require("gulp-notify"),
  concat = require("gulp-concat"),
  uglify = require("gulp-uglify"),
  babel = require("gulp-babel"),
  minCSS = require("gulp-clean-css"),
  autoPrefixer = require("gulp-autoprefixer");

// Configuration SASS with Notification Error
gulp.task("sass", () => {
  return gulp
    .src("assets/src/sass/**/*.scss")
    .pipe(concat("style.min.css")) // Concat
    .pipe(
      sass({ outputStyle: "compressed" }).on(
        "error",
        notify.onError({
          title: "Tem um erro no style.scss",
          message: "<%= error.message %>"
        })
      )
    )

    .pipe(
      autoPrefixer({
        browsers: ["last 2 versions"]
      })
    )
    .pipe(minCSS())
    .pipe(gulp.dest("assets/css"));
});

// Configuration Javascript and Concat all types JS
gulp.task("js", () => {
  return gulp
    .src("assets/src/js/**/*.js")
    .pipe(
      babel({
        presets: ["env"]
      })
    )
    .pipe(uglify())
    .pipe(concat("script.min.js")) // Concat
    .pipe(gulp.dest("assets/js"));
});

// Configuration watch for auto-run
gulp.task("watch", () => {
  gulp.watch("assets/src/sass/**/*.scss", ["sass"]);
  gulp.watch("assets/src/js/**/*.js", ["js"]);
});

// Configuration Default
gulp.task("default", ["sass", "js", "watch"]);
