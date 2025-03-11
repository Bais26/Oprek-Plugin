<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLUGIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="text-white font-[Poppins]">
            <!-- Cek apakah ada pesan sukses -->
            @if (session('success'))
                <div class="mb-4 text-green-500 text-center">
                    <div id="successMessage">{{ session('success') }}</div>
                </div>

                <!-- Script untuk menampilkan alert atau pop-up -->
                <script>
                    window.onload = function() {
                        // Menampilkan alert dengan pesan dari session
                        alert(document.getElementById("successMessage").innerText);
                    };
                </script>
            @endif

    <script>
        function confirmLogout() {
            if (confirm("Apakah Anda yakin ingin logout?")) {
                document.getElementById('logout-form').submit();
            }
        }
    </script>
    <div class="text-black">
        <nav class="flex justify-between items-center py-4 px-6 container mx-auto relative">
            <a href="/"> <img class="w-12" src="/images/Logo.png" alt=""></a>

            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="lg:hidden text-black focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 12h18M3 6h18M3 18h18"></path>
                </svg>
            </button>

            <!-- Menu -->
            <ul id="menu" class="flex space-x-6 hidden lg:flex">
                <li><a href="#" class="hover:text-gray-400">Kelas</a></li>
                <li><a href="#" class="hover:text-gray-400">Literasi</a></li>
                <li><a href="#" class="hover:text-gray-400">Acara</a></li>
                <li><a href="#" class="hover:text-gray-400">Penghargaan</a></li>
            </ul>

            <!-- Authentication Buttons -->
            @auth
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button onclick="confirmLogout()" type="submit"
                        class="bg-red-500 text-white px-4 py-2 rounded-lg">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg hidden lg:block">Masuk</a>
            @endauth
        </nav>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="lg:hidden bg-white shadow-md w-full hidden">
            <ul class="flex flex-col items-center text-center py-4 px-6 gap-2">
                <li><a href="#" class="hover:text-gray-400">Kelas</a></li>
                <li><a href="#" class="hover:text-gray-400">Literasi</a></li>
                <li><a href="#" class="hover:text-gray-400">Acara</a></li>
                <li><a href="#" class="hover:text-gray-400">Penghargaan</a></li>
                <!-- Authentication Buttons inside the dropdown (mobile) -->
                @auth
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button onclick="confirmLogout()" type="submit"
                            class="bg-red-500 text-white px-4 py-2 rounded-lg">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="bg-red-500 text-white w-full py-2 rounded-lg">Masuk</a>
                @endauth
            </ul>
        </div>
    </div>



    <!-- Hero Section -->
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center mt-24">
            <!-- Left Section -->
            <div class="text-black text-center md:text-left mb-8 md:mb-0">
                <h1 class="text-[50px] md:text-[100px] font-bold tracking-[5px] md:tracking-[20px]">
                    PLUGIN
                </h1>
                <div class="flex flex-wrap justify-center md:justify-start gap-8 mt-4">
                    <span class="text-[20px] md:text-[26px] font-semibold">Passionate</span>
                    <span class="text-[20px] md:text-[26px] font-semibold">Learning</span>
                    <span class="text-[20px] md:text-[26px] font-semibold">Unity</span>
                    <span class="text-[20px] md:text-[26px] font-semibold">Global</span>
                    <span class="text-[20px] md:text-[26px] font-semibold">Innovate</span>
                    <span class="text-[20px] md:text-[26px] font-semibold">Nationality</span>
                </div>
                <div
                    class="w-60 h-[60px] border border-[#da0138] mt-8 rounded-[10px] justify-center items-center inline-flex overflow-hidden mx-auto md:mx-0">
                    <a href="/daftarkelas" class="text-[#da0138] text-xl font-normal">Daftar Komunitas</a>
                </div>
            </div>

            <!-- Right Section with Image -->
            <div class="w-full md:w-auto">
                <img src="images/Hero.png" alt="Hero Image" class="w-full md:w-auto hidden md:block ">
            </div>
        </div>

        <!-- Additional Information Section -->
        <div class="text-black text-xl flex flex-wrap justify-center gap-16 mt-20">
            <div class="flex gap-4 items-center">
                <img src="images/Kebersamaan.png" alt="Kebersamaan" class="w-12 h-12">
                <p class="hidden md:block">Kebersamaan</p>
            </div>
            <div class="flex gap-4 items-center">
                <img src="images/Kurikulum.png" alt="Kurikulum" class="w-12 h-12">
                <p class="hidden md:block">Kurikulum sesuai industri</p>
            </div>
            <div class="flex gap-4 items-center">
                <img src="images/Project.png" alt="Project" class="w-12 h-12">
                <p class="hidden md:block">Terlibat berbagai projek</p>
            </div>
        </div>
    </div>
    {{-- Alumni --}}
    <div class="bg-[#F3F5F7] mt-24 overflow-hidden py-12">
        <div class="text-center text-black text-4xl font-bold font-['Poppins']">Alumni PLUGIN</div>
        <div class="text-center text-black text-xl font-normal font-['Poppins'] mt-2">
            Alumni Plugin yang sudah berada di dunia industri
        </div>
        <div class="flex justify-center">
            <div class="mt-8 hidden md:block">
                <div class="grid grid-cols-6 gap-6 justify-center">
                    <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                        <img class="" src="images/bareksa.png" />
                    </div>
                    <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                        <img class="" src="images/brebes.png" />
                    </div>
                    <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                        <img class="" src="images/gojek.png" />
                    </div>
                    <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                        <img class="" src="images/icon.png" />
                    </div>
                    <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                        <img class="" src="images/kompas.png" />
                    </div>
                    <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                        <img class="" src="images/maxi.png" />
                    </div>
                    <div class="col-span-6 flex justify-center gap-6">
                        <div
                            class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                            <img class="" src="images/one.png" />
                        </div>
                        <div
                            class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                            <img class="" src="images/tokped.png" />
                        </div>
                        <div
                            class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                            <img class="" src="images/tiket.png" />
                        </div>
                        <div
                            class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                            <img class="" src="images/traveloka.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-4 block md:hidden">
        <div class="grid grid-cols-2 gap-6 justify-center ">
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/bareksa.png" />
            </div>
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/brebes.png" />
            </div>
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/gojek.png" />
            </div>
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/icon.png" />
            </div>
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/kompas.png" />
            </div>
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/maxi.png" />
            </div>
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/one.png" />
            </div>
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/tokped.png" />
            </div>
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/tiket.png" />
            </div>
            <div class="h-[80px] w-[187px] bg-white rounded-[10px] flex items-center justify-center shadow-md">
                <img class="" src="images/traveloka.png" />
            </div>
        </div>
    </div>
    </div>
    {{-- kelas --}}
    <section class="text-black body-font my-12">
        <div class="text-center flex flex-wrap md:flex-col items-center justify-center">
            <h1 class="text-4xl font-bold justify-center">Daftar Kelas</h1>
            <p class="mt-6 w-[700px] flex items-center justify-center mx-auto text-xl">Pelajari berbagai topik seputar
                software
                enginering dan design untuk masyarakat umum, siswa, mahasiswa dan fresh graduate dengan pendekatan yang
                lebih intens dengan mentor.</p>
        </div>
        <div class="container px-5 mt-12 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach ($kelas as $item)
                    <div class="p-4 md:w-1/3">
                        <div
                            class="h-full shadow-md bg-[#F3F5F7] border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- Gambar -->
                            <img class="lg:h-72 md:h-36 w-full object-cover object-center"
                                src="{{ asset('storage/' . $item->thumbnail) }}" alt="kelas">

                            <div class="p-6">
                                <!-- Kategori -->
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    {{ $item->category }}
                                </h2>
                                <!-- Judul Kelas -->
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                    {{ $item->title }}
                                </h1>
                                <!-- Deskripsi -->
                                <p class="leading-relaxed mb-3">
                                    {{ Str::limit($item->description, 100) }}
                                </p>
                                <div class="flex items-center flex-wrap">
                                    <!-- Link ke Detail Kelas -->
                                    <a href="{{ route('kelas.detail', $item->id) }}"
                                        class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        Info Detail
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div
                class="w-60 h-[60px] border border-[#da0138] mt-12 rounded-[10px] flex mx-auto justify-center items-center overflow-hidden">
                <a href="/daftarkelas" class="text-[#da0138] text-xl font-normal">Daftar Kelas</a>
            </div>
        </div>

    </section>
    

    <!-- Footer (commented out) -->
    <footer class='w-full relative bottom-0 text-gray-600 bg-[#F3F5F7]'>
        <div
            class='container px-0 lg:px-5  md:py-24 mx-auto flex lg:items-center items-start lg:flex-row lg:flex-nowrap flex-wrap flex-col'>
            <div class='flex-grow flex flex-wrap lg:pl-20 md:mt-0 mt-10 md:text-left items-start'>
                <div class='w-1/2 lg:w-1/4 md:w-full px-4 flex-col items-start'>
                    <h2 class='text-red-500 font-medium mb-3'>Sosial Media</h2>
                    <nav class='list-none mb-10 mx-0'>
                        <div>
                            <a class="flex gap-2 my-2" href=""><img
                                    src='https://res.cloudinary.com/devloops7/image/upload/v1679613165/plugin/newIconsWebProfile/icon-fb_w4gncf.svg'
                                    alt='PluginOfficiall' />PluginOfficiall
                            </a>
                            <a class="flex gap-2 my-2" href="">
                                <img src='https://res.cloudinary.com/devloops7/image/upload/v1679613165/plugin/newIconsWebProfile/icon-ig_ms4rce.svg'
                                    alt='PluginOfficiall' />PluginOfficiall
                            </a>
                        </div>
                    </nav>
                </div>
                <div class='w-1/2 lg:w-1/4 md:w-full px-4 flex-col items-start'>
                    <h2 class='text-red-500 font-medium mb-3'>Kelas</h2>
                    <nav class='list-none mx-0 mb-10'>
                        <a class="flex gap-2 my-2" href="">
                            <img src='https://res.cloudinary.com/devloops7/image/upload/v1679613169/plugin/newIconsWebProfile/icon-web_rzsz7s.svg'
                                alt='Web Developer' /> Web Developer
                        </a>
                        <a class="flex gap-2 my-2" href="">
                            <img src='https://res.cloudinary.com/devloops7/image/upload/v1679613167/plugin/newIconsWebProfile/icon-mobile_l7lisj.svg'
                                alt='Android Developer' /> Android Developer
                        </a>
                        <a class="flex gap-2 my-2" href="">
                            <img src='https://res.cloudinary.com/devloops7/image/upload/v1679613167/plugin/newIconsWebProfile/icon-uiux_jcixhd.svg'
                                alt='UI/UX Design' /> UI/UX Design
                        </a>
                        <a class="flex gap-2 my-2" href="">
                            <img src='https://res.cloudinary.com/devloops7/image/upload/v1679613165/plugin/newIconsWebProfile/icon-jaringan_opqtna.svg'
                                alt='Jaringan' /> Jaringan
                        </a>
                    </nav>
                </div>
                <div class='w-1/2 lg:w-1/4 mdw-full px-4 flex-col items-start'>
                    <h2 class='text-red-500 font-medium mb-3'>Tentang</h2>
                    <nav class='list-none mb-10 md:mx-0'>
                        <a class="flex gap-2 my-2" href="">
                            <img src='https://res.cloudinary.com/devloops7/image/upload/v1679613167/plugin/newIconsWebProfile/icon-sertifikat_f7g9ip.svg'
                                alt='Cek Sertifikat' /> Cek Sertifikat
                        </a>
                        <a class="flex gap-2 my-2" href="">
                            <img src='https://res.cloudinary.com/devloops7/image/upload/v1679613165/plugin/newIconsWebProfile/icon-kebijakan_yg0cfc.svg'
                                alt='Kebijakan Privasi' /> Kebijakan Privasi
                        </a>
                    </nav>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 flex flex-col items-start">
                    <h2 class="text-red-500 font-medium mb-3">Dashboard Base</h2>
                    <nav class="list-none mb-10 md:mx-0">
                        <a class="flex gap-2 my-2" href="">
                            <img src="https://res.cloudinary.com/devloops7/image/upload/v1679613165/plugin/newIconsWebProfile/icon-homebase_nithgk.svg"
                                alt="Tegal, Jawa Tengah, Indonesia" />
                            <span class="break-words">Tegal, Jawa Tengah, Indonesia</span>
                        </a>
                        <a class="flex gap-2 my-2" href="">
                            <img src="https://res.cloudinary.com/devloops7/image/upload/v1679613167/plugin/newIconsWebProfile/icon-mail_g0p3jj.svg"
                                alt="plugintegal@gmail.com" />
                            <span class="break-words w-full">{{
                                'plugintegal@gmail.com' }}</span>
                        </a>
                    </nav>
                </div>
                
            </div>
        </div>
        <div class=''>
            <div class='container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row'>
                <p class='text-gray-500 text-sm text-center sm:text-left'>© PLUGIN 2022</p>
            </div>
        </div>
    </footer>
</body>
<script>
    // Toggle the mobile menu
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>

</html>
