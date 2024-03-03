@extends('nav.nav2')
@section('isi2')
    &nbsp;
    <div class="shadow-lg -gray-300 max-w-[360px] mx-auto mt-[100px] w-full mb-5">
        <form action="/proses_register" method="post">
            @csrf
    <div class="p-4 pb-8 shadow-md bg-gray-100 max-w-[360px] mx-auto mt-[100px] w-full">
        <div class="flex flex-col gap-4">
            <h3 class=" text-3xl text-center font-medium font-shadow ">REGISTER</h3>
            
        <div class="mb-2">
            <label for="default-input" class="mb-2 text-sm font-medium dark:text-white">Username</label>
            <input type="text" id="default-input" name="username" class="  border border-black text-sm rounded-lg w-full p-2.5 ">
        </div>  
        <div class="mb-2">
            <label for="default-input" class="mb-2 text-sm font-medium dark:text-white">Password</label>
            <input type="password" id="default-input" name="password" class=" border border-black rounded-lg w-full p-2.5 ">
            @error('password')
            <small class="ita;ic text-red-800"> {{ $message }}</small>
            @enderror
        </div> 
        <div class="mb-2">
            <label for="default-input" class="mb-2 text-sm font-medium dark:text-white">Bitrhday</label>
            <input type="date" id="default-input" name="tgl_lahir" class=" border border-black rounded-lg w-full p-2.5 ">
        </div> 
         
        <div class="text-center">
            <button type="submit" class=" border border-black bg-biru-muda p-2.5 w-full items-center rounded-lg text-white">Register</button>
        </form>
            <div = class="mb-4"></div>
            <p><a href="" class="text-center font-medium hover:text-white">Sudah punya akun? Login</p>
    </div>
    </div>
    </div>
    </div>
    @endsection