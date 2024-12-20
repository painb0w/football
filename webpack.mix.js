const mix = require('laravel-mix');

// Компиляция JS
mix.js('resources/js/app.js', 'public/js')
   .babelConfig({
      presets: [
         ['@babel/preset-env', { targets: '> 0.25%, not dead' }]
      ]
   });

// Компиляция SASS в CSS
mix.sass('resources/sass/styles.scss', 'public/css') // SASS в CSS
   .styles([
      'node_modules/bootstrap/dist/css/bootstrap.min.css', // Подключение Bootstrap
      'resources/css/app.css', // Подключение кастомных стилей
   ], 'public/css/all.css') // Сборка в один файл
   .sourceMaps(); // Карты кода для отладки

// Автозагрузка Bootstrap и jQuery
mix.autoload({
   jquery: ['$', 'window.jQuery', 'jQuery'],
   bootstrap: 'bootstrap',
});

// Включение версии файлов для production
if (mix.inProduction()) {
    mix.version();
}
