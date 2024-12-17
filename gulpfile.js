const gulp = require("gulp");
const uglify = require("gulp-uglify"); // JSファイルを圧縮
const rename = require("gulp-rename"); // ファイル名を変更

// JavaScriptのミニファイタスク
gulp.task("minify-js", function () {
  return gulp
    .src("assets/js/app.js") // 元のJSファイルの場所
    .pipe(uglify()) // 圧縮
    .pipe(rename({ suffix: ".min" })) // ファイル名を変更
    .pipe(gulp.dest("assets/js")); // 出力先
});

// 変更を監視して自動実行
gulp.task("watch", function () {
  gulp.watch("assets/js/app.js", gulp.series("minify-js"));
});

// デフォルトタスク
gulp.task("default", gulp.series("minify-js", "watch"));
