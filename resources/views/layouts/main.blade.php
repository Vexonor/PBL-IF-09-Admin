<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/apexcharts/dist/apexcharts.css">
    @vite('resources/css/app.css')
    @vite('resources/css/sidebar.css')
    @vite('resources/css/loader.css')
    @vite('resources/js/app.js')
    @vite('resources/js/sidebar.js')
    @vite('resources/js/loader.js')
</head>

<body class="font-poppins  [&::-webkit-scrollbar]:w-3
    [&::-webkit-scrollbar-track]:rounded-full
    [&::-webkit-scrollbar-track]:bg-gray-100
    [&::-webkit-scrollbar-thumb]:rounded-full
    [&::-webkit-scrollbar-thumb]:bg-gray-300
    dark:[&::-webkit-scrollbar-track]:bg-neutral-700
    dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
    <!-- Loader -->
    <!-- <div class="loader-wrapper fixed top-0 left-0 bg-Genoa flex justify-center items-center w-full h-full z-[9999]">
        <div class="loader">
            @include('components/loaders')
        </div>
    </div> -->

    <div class="flex h-full overflow-y-auto">
        <!-- Sidebar -->
        <div class="md:w-64 xl:w-[21.875rem]">
            @include('components/sidebar')
        </div>

        <!-- Main Content -->
        <div class="flex-grow flex flex-col">
            <!-- Header -->
            <div class="grid grid-cols-5 p-5">
                <!-- Title -->
                <div class="col-span-2 flex items-center justify-center">
                    <span class="font-semibold text-xl">{{ $title }}</span>
                </div>

                <!-- Search Bar -->
                <div class="col-span-2 flex items-center justify-center w-full">
                    <div class="relative w-full">
                        <input type="text"
                            class="peer py-3 px-4 pl-11 w-full block bg-gray-100 border border-transparent rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Cari">
                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                viewBox="0 0 256 256">
                                <path
                                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Account -->
                <div class="col-span-1 flex justify-end">
                    <div class="hs-dropdown relative inline-flex">
                        <button id="hs-dropdown-custom-trigger" type="button"
                            class="hs-dropdown-toggle py-1 ps-1 pe-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <img class="w-8 h-auto rounded-full"
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                alt="Avatar">
                            <span class="text-gray-600 font-medium truncate max-w-[7.5rem] dark:text-neutral-400">Jane
                                Doe</span>
                            <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 z-10 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-trigger">
                            <div class="p-1 space-y-0.5">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700"
                                    href="/pengaturan">
                                    Pengaturan
                                </a>
                            </div>
                            <div class="p-1 space-y-0.5">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700"
                                    aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-vertically-centered-scrollable-modal" data-hs-overlay="#modal">
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="container mx-auto sm:p-10 lg:p-5">
                @yield('main')
            </div>
        </div>
    </div>
    <script src="./node_modules/lodash/lodash.min.js"></script>
    <script src="./node_modules/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./node_modules/preline/dist/helper-apexcharts.js"></script>


    <!-- Logout Modal -->
    <div id="modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-vertically-centered-modal-label">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div
                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 id="hs-vertically-centered-modal-label" class="font-bold text-gray-800 dark:text-white">
                        Konfirmasi Logout
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                        aria-label="Close" data-hs-overlay="#modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <p class="text-gray-800 text-center dark:text-neutral-400">
                        Apakah anda yakin ingin menghapus data ini?
                    </p>

                    <ul class="flex justify-center items-center gap-4 my-10">
                        <li><button type="button" data-hs-overlay="#modal"
                                class="w-32 py-3 px-4 justify-center inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-Medium-Carmine text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
                                    </path>
                                </svg>
                                Tidak
                            </button>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit"
                                    class="w-32 justify-center py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-Genoa text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z">
                                        </path>
                                    </svg>
                                    Ya
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>