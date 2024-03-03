<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/build.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>
      <nav class="bg-white shadow-md dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-md p-2 mx-auto">
            <div class="text-2xl font-shadow">Simple Gallery</div>
            <div class="flex gap-1">
                <a href="/login"  class="bg-biru-muda px-5 py-1 text-white rounded-lg">Masuk</a> 
                <a href="/register"  class="bg-gray-300 px-5 py-1 rounded-lg">Daftar</a> 
            </div>
        </div>
    </nav>
@yield('isi2')
</body>
<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</html>