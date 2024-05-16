@extends('layouts.layout')
@section('content')
@section('title')
    Penukaran Sampah Page
@endsection
@include('components.navbar')
<div class="flex flex-col justify-between items-center gap-10 p-6 mt-10">
    <h1 class="text-4xl font-semibold">Halaman Penukaran sampah</h1>
    <div class="flex items-center justify-center container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="rounded-xl border  p-5 bg-[#F4F4F4]">
                <div class="flex flex-col justify-center items-center text-center">
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/images/penukaran-sampah/kertas.png') }}" alt="img-kertas">
                    </div>
                </div>
                <div class="flex justify-between mx-auto">
                    <h5 class="text-2xl md:text-3xl font-semibold mt-3">Kertas</h5>
                    <p class="text-[#404040] text-xl mt-3 max-w-72 mb-10">
                        100 Poin
                    </p>
                </div>
                <div class="flex w-full">
                    <a href="#" class="bg-primary px-4 py-2 w-full text-white text-center rounded-lg">Tukar</a>
                </div>
            </div>
            <div class="rounded-xl border  p-5 bg-[#F4F4F4]">
                <div class="flex flex-col justify-center items-center text-center">
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/images/penukaran-sampah/kertas.png') }}" alt="img-kertas">
                    </div>
                </div>
                <div class="flex justify-between mx-auto">
                    <h5 class="text-2xl md:text-3xl font-semibold mt-3">Kertas</h5>
                    <p class="text-[#404040] text-xl mt-3 max-w-72 mb-10">
                        100 Poin
                    </p>
                </div>
                <div class="flex w-full">
                    <a href="#" class="bg-primary px-4 py-2 w-full text-white text-center rounded-lg">Tukar</a>
                </div>
            </div>
            <div class="rounded-xl border  p-5 bg-[#F4F4F4]">
                <div class="flex flex-col justify-center items-center text-center">
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/images/penukaran-sampah/kertas.png') }}" alt="img-kertas">
                    </div>
                </div>
                <div class="flex justify-between mx-auto">
                    <h5 class="text-2xl md:text-3xl font-semibold mt-3">Kertas</h5>
                    <p class="text-[#404040] text-xl mt-3 max-w-72 mb-10">
                        100 Poin
                    </p>
                </div>
                <div class="flex w-full">
                    <a href="#" class="bg-primary px-4 py-2 w-full text-white text-center rounded-lg">Tukar</a>
                </div>
            </div>
            <div class="rounded-xl border  p-5 bg-[#F4F4F4]">
                <div class="flex flex-col justify-center items-center text-center">
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/images/penukaran-sampah/kertas.png') }}" alt="img-kertas">
                    </div>
                </div>
                <div class="flex justify-between mx-auto">
                    <h5 class="text-2xl md:text-3xl font-semibold mt-3">Kertas</h5>
                    <p class="text-[#404040] text-xl mt-3 max-w-72 mb-10">
                        100 Poin
                    </p>
                </div>
                <div class="flex w-full">
                    <a href="#" class="bg-primary px-4 py-2 w-full text-white text-center rounded-lg">Tukar</a>
                </div>
            </div>
            <div class="rounded-xl border  p-5 bg-[#F4F4F4]">
                <div class="flex flex-col justify-center items-center text-center">
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/images/penukaran-sampah/kertas.png') }}" alt="img-kertas">
                    </div>
                </div>
                <div class="flex justify-between mx-auto">
                    <h5 class="text-2xl md:text-3xl font-semibold mt-3">Kertas</h5>
                    <p class="text-[#404040] text-xl mt-3 max-w-72 mb-10">
                        100 Poin
                    </p>
                </div>
                <div class="flex w-full">
                    <a href="#" class="bg-primary px-4 py-2 w-full text-white text-center rounded-lg">Tukar</a>
                </div>
            </div>
            <div class="rounded-xl border  p-5 bg-[#F4F4F4]">
                <div class="flex flex-col justify-center items-center text-center">
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/images/penukaran-sampah/kertas.png') }}" alt="img-kertas">
                    </div>
                </div>
                <div class="flex justify-between mx-auto">
                    <h5 class="text-2xl md:text-3xl font-semibold mt-3">Kertas</h5>
                    <p class="text-[#404040] text-xl mt-3 max-w-72 mb-10">
                        100 Poin
                    </p>
                </div>
                <div class="flex w-full">
                    <a href="#" class="bg-primary px-4 py-2 w-full text-white text-center rounded-lg">Tukar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
@endsection
