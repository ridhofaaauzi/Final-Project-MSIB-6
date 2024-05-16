<header>
    <nav class="flex justify-between items-center w-[92%] mx-auto">
        <div>
            <a href="{{ route('user.index') }}">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" class="lg:max-w-52 max-w-40">
            </a>
        </div>
        <div
            class="nav-links z-10 md:static absolute bg-white lg:bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] w-full md:w-auto flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:justify-center md:gap-[4vw] gap-8">
                <li>
                    <a class="hover:text-primary" href="{{ route('user.blog') }}">Blog</a>
                </li>
                <li class="relative">
                    <button class="outline-none focus:outline-none hover:text-primary" id="menu-btn">
                        Layanan
                    </button>
                    <div class="lg:absolute hidden bg-white right-[-8] rounded-md p-2 border border-slate-300 w-40 mt-3 z-10"
                        id="dropdown">
                        <ul class="spac-y-2">
                            {{-- <li>
                                <a href="#"
                                    class="flex p-2 text-gray-600 rounded-md hover:text-primary">Artikel</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('user.penukaranSampah') }}"
                                    class="flex p-2 text-gray-600 rounded-md hover:text-primary">Tukar
                                    Sampah</a>
                            </li>
                            <li>
                                <a href="{{ route('user.tukarPoin') }}"
                                    class="flex p-2 text-gray-600 rounded-md hover:text-primary">Tukar
                                    Poin</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="hover:text-primary" href="{{ route('user.tentangKami') }}">Tentang</a>
                </li>
                <li>
                    <a class="hover:text-primary" href="{{ route('user.kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            <a href="{{ route('login') }}"
                class="border-2 border-primary bg-primary text-white lg:px-5 lg:py-2 cursor-pointer rounded-lg px-2 py-1 text-sm lg:text-lg">Masuk</a>
            <a href="{{ route('register') }}"
                class="border-2 border-primary lg:px-5 lg:py-2 cursor-pointer rounded-lg px-2 py-1 text-sm lg:text-lg">Daftar</a>
            <ion-icon onclick="onToggleMenu(this)" name="menu-outline"
                class="text-3xl cursor-pointer md:hidden"></ion-icon>
        </div>
    </nav>
</header>
<script>
    const navLinks = document.querySelector('.nav-links')

    function onToggleMenu(e) {
        e.name = e.name === 'close' ? 'menu' : 'close'
        navLinks.classList.toggle('top-[7%]')
    }
</script>
<script>
    window.addEventListener("DOMContentLoaded", () => {
        const menuBtn = document.querySelector("#menu-btn")
        const dropdown = document.querySelector("#dropdown")

        menuBtn.addEventListener("click", () => {
            dropdown.classList.toggle("hidden");
            dropdown.classList.toggle("flex");
        })
    })
</script>
