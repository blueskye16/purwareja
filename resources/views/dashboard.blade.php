<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Dashboard</title>
</head>

<body class="">
    <nav class="sticky top-0 bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 z-10">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/images/logo-purwareja.png" class="h-8" alt="Logo Purwareja" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Desa Purwareja</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Beranda</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pemerintahan</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Potensi</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- hero-jumbotron --}}

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
            <div class="flex flex-col justify-center">
                <p class="text-gray-600 text-lg">Website Resmi</p>
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Pemerintahan Desa Purwareja</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Bersatu Untuk Purwareja
                    Maju</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Telusuri Konten
                        <svg class="w-3.5 h-3.5 ms-2 rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    {{-- <a href="#"
                        class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Learn more
                    </a> --}}
                </div>
            </div>
            <div>
                <div id="indicators-carousel" class="relative w-full z-0" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <video class="absolute block w-full h-full object-cover" controls>
                                <source src="/videos/vid-purwareja.mp4" type="video/mp4" alt="Purwareja video">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/images/bg-hero.jpg" class="absolute block w-full h-full object-cover"
                                alt="hero images">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/images/bg-hero.jpg" class="absolute block w-full h-full object-cover"
                                alt="hero images">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/images/bg-hero.jpg" class="absolute block w-full h-full object-cover"
                                alt="hero images">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/images/bg-hero.jpg" class="absolute block w-full h-full object-cover"
                                alt="hero images">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-10 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-1/2 left-0 z-30 flex items-center justify-center w-10 h-10 -translate-y-1/2 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-1/2 right-0 z-30 flex items-center justify-center w-10 h-10 -translate-y-1/2 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>


            </div>
        </div>
    </section>

    <main>

        {{-- Featured Article --}}
        <section class="max-w-full">
            <div class="px-20 text-center mx-auto">
                <h1 class="text-4xl font-semibold text-center border-t border-gray-200 mt-10 pt-5 px-5">Konten Unggulan
                </h1>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 mt-4 mx-6">
                <a href="#"
                    class="relative flex max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-auto lg:mx-0 hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="relative m-0 overflow-hidden rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                        <img src="/images/bg-hero.jpg" alt="featured image" class="antialiased" />
                    </div>
                    <div class="p-6">
                        <h4
                            class="block font-sans text-sm/5 font-normal tracking-normal text-blue-gray-900 antialiased">
                            Sabtu, 6 Juli 2024
                        </h4>
                        <p class="mt-1 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
                            Because it's about motivating the doers. Because I'm here to follow my dreams and inspire
                            others.
                        </p>
                    </div>
                </a>
                <a href="#"
                    class="relative flex max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-auto lg:mx-0 hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="relative m-0 overflow-hidden rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                        <img src="/images/bg-hero.jpg" alt="featured image" />
                    </div>
                    <div class="p-6">
                        <h4
                            class="block font-sans text-sm/5 font-normal tracking-normal text-blue-gray-900 antialiased">
                            Sabtu, 6 Juli 2024
                        </h4>
                        <p class="mt-1 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
                            Because it's about motivating the doers. Because I'm here to follow my dreams and inspire
                            others.
                        </p>
                    </div>
                </a>
                <a href="#"
                    class="relative flex max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-auto md:col-span-2 md:flex md:justify-center lg:col-span-1 lg:mx-0 hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="relative m-0 overflow-hidden rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                        <img src="/images/bg-hero.jpg" alt="featured image" />
                    </div>
                    <div class="p-6">
                        <h4
                            class="block font-sans text-sm/5 font-normal tracking-normal text-blue-gray-900 antialiased">
                            Sabtu, 6 Juli 2024
                        </h4>
                        <p class="mt-1 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
                            Because it's about motivating the doers. Because I'm here to follow my dreams and inspire
                            others.
                        </p>
                    </div>
                </a>
            </div>
        </section>

        {{-- Updated Article --}}
        <div class="bg-white pt-24 pb-14 sm:pt-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h1 class="text-4xl border-t border-gray-200 text-center pt-10">Artikel Terbaru</h1>
                <div
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article class="flex max-w-2xl flex-col items-start justify-between bg-gray-300 rounded-lg p-5">
                        <div class="flex items-center justify-between gap-x-4 text-xs w-full">
                            <a href="#"
                                class="relative z-10 rounded-full bg-orange-400 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                            <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Boost your conversion rate
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error
                                voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo
                                necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto
                                corrupti dicta.</p>
                        </div>
                        <a href="#"
                            class="mt-5 text-blue-500 hover:text-blue-700 hover:scale-125 hover:ease-out">
                            <p>Read More &raquo;</p>
                        </a>
                    </article>

                    <!-- More posts... -->
                </div>
            </div>
        </div>

        {{-- Pagination --}}
        <div class="max-w-full flex justify-center">
            <nav aria-label="Page navigation example">
                <ul class="flex items-center -space-x-px h-10 text-base">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


        {{-- Footer --}}
        <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
            <div class="mx-auto max-w-screen-xl text-center">
                <a href="#"
                    class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
                    {{-- <svg class="mr-2 h-8" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.2696 13.126C25.1955 13.6364 24.8589 14.3299 24.4728 14.9328C23.9856 15.6936 23.2125 16.2264 22.3276 16.4114L18.43 17.2265C17.8035 17.3575 17.2355 17.6853 16.8089 18.1621L14.2533 21.0188C13.773 21.5556 13.4373 21.4276 13.4373 20.7075C13.4315 20.7342 12.1689 23.9903 15.5149 25.9202C16.8005 26.6618 18.6511 26.3953 19.9367 25.6538L26.7486 21.7247C29.2961 20.2553 31.0948 17.7695 31.6926 14.892C31.7163 14.7781 31.7345 14.6639 31.7542 14.5498L25.2696 13.126Z"
                            fill="url(#paint0_linear_11430_22515)" />
                        <path
                            d="M23.5028 9.20133C24.7884 9.94288 25.3137 11.0469 25.3137 12.53C25.3137 12.7313 25.2979 12.9302 25.2694 13.1261L28.0141 14.3051L31.754 14.5499C32.2329 11.7784 31.2944 8.92561 29.612 6.65804C28.3459 4.9516 26.7167 3.47073 24.7581 2.34097C23.167 1.42325 21.5136 0.818599 19.8525 0.486816L17.9861 2.90382L17.3965 5.67918L23.5028 9.20133Z"
                            fill="url(#paint1_linear_11430_22515)" />
                        <path
                            d="M1.5336 11.2352C1.5329 11.2373 1.53483 11.238 1.53556 11.2358C1.67958 10.8038 1.86018 10.3219 2.08564 9.80704C3.26334 7.11765 5.53286 5.32397 8.32492 4.40943C11.117 3.49491 14.1655 3.81547 16.7101 5.28323L17.3965 5.67913L19.8525 0.486761C12.041 -1.07341 4.05728 3.51588 1.54353 11.2051C1.54233 11.2087 1.53796 11.2216 1.5336 11.2352Z"
                            fill="url(#paint2_linear_11430_22515)" />
                        <path
                            d="M19.6699 25.6538C18.3843 26.3953 16.8003 26.3953 15.5147 25.6538C15.3402 25.5531 15.1757 25.4399 15.0201 25.3174L12.7591 26.8719L10.8103 30.0209C12.9733 31.821 15.7821 32.3997 18.589 32.0779C20.7013 31.8357 22.7995 31.1665 24.7582 30.0368C26.3492 29.1191 27.7 27.9909 28.8182 26.7195L27.6563 23.8962L25.7762 22.1316L19.6699 25.6538Z"
                            fill="url(#paint3_linear_11430_22515)" />
                        <path
                            d="M15.0201 25.3175C14.0296 24.5373 13.4371 23.3406 13.4371 22.0588V21.931V11.2558C13.4371 10.6521 13.615 10.5494 14.1384 10.8513C13.3323 10.3864 11.4703 8.79036 9.17118 10.1165C7.88557 10.858 6.8269 12.4949 6.8269 13.978V21.8362C6.8269 24.775 8.34906 27.8406 10.5445 29.7966C10.6313 29.874 10.7212 29.9469 10.8103 30.0211L15.0201 25.3175Z"
                            fill="url(#paint4_linear_11430_22515)" />
                        <path
                            d="M28.6604 5.49565C28.6589 5.49395 28.6573 5.49532 28.6589 5.49703C28.9613 5.83763 29.2888 6.23485 29.6223 6.68734C31.3648 9.05099 32.0158 12.0447 31.4126 14.9176C30.8093 17.7906 29.0071 20.2679 26.4625 21.7357L25.7761 22.1316L28.8181 26.7195C34.0764 20.741 34.09 11.5388 28.6815 5.51929C28.6789 5.51641 28.67 5.50622 28.6604 5.49565Z"
                            fill="url(#paint5_linear_11430_22515)" />
                        <path
                            d="M7.09355 13.978C7.09354 12.4949 7.88551 11.1244 9.17113 10.3829C9.34564 10.2822 9.52601 10.1965 9.71002 10.1231L9.49304 7.38962L7.96861 4.26221C5.32671 5.23364 3.1897 7.24125 2.06528 9.83067C1.2191 11.7793 0.75001 13.9294 0.75 16.1888C0.75 18.0243 1.05255 19.7571 1.59553 21.3603L4.62391 21.7666L7.09355 21.0223V13.978Z"
                            fill="url(#paint6_linear_11430_22515)" />
                        <path
                            d="M9.71016 10.1231C10.8817 9.65623 12.2153 9.74199 13.3264 10.3829L13.4372 10.4468L22.3326 15.5777C22.9566 15.9376 22.8999 16.2918 22.1946 16.4392L22.7078 16.332C23.383 16.1908 23.9999 15.8457 24.4717 15.3428C25.2828 14.4782 25.5806 13.4351 25.5806 12.5299C25.5806 11.0468 24.7886 9.67634 23.503 8.93479L16.6911 5.00568C14.1436 3.53627 11.0895 3.22294 8.29622 4.14442C8.18572 4.18087 8.07756 4.2222 7.96875 4.26221L9.71016 10.1231Z"
                            fill="url(#paint7_linear_11430_22515)" />
                        <path
                            d="M20.0721 31.8357C20.0744 31.8352 20.0739 31.8332 20.0717 31.8337C19.6252 31.925 19.1172 32.0097 18.5581 32.0721C15.638 32.3978 12.7174 31.4643 10.5286 29.5059C8.33986 27.5474 7.09347 24.7495 7.09348 21.814L7.09347 21.0222L1.59546 21.3602C4.1488 28.8989 12.1189 33.5118 20.0411 31.8421C20.0449 31.8413 20.0582 31.8387 20.0721 31.8357Z"
                            fill="url(#paint8_linear_11430_22515)" />
                        <defs>
                            <linearGradient id="paint0_linear_11430_22515" x1="20.8102" y1="23.9532"
                                x2="23.9577" y2="12.9901" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1724C9" />
                                <stop offset="1" stop-color="#1C64F2" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_11430_22515" x1="28.0593" y1="10.5837"
                                x2="19.7797" y2="2.33321" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1C64F2" />
                                <stop offset="1" stop-color="#0092FF" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_11430_22515" x1="16.9145" y1="5.2045"
                                x2="4.42432" y2="5.99375" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0092FF" />
                                <stop offset="1" stop-color="#45B2FF" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_11430_22515" x1="16.0698" y1="28.846"
                                x2="27.2866" y2="25.8192" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1C64F2" />
                                <stop offset="1" stop-color="#0092FF" />
                            </linearGradient>
                            <linearGradient id="paint4_linear_11430_22515" x1="8.01881" y1="15.8661"
                                x2="15.9825" y2="24.1181" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1724C9" />
                                <stop offset="1" stop-color="#1C64F2" />
                            </linearGradient>
                            <linearGradient id="paint5_linear_11430_22515" x1="26.2004" y1="21.8189"
                                x2="31.7569" y2="10.6178" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0092FF" />
                                <stop offset="1" stop-color="#45B2FF" />
                            </linearGradient>
                            <linearGradient id="paint6_linear_11430_22515" x1="6.11387" y1="9.31427"
                                x2="3.14054" y2="20.4898" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1C64F2" />
                                <stop offset="1" stop-color="#0092FF" />
                            </linearGradient>
                            <linearGradient id="paint7_linear_11430_22515" x1="21.2932" y1="8.78271"
                                x2="10.4278" y2="11.488" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1724C9" />
                                <stop offset="1" stop-color="#1C64F2" />
                            </linearGradient>
                            <linearGradient id="paint8_linear_11430_22515" x1="7.15667" y1="21.5399"
                                x2="14.0824" y2="31.9579" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0092FF" />
                                <stop offset="1" stop-color="#45B2FF" />
                            </linearGradient>
                        </defs>
                    </svg> --}}
                    <img src="/images/logo-purwareja.png" alt="Logo Purwareja" width="50px" class="pr-2">
                    Desa Purwareja
                </a>
                <p class="my-6 text-gray-500 dark:text-gray-400">Open-source library of over 400+ web components and
                    interactive elements built for better web.</p>
                <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Premium</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Campaigns</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Affiliate Program</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">FAQs</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Contact</a>
                    </li>
                </ul>
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#"
                        class="hover:underline">Pemerintahan Desa Purwareja</a>. All Rights Reserved.</span>
            </div>
        </footer>
    </main>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
