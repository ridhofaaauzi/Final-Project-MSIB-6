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
        <div class="flex items-center gap-6 z-50">
            @auth
                <div class="relative" id="dropdownButton">
                    <div onclick="toggleDropdown()"
                        class="border-solid border-primary border-[2px] px-5 py-2 rounded-lg cursor-pointer font-bold flex justify-between items-center w-[200px] bg-white shadow-sm">
                        <p class="text-primary">
                            {{ auth()->user()->username }}
                        </p>
                        <svg fill="#000000" height="15" width="15" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330 330" xml:space="preserve">
                            <path id="XMLID_225_"
                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                                          c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                                          s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                        </svg>
                    </div>
                    <div class="rounded border-[2px] border-primary bg-white absolute top-[50px] w-[250px] shadow-md hidden"
                        id="dropdown">
                        <div class="cursor-pointer hover:bg-primary p-4 hover:text-white">
                            <a href="{{ route('admin.index') }}"><i class="fa-solid fa-gauge fa-lg"></i> Dashboard</a>
                        </div>
                        <div class="cursor-pointer hover:bg-primary p-4 hover:text-white ">
                            <a href="{{ route('user.profile') }}"><i class="fa-solid fa-user fa-lg"></i> Profile</a>
                        </div>
                        <div class="cursor-pointer hover:bg-primary p-4 hover:text-white">
                            <a href="{{ route('user.tukarPoin') }}"><i class="fa-solid fa-hand-point-up fa-lg"></i> Tukar
                                Poin</a>
                        </div>
                        <div class="cursor-pointer hover:bg-primary p-4 hover:text-white">
                            <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket fa-lg"></i> Logout</a>
                        </div>
                    </div>
                </div>
            @endauth
            @guest
                <a href="{{ route('login') }}"
                    class="border-2 border-primary bg-primary text-white lg:px-5 lg:py-2 cursor-pointer rounded-lg px-2 py-1 text-sm lg:text-lg">Masuk</a>
                <a href="{{ route('register') }}"
                    class="border-2 border-primary lg:px-5 lg:py-2 cursor-pointer rounded-lg px-2 py-1 text-sm lg:text-lg">Daftar</a>
                <ion-icon onclick="onToggleMenu(this)" name="menu-outline"
                    class="text-3xl cursor-pointer md:hidden"></ion-icon>
            @endguest

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
<script>
    function toggleDropdown() {
        let dropdown = document.querySelector('#dropdownButton #dropdown');
        dropdown.classList.toggle('hidden')
    }
</script>
