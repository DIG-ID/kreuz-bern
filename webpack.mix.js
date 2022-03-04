// webpack.mix.js

let mix = require("laravel-mix");

mix
  .setPublicPath("build")
  .setResourceRoot("./")
  .js("assets/js/main.js", "build")
  .sass("assets/sass/main.scss", "build")
  .sass("assets/sass/admin-login.sass", "build")

  .disableNotifications()
  .browserSync({
    proxy: "localhost/kreuzbern",
    files: ["./**/*.php", "./build/*.js", "./build/*.css"]
  });

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}