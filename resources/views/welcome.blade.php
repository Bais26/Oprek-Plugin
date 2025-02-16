<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLUGIN</title>
    <!-- Memuat font Poppins dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="text-white font-[Poppins]">
    <!-- Navbar -->
    <div class="text-black">
        <nav class="flex justify-between items-center py-4 px-6 container mx-auto relative">
          <a href="/"> <img class="w-12" src="/images/Logo.png" alt=""></a>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:text-gray-400">Kelas</a></li>
                <li><a href="#" class="hover:text-gray-400">Literasi</a></li>
                <li><a href="#" class="hover:text-gray-400">Acara</a></li>
                <li><a href="#" class="hover:text-gray-400">Penghargaan</a></li>
            </ul>
            <button class="bg-red-500 text-white px-4 py-2 rounded-lg">Masuk</button>
        </nav>
    </div>

    <!-- Hero Section -->
    <div class="container mx-auto">
        <div class="flex justify-between container mx-auto mt-24">
            <div class="text-black">
                <h1 class="text-[100px] font-bold tracking-[20px]">
                    PLUGIN
                </h1>
                <div class="flex gap-8">
                    <span class="text-[26px] font-semibold">
                        Passionate</span>
                    <span class="text-[26px] font-semibold">
                        Learning</span>
                    <span class="text-[26px] font-semibold">
                        Unity</span>
                    <span class="text-[26px] font-semibold">
                        Global</span>
                    <span class="text-[26px] font-semibold">
                        Inovate</span>
                    <span class="text-[26px] font-semibold">
                        Nationality</span>


                </div>
                <div
                    class="w-60 h-[60px] border border-[#da0138] mt-24 rounded-[10px] justify-center items-center inline-flex overflow-hidden">
                    <div class="text-[#da0138] text-xl font-normal">Daftar Komunitas</div>
                </div>
            </div>
            <div class="">
                <img src="images/Hero.png" alt="">
            </div>
        </div>
        <div class="text-black text-xl flex justify-center gap-32 mt-20">
            <div class="flex gap-4 items-center">
                <img src="images/Kebersamaan.png" alt="">
                <p class="">kebersamaan</p>
            </div>
            <div class="flex gap-4 items-center">
                <img src="images/Kurikulum.png" alt="">
                <p class="">kurikulum sesuai industri</p>
            </div>
            <div class="flex gap-4 items-center">
                <img src="images/Project.png" alt="">
                <p class="">Terlibat berbagai projekk</p>
            </div>
        </div>
    </div>

    <div class="bg-[#F3F5F7] mt-24 overflow-hidden py-12">
        <div class="text-center text-black text-4xl font-bold font-['Poppins']">Alumni PLUGIN</div>
        <div class="text-center text-black text-xl font-normal font-['Poppins'] mt-2">
            Alumni Plugin yang sudah berada di dunia industri
        </div>

        <div class="flex justify-center mt-8">
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
    </div>
    {{-- kelas --}}
    <section class="text-black body-font my-12">
        <div class="text-center">
            <h1 class="text-4xl font-bold">Daftar Kelas</h1>
            <p class="mt-6 w-[700px] flex items-center justify-center mx-auto text-xl">Pelajari berbagai topik seputar software
                enginering dan design untuk masyarakat umum, siswa, mahasiswa dan fresh graduate dengan pendekatan yang
                lebih intens dengan mentor.</p>
        </div>
        <div class="container px-5 mt-12 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div
                        class="h-full shadow-md bg-[#F3F5F7] border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-72 md:h-36 w-full object-cover object-center" src="images/python.png"
                            alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">WEBSITE</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Web Frontend Development</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings
                                jianbing microdosing tousled waistcoat.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">Info Detail
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <span
                                    class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>1.2K
                                </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>6
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div
                        class="h-full shadow-md bg-[#F3F5F7] border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-72 md:h-36 w-full object-cover object-center" src="images/ai.png"
                            alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">WEBSITE</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Web Backend Development</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings
                                jianbing microdosing tousled waistcoat.</p>
                            <div class="flex items-center flex-wrap">
                                <a class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">Info Detail
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <span
                                    class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>1.2K
                                </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>6
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div
                        class="h-full shadow-md bg-[#F3F5F7] border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-72 md:h-36 w-full object-cover object-center" src="images/laravel.png"
                            alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">WEBSITE</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Laravel Development</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings
                                jianbing microdosing tousled waistcoat.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">Info Detail
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <span
                                    class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>1.2K
                                </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>6
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="w-60 h-[60px] border border-[#da0138] mt-12 rounded-[10px] flex mx-auto justify-center items-center overflow-hidden">
                <div class="text-[#da0138] text-xl font-normal">Selengkapnya</div>
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
                <div class='w-1/2 lg:w-1/4 mdw-full px-4 flex-col items-start'>
                    <h2 class='text-red-500 font-medium mb-3'>Home Base</h2>
                    <nav class='list-none mb-10 md:mx-0'>
                        <a class="flex gap-2 my-2" href="">
                            <img src='https://res.cloudinary.com/devloops7/image/upload/v1679613165/plugin/newIconsWebProfile/icon-homebase_nithgk.svg'
                            alt='Tegal, Jawa Tengah, Indonesia' /> Tegal, Jawa Tengah, Indonesia
                        </a>
                        <a class="flex gap-2 my-2" href="">
                            <img src='https://res.cloudinary.com/devloops7/image/upload/v1679613167/plugin/newIconsWebProfile/icon-mail_g0p3jj.svg'
                            alt='plugintegal@gmail.com' /> plugintegal@gmail.com
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

</html>
