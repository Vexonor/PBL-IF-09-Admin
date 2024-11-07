@extends('layouts/main')

@section('main')
<!-- Section Button -->
<div class="grid grid-cols-2 mb-5">
    <div class="col-span-1">
        <button type="button"
            class="py-3 px-4 w-max justify-center inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-Genoa text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
            aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal" data-hs-overlay="#tambah-modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                <path
                    d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z">
                </path>
            </svg>
            Tambah Admin
        </button>
    </div>
    <div class="col-span-1 flex gap-4 justify-end">
        <!-- Data Count -->
        <div class="max-w-xs">
            <select
                class="py-3 px-4 pe-9 max-w-xs block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <option>10</option>
                <option>20</option>
                <option>30</option>
            </select>
        </div>
        <!-- Peran Admin -->
        <div class="max-w-xs">
            <select data-hs-select='{
            "placeholder": "<span class=\"inline-flex items-center\"><svg class=\"shrink-0 size-3.5 me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polygon points=\"22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3\"/></svg> Peran Admin</span>",
            "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
            "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
            "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
            }' class="hidden" id="statusFilter">
                <option value="">Choose</option>
                <option>Master Admin</option>
                <option>Admin</option>
            </select>
        </div>
        <!-- Reset Button -->
        <div class="flex flex-wrap gap-2">
            <button type="button" id="multiple-with-conditional-counter-trigger-clear"
                class="py-1 px-2 inline-flex items-center gap-x-1 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-800">
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
                Reset
            </button>
        </div>
    </div>
</div>

<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border overflow-hidden dark:border-neutral-700">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead class="bg-Genoa text-white">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs border-r-2 font-medium uppercase dark:text-neutral-500">
                                No.</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs border-r-2 font-medium uppercase dark:text-neutral-500">
                                Nama Admin</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs border-r-2 font-medium uppercase dark:text-neutral-500">
                                Role Admin</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs border-r-2 font-medium uppercase dark:text-neutral-500">
                                No. Telepon</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs border-r-2 font-medium uppercase dark:text-neutral-500">
                                Email</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium uppercase dark:text-neutral-500">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700 text-center">
                        @foreach ($dataUser as $key => $User)
                        <tr class="hover:bg-gray-100">
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm border-r-2 font-medium text-gray-800 dark:text-neutral-200">
                                {{ $key + 1 }}.
                            </td>
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm border-r-2 text-gray-800 dark:text-neutral-200">
                                <p class="truncate w-32">
                                    {{ $User->Nama }}
                                </p>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm border-r-2 text-gray-800 dark:text-neutral-200">
                                {{ $User->AdminTable->Role_Admin }}
                            </td>
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm border-r-2 text-gray-800 dark:text-neutral-200">
                                {{ $User->No_Telp ? $User->No_Telp : '-' }}
                            </td>
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm border-r-2 text-gray-800 dark:text-neutral-200">
                                <p class="truncate w-32">
                                    {{ $User->email }}
                                </p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button type="button"
                                    class="py-3 px-4 inline-flex items-center text-sm font-medium rounded-full gap-x-2 hover:bg-slate-200 border border-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal"
                                    data-hs-overlay="#edit-modal{{ $User->ID_User }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M227.32,73.37,182.63,28.69a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H216a8,8,0,0,0,0-16H115.32l112-112A16,16,0,0,0,227.32,73.37ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.69,147.32,64l24-24L216,84.69Z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button"
                                    class="py-3 px-4 inline-flex items-center text-sm font-medium rounded-full gap-x-2 hover:bg-slate-200 border border-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                    aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-vertically-centered-scrollable-modal"
                                    data-hs-overlay="#hapus-modal{{ $User->ID_User }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M216,48H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM192,208H64V64H192ZM80,24a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H88A8,8,0,0,1,80,24Z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button"
                                    class="py-3 px-4 inline-flex items-center text-sm font-medium rounded-full gap-x-2 hover:bg-slate-200 border border-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                    aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-vertically-centered-scrollable-modal"
                                    data-hs-overlay="#detail-modal{{ $User->ID_User }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm12-88a12,12,0,1,1-12-12A12,12,0,0,1,140,128Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,128Zm-88,0a12,12,0,1,1-12-12A12,12,0,0,1,96,128Z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        @include('components/adminModal')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-center items-center">
    @include('alert/success')
    @include('alert/error')
</div>


<!-- Tambah -->
<div id="tambah-modal"
    class="hs-overlay hidden [--body-scroll:true] size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
        <div
            class="w-full max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 id="hs-vertically-centered-scrollable-modal-label" class="font-bold text-gray-800 dark:text-white">
                    Tambah Admin
                </h3>
                <button type="button"
                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close" data-hs-overlay="#tambah-modal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <div class="space-y-4">
                    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Nama Lengkap -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Nama Lengkap
                                :</label>
                            <input type="text" id="input-label" name="Nama"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <!-- Tanggal Lahir -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Tanggal
                                Lahir
                                :</label>
                            <input type="date" id="input-label" name="Tanggal_Lahir"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Jenis
                                Kelamin :</label>
                            <select data-hs-select='{
                                "placeholder": "Pilih Jenis Kelamin",
                                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                }' class="hidden" name="Jenis_Kelamin" required>
                                <option value="">Pilih</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <!-- Alamat -->
                        <div class="w-full mb-5">
                            <label for="textarea-label"
                                class="block text-sm font-medium mb-2 dark:text-white">Alamat</label>
                            <textarea id="textarea-label" name="Alamat"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="3" placeholder="Alamat" required></textarea>
                        </div>
                        <!-- No. Telepon -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">No. Telepon
                                :</label>
                            <input type="text" id="input-label" name="No_Telp"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan No. Telepon" required>
                        </div>
                        <!-- Email -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Email
                                :</label>
                            <input type="email" id="input-label" name="email"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Email" required>
                        </div>
                        <!-- Password -->
                        <div class="w-full mb-5">
                            <label class="block text-sm mb-2 dark:text-white">Password</label>
                            <div class="relative">
                                <input id="oldPass" type="password" name="password"
                                    class="py-3 ps-4 pe-10 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter password" value="123456" readonly>
                                <button type="button" data-hs-toggle-password='{
        "target": "#oldPass"
      }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                    <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24">
                                        </path>
                                        <path class="hs-password-active:hidden"
                                            d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                        </path>
                                        <path class="hs-password-active:hidden"
                                            d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                        </path>
                                        <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                        <path class="hidden hs-password-active:block"
                                            d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- Role Admin -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Role Admin
                                :</label>
                            <select data-hs-select='{
                                "placeholder": "Pilih Role Admin",
                                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                }' class="hidden" name="Role_Admin" required>
                                <option value="">Pilih</option>
                                <option value="Master">Master Admin</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                </div>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    data-hs-overlay="#tambah-modal">
                    Tutup
                </button>
                <button type="submit"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-Genoa text-white  focus:outline-none  disabled:opacity-50 disabled:pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff" viewBox="0 0 256 256">
                        <path
                            d="M208,32H83.31A15.86,15.86,0,0,0,72,36.69L36.69,72A15.86,15.86,0,0,0,32,83.31V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM88,48h80V80H88ZM208,208H48V83.31l24-24V80A16,16,0,0,0,88,96h80a16,16,0,0,0,16-16V48h24Zm-80-96a40,40,0,1,0,40,40A40,40,0,0,0,128,112Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,176Z">
                        </path>
                    </svg>
                    Simpan
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection