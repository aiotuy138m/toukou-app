<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    @vite(['resources/js/app.js'])
    <title></title>
  </head>

  <body>
    <div id="counter">
        カウントアップ: @{{ counter}}
    </div>
  </body>
</html>