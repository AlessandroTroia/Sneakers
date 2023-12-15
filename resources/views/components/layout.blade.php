<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Sneakers</title>
    <link rel="icon" type="image/x-icon" href="/img/logo/logo2.png">
  </head>
  <body>
    {{$slot}}
  </body>
  <script src="https://kit.fontawesome.com/9d2cacc5ef.js" crossorigin="anonymous"></script>
</html>