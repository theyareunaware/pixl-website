<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="color-scheme" content="dark" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>pixl</title>
  </head>

  <body
    class="bg-pixl-dark text-pixl-light flex sm:h-dvh gap-8 xl:gap-16 sm:overflow-clip px-4"
  >
  {{ $slot }}

  </body>
</html>
