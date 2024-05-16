@extends('layouts.layout')
@section('title')
    Pickup Page
@endsection
@section('content')
    @include('components.navbar')
    <section class="p-6">
        <h2 class="mb-4 text-3xl font-bold text-gray-900 text-center">Pickup</h2>
        <p class="mb-4 text-sm text-gray-900 text-center max-w-lg mx-auto">Tukarkan sampahmu dengan kebaikan. Layanan pickup
            kami
            akan mengambil sampahmu dan mengubahnya menjadi sesuatu
            yang berarti.</p>
        <div class="mx-auto max-w-2xl border border-[#dcdcdc] rounded-lg p-6">
            <form action="#">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Jenis Sampah</label>
                        <select id="category"
                            class="w-full border-2 border-[#dcdcdc] rounded-lg opacity-65
                            focus:outline-none focus:border-primary focus:ring-primary p-2">
                            <option selected="">Select category</option>
                            <option value="Kertas">Kertas</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                            Pengambilan</label>
                        <input type="date" name="price" id="price"
                            class="w-full border-2 border-[#dcdcdc] rounded-lg opacity-65 focus:outline-none focus:border-primary focus:ring-primary p-2"
                            required="" placeholder="azama mada">
                    </div>
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Berat Sampah</label>
                        <input type="number" name="brand" id="brand"
                            class="w-full border-2 border-[#dcdcdc] rounded-lg opacity-65 focus:outline-none focus:border-primary focus:ring-primary p-2"
                            required="" placeholder="085742366452">
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Jam Pengambilan</label>
                        <input type="time" name="price" id="price"
                            class="w-full border-2 border-[#dcdcdc] rounded-lg opacity-65 focus:outline-none focus:border-primary focus:ring-primary p-2"
                            required="" placeholder="20000">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Pesan</label>
                        <textarea id="description" rows="8"
                            class="w-full border-2 border-[#dcdcdc] rounded-lg opacity-65 focus:outline-none focus:border-primary focus:ring-primary p-5"
                            placeholder="Your description here"></textarea>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <button type="submit"
                        class="w-full  items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:ring-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </section>
    @include('components.footer')
@endsection
