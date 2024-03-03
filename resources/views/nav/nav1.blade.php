
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/build.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="fixed top-0 left-0 right-6 items-center bg-white w-full shadow-lg">
        <form action="/beranda_user" method="get">
        <div class="flex flex-wrap items-center max-w-screen-xl p-4 mx-auto px-5">
        <div class=" text-2xl font-shadow ">Simple Gallery</div>
        
        <input type="w-50 text" class="rounded-full  w-[300px] bg-cari text-justify px-4 mx-auto " placeholder="Cari Foto ..." name="cari"> 
    </form>
        <div class=" px-10 mr-[500px]">
            <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer ml-auto">
                <a href="/upload_foto" class="hover:bg-gray-200 py-4 px-6">Unggah Foto</a>
                <a href="/album" class="hover:bg-gray-200 py-4 px-6">Album</a>
                <a href="/beranda_user" class="hover:bg-gray-200 py-4 px-6">Beranda</a>
            </ul>
            <img src="/foto/{{ old('foto_profil', Auth::User()->url) }}" alt="" class="w-10 h-10 right-[200px] rounded-full " data-dropdown-toggle="user-dropdown-menu">
            <!-- Drop Down -->
            <div class="z-50 hidden my-2 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow "
            id="user-dropdown-menu">
            <ul class="py-1" role="none">
                <li>
                    <a href="/beranda_user"
                    class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem">
                    <div class="inline-flex text-center items-center">
                        Beranda
                    </div>
                </a>
            </li>
            <li>
                <a href="/upload_foto"
                        class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        role="menuitem">
                        <div class="inline-flex text-center items-center">
                            Upload Foto
                        </div>
                    </a>
                </li>
            <li>
                <a href="/album"
                        class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        role="menuitem">
                        <div class="inline-flex text-center items-center">
                            Album
                        </div>
                    </a>
                </li>
                <li>
            <li>
                <a href="/update_password"
                        class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        role="menuitem">
                        <div class="inline-flex text-center items-center">
                            Change Password
                        </div>
                    </a>
                </li>
                <li>
            <li>
                <a href="/profile"
                        class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        role="menuitem">
                        <div class="inline-flex text-center items-center">
                            Profile
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/logout"
                    class="px-5 py-5 text-sm text-gray-700 hover:bg-gray-100"role="menuitem">
                    <div class="inline-flex text-center items-center">
                        Log Out
                    </a>
                </div>
                    </a>
                </li>
            </ul>
        </div>
  
        </div>
    </nav>
    @yield('isi')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</html>
    </body>