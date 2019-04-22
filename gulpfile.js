const browsersync = require("browser-sync").create();
const gulp = require("gulp");
const sass = require("gulp-sass");
const concat = require("gulp-concat");
const imagemin = require("gulp-imagemin");
const newer = require("gulp-newer");
const flatten = require("gulp-flatten");
const del = require("del");


// BrowserSync
function browserSync(done) {
  browsersync.init({
    server: {
      baseDir: "./"
    },
    port: 3000
  });
  done();
}

// BrowserSync Reload
function browserSyncReload(done) {
  browsersync.reload();
  done();
}



// Optimize Images
function images() {
  return gulp
    .src(["./src/**/*.jpg", "./src/**/*.png", "./src/**/*.svg"])
    .pipe(newer("./temp/img"))
    .pipe(
      imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.jpegtran({ progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),
        imagemin.svgo({
          plugins: [
            {
              removeViewBox: false,
              collapseGroups: true
            }
          ]
        })
      ])
    )
    .pipe(gulp.dest("./temp/img"))
    .pipe(flatten({ includeParents: 0 }))
    .pipe(gulp.dest('views/img'))
//del(["./build/img/*", "!./build/img/*.png", "!./build/img/*.jpg", "!./build/img/*.svg"])
    .pipe(browsersync.stream());
}


function clearImg() {
   return  del("./temp/img/*");
}

function clearCss() {
   return  del("./temp/css/*");
}



// CSS task
function css() {
  return gulp
    .src(["./src/**/*.scss", "./src/**/*.sass"])
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(gulp.dest("./temp/css"))
    .pipe(concat("style.css"))
    .pipe(gulp.dest("./views/css"))    
    .pipe(browsersync.stream());
}
 
function scripts() {
   return gulp
    .src("./src/**/*.js") 
    .pipe(concat("all.js"))
    .pipe(gulp.dest("./views/js"))
    .pipe(browsersync.stream());
}


// Watch files
function watchFiles() {
  gulp.watch("./src/**/*.scss", gulp.series(css , clearCss));
  gulp.watch("./src/**/*.js", scripts);
  gulp.watch(["./src/**/*.jpg", "./src/**/*.png", "./src/**/*.svg"], images);
  gulp.watch(
    [
     "./src/**/*",
      "./src/**/*",
      "./src_css/**/*",
     "./*.html"
    ],
     browserSyncReload);
}

// define complex tasks
const watch = gulp.parallel(watchFiles, browserSync);

// export tasks
exports.css = css;
exports.scripts = scripts;
exports.watch = watch;
exports.default = watch;
exports.images = images;
exports.clear = clearImg;
exports.build = gulp.series(css, clearCss, scripts, images);
