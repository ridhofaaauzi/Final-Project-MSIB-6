@extends('layouts.layout')
@section('title')
    Home Page
@endsection
@section('content')
    @include('components.navbar')
    <div class="flex flex-col justify-between items-center gap-10 p-6 mt-10">
        <h1 class="text-4xl font-semibold">Penukaran Point</h1>
        <p class="mb-4 text-sm text-gray-900 text-center max-w-lg mx-auto">Tukarkan sampahmu dengan kebaikan. Layanan pickup
            Pointmu dapat ditukar dengan pulsa, e-wallet, token listrik dan voucher minimarket.</p>
        <div class="flex items-center justify-center container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="rounded-xl border  p-5 bg-[#F4F4F4] flex justify-between items-center gap-10">
                    <div class="flex flex-col justify-center items-center text-center">
                        <div class="rounded-lg overflow-hidden bg-primary w-48 h-48 flex justify-center items-center">
                            <i class="fa-solid fa-phone text-5xl" style="color: white"></i>
                        </div>
                    </div>
                    <div class="">
                        <h5 class="text-2xl md:text-3xl font-semibold mt-3">Voucher Pulsa</h5>
                        <span class="mt-5 font-semibold">Rp. 100.000</span>
                        <p class="text-[#404040] text-xl mt-3 max-w-72 mb-5">
                            140000 Poin
                        </p>
                        <div class="flex w-full">
                            <a href="#"
                                class="bg-primary px-4 py-2 w-full text-white text-center rounded-lg">Tukar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
