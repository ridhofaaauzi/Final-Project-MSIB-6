@extends('layouts.layout')
@section('title')
    Tentang Kami
@endsection
@section('content')
    @include('components.navbar')
    <section>
        <div class="bg-[#CFEDE1] w-full h-fit lg:h-[750px]">
            <div
                class="w-full h-fit lg:h-[750px] p-6 lg:flex lg:justify-between lg:items-center flex justify-center items-center">
                <div class="lg:w-1/2
                flex justify-center items-center">
                    <img src="{{ asset('assets/images/tentang-kami/bg-about.png') }}" alt="img-solusi"
                        class="w-1/2 hidden lg:flex" />
                </div>
                <div class="mb-14 lg:mb-0 lg:w-1/2">
                    <h1
                        class="xl:text-4xl font-bold uppercase max-w-xl leading-none text-center lg:text-left lg:leading-tight mb-5 text-2xl">
                        Tentang Kami</h1>
                    <p class="xl:text-lg max-w-xl text-lg text-center lg:text-justify" style="line-height: 2;">
                        WasteCycle
                        merupakan
                        platform untuk
                        melakukan pertukaran sampah yang dimana sampah tersebut bisa ditukarkan dan dari pertukaran tersebut
                        user akan mendapatkan sebuah reward poin. Selain itu terdapat juga artikel-artikel mengenai sampah.
                        Hal tersebut dilakukan untuk mengurangi sampah yang setiap tahunnya mengalami peningkatan oleh
                        karena itu aplikasi ini dibuat untuk mengurangi sampah serta dapat di daur ulang kembali, dan bisa
                        menjadi daya jual.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full h-fit lg:h-auto p-6">
        <h1 class="lg:text-5xl uppercase font-semibold text-center mt-10 text-3xl">Tim Kami</h1>
        <div class="flex items-center justify-center container mx-auto mt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <div
                    class="rounded-xl border border-[#dcdcdc] bg-[#92E3A9] bg-opacity-5 cursor-pointer hover:scale-105 hover:transition-all">
                    <div class="p-5 flex flex-col justify-center items-center text-center">
                        <div class="rounded-xl overflow-hidden mt-10">
                            <img src="{{ asset('assets/images/tentang-kami/bg-profile.png') }}" alt="icon-profile">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-semibold mt-3">Lalu Fathurrabbani</h5>
                        <p class="text-[#808080] text-sm mt-3 max-w-72 mb-10">Fathur pada tim ini memiliki peran sebagai
                            Project Manager.</p>
                    </div>
                </div>
                <div
                    class="rounded-xl border border-[#dcdcdc] bg-[#92E3A9] bg-opacity-5 cursor-pointer hover:scale-105 hover:transition-all">
                    <div class="p-5 flex flex-col justify-center items-center text-center">
                        <div class="rounded-xl overflow-hidden mt-10">
                            <img src="{{ asset('assets/images/tentang-kami/bg-profile.png') }}" alt="icon-profile">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-semibold mt-3">Salma Latifa Azzahra</h5>
                        <p class="text-[#808080] text-sm mt-3 max-w-72 mb-10">Salma pada tim ini memiliki peran sebagai
                            UI/UX Designer.</p>
                    </div>
                </div>
                <div
                    class="rounded-xl border border-[#dcdcdc] bg-[#92E3A9] bg-opacity-5 cursor-pointer hover:scale-105 hover:transition-all">
                    <div class="p-5 flex flex-col justify-center items-center text-center">
                        <div class="rounded-xl overflow-hidden mt-10">
                            <img src="{{ asset('assets/images/tentang-kami/bg-profile.png') }}" alt="icon-profile">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-semibold mt-3 max-w-md">Bona Gabe Virdo Simanullang</h5>
                        <p class="text-[#808080] text-sm mt-3 max-w-72 mb-10">Bona pada tim ini memiliki peran sebagai
                            Devops.</p>
                    </div>
                </div>
                <div
                    class="rounded-xl border border-[#dcdcdc] bg-[#92E3A9] bg-opacity-5 cursor-pointer hover:scale-105 hover:transition-all">
                    <div class="p-5 flex flex-col justify-center items-center text-center">
                        <div class="rounded-xl overflow-hidden mt-10">
                            <img src="{{ asset('assets/images/tentang-kami/bg-profile.png') }}" alt="icon-profile">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-semibold mt-3">Ridho Fauzi Grafika</h5>
                        <p class="text-[#808080] text-sm mt-3 max-w-72 mb-10">Ridho pada tim ini memiliki peran sebagai
                            Frontend Developer.</p>
                    </div>
                </div>
                <div
                    class="rounded-xl border border-[#dcdcdc] bg-[#92E3A9] bg-opacity-5 cursor-pointer hover:scale-105 hover:transition-all">
                    <div class="p-5 flex flex-col justify-center items-center text-center">
                        <div class="rounded-xl overflow-hidden mt-10">
                            <img src="{{ asset('assets/images/tentang-kami/bg-profile.png') }}" alt="icon-profile">
                        </div>
                        <h5 class="text-2xl md:text-3xl font-semibold mt-3">Dede Munawar Risman</h5>
                        <p class="text-[#808080] text-sm mt-3 max-w-72 mb-10">Risman pada tim ini memiliki peran sebagai
                            Backend Developer</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('components.footer')
@endsection
