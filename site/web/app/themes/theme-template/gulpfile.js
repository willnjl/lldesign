const gulp = require("gulp");
const { task, series, watch, dest } = require("gulp");
const browserSync = require("browser-sync");
const reload = browserSync.reload;
const autoprefixer = require("gulp-autoprefixer");
const rename = require("gulp-rename");
const cleanCSS = require("gulp-clean-css");

// Local site URL //////////////////////////////////
const localUrl = "http://lldesigns.test/";

let localOptions = {
  proxy: localUrl,
};

let staticOptions = {
  server: {
    baseDir: "./",
  },
};

///////////////.//////////////////////////////////

task("browser-sync", (cb) => {
  browserSync.init(localOptions);

  cb();
});

task("clean-css", () => {
  return gulp
    .src("./css/style.css")
    .pipe(autoprefixer())
    .pipe(rename({ suffix: ".min" }))
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(dest("./css/"));
});

let browserReload = (cb) => {
  reload();
  cb();
};

task("watcher", () => {
  watch("./**/*.php", browserReload);
  watch("./**/*.js", browserReload);
  watch("./css/style.css", series("clean-css", browserReload));
});

task("default", series("browser-sync", "watcher"));
