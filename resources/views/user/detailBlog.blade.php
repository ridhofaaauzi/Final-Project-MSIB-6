@extends('layouts.layout')
@section('title')
    Blog Detail Page
@endsection
@section('content')
    @include('components.navbar')
    <section class="z-0 p-6">
        <div class="w-full flex justify-center flex-col px-20 mt-10">
            <h1 class="text-3xl font-semibold mb-5 text-center">Memahami Bahaya Sampah Plastik: Ancaman Lingkungan yang Terus
                Meningkat
            </h1>
            <img src="{{ asset('assets/images/blog/bg-detailblog.png') }}" alt="" class="w-full rounded-lg h-fit">
            <span class="text-sm text-[#404040] mt-5">
                Andrew Garcia - 14 Apr 2024
            </span>
            <p class="mt-5 text-[#404040]">
                Sampah plastik merupakan salah satu masalah lingkungan yang mendesak dan terus berkembang di seluruh dunia.
                Dibuat untuk kenyamanan dan daya tahan yang lama, plastik sebenarnya menjadi momok yang menakutkan bagi
                lingkungan kita. Setiap tahun, jutaan ton sampah plastik mencemari lautan, mengancam kehidupan satwa laut,
                dan merusak ekosistem yang sensitif.

                Keberadaan sampah plastik memiliki dampak yang merusak tidak hanya bagi lingkungan, tetapi juga bagi
                kesehatan manusia. Sampah plastik yang terbuang di lautan sering kali terurai menjadi mikroplastik, yang
                kemudian tertelan oleh hewan laut. Mikroplastik ini kemudian dapat masuk ke dalam rantai makanan, mencapai
                manusia melalui ikan yang dikonsumsi. Studi telah menunjukkan bahwa mikroplastik dapat menyebabkan berbagai
                masalah kesehatan, mulai dari gangguan hormonal hingga kerusakan organ dalam.
            </p>
            <p class="mt-5 text-[#404040]">
                Upaya untuk mengatasi masalah sampah plastik memerlukan kolaborasi global dan tindakan nyata dari individu,
                pemerintah, dan industri. Langkah-langkah seperti pengurangan penggunaan plastik sekali pakai, pengembangan
                alternatif ramah lingkungan, serta peningkatan infrastruktur daur ulang merupakan beberapa solusi yang dapat
                diadopsi. Selain itu, pendidikan dan kesadaran masyarakat tentang pentingnya pengelolaan sampah yang
                bertanggung jawab juga sangat penting untuk mengurangi jumlah sampah plastik yang mencemari lingkungan.

                Sampah plastik bukanlah masalah yang dapat diabaikan, tetapi tantangan yang harus segera diatasi demi
                menjaga keberlanjutan planet ini. Dengan kesadaran dan tindakan yang tepat, kita dapat mengurangi dampak
                negatif sampah plastik dan mewujudkan lingkungan yang lebih bersih dan sehat untuk generasi mendatang.
            </p>
        </div>
    </section>
    @include('components.footer')
@endsection
