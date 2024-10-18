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
    @vite('resources/css/app.css')
    @vite('resources/css/sidebar.css')
    @vite('resources/js/app.js')
    @vite('resources/js/sidebar.js')
</head>

<body class="font-poppins">
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
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-trigger">
                            <div class="p-1 space-y-0.5">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700"
                                    href="/pengaturan">
                                    Pengaturan
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
    <script src="./node_modules/dropzone/dist/dropzone-min.js"></script>
</body>

</html>