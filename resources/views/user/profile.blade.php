@extends('layouts.layout')
@section('title')
    Profile Page
@endsection
@section('content')
    @include('components.navbar')
    <section class="p-6">
        <h2 class="mb-4 text-3xl font-bold text-gray-900 text-center">Halaman Profile</h2>
        <div class="mx-auto max-w-2xl border border-[#dcdcdc] rounded-lg p-6">
            <form action="#">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="text" name="brand" id="brand"
                            class="w-full border-2 border-[#dcdcdc] rounded-lg opacity-65 focus:outline-none focus:border-primary focus:ring-primary p-2"
                            required="" placeholder="example@gmail.com">
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" name="price" id="price"
                            class="w-full border-2 border-[#dcdcdc] rounded-lg opacity-65 focus:outline-none focus:border-primary focus:ring-primary p-2"
                            required="" placeholder="azama mada">
                    </div>
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">No Handphone</label>
                        <input type="number" name="brand" id="brand"
                            class="w-full border-2 border-[#dcdcdc] rounded-lg opacity-65 focus:outline-none focus:border-primary focus:ring-primary p-2"
                            required="" placeholder="085742366452">
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Poin</label>
                        <input type="number" name="price" id="price"
                            class="w-full border-2 border-[#dcdcdc] rounded-lg opacity-65 focus:outline-none focus:border-primary focus:ring-primary p-2"
                            required="" placeholder="20000">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
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
