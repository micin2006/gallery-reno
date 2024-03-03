@extends('nav.nav2')
@section('isi2')
    <section class="">
        <div class="flex flex-col gap-4">
            <h3 class="mt-4 text-3xl text-center font-shadow">ABADIKAN MOMEN ANDA<BR>DISINI
            </h3>
        </div>
        </section>
        &nbsp;
        <section>
        <div class="flex justify-center gap-4">
            <div>
                <div class="flex flex-col gap-4">
                        <div class="">
                            <img class= "rounded-lg w-[400px] h-[240px] " src="{{ asset('assets/7.jpg') }}" alt=""></div>
                        <div class="">
                            <img class= "rounded-lg w-[400px] h-[240px] " src="{{ asset('assets/8.jpg') }}" alt="">
                        </div>
                        </div>
                        </div>
                    <div class="">
                        <img class= "rounded-lg w-[350px] "src="{{ asset('assets/9.jpg') }}" alt=""> </div>
                </div>
            </div>
        </div>
    </section>
@endsection
