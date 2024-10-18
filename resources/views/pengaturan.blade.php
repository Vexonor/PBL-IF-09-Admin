@extends('layouts/main')

@section('main')
<div class="grid grid-cols-3 gap-5">
    <div class="col-span-1 bg-slate-100 flex flex-col items-center h-screen rounded-md">
        <span class="inline-block size-24 mt-10 bg-gray-100 rounded-full overflow-hidden">
            <svg class="size-full text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x="0.62854" y="0.359985" width="15" height="15" rx="7.5" fill="white"></rect>
                <path
                    d="M8.12421 7.20374C9.21151 7.20374 10.093 6.32229 10.093 5.23499C10.093 4.14767 9.21151 3.26624 8.12421 3.26624C7.0369 3.26624 6.15546 4.14767 6.15546 5.23499C6.15546 6.32229 7.0369 7.20374 8.12421 7.20374Z"
                    fill="currentColor"></path>
                <path
                    d="M11.818 10.5975C10.2992 12.6412 7.42106 13.0631 5.37731 11.5537C5.01171 11.2818 4.69296 10.9631 4.42107 10.5975C4.28982 10.4006 4.27107 10.1475 4.37419 9.94123L4.51482 9.65059C4.84296 8.95684 5.53671 8.51624 6.30546 8.51624H9.95231C10.7023 8.51624 11.3867 8.94749 11.7242 9.62249L11.8742 9.93184C11.968 10.1475 11.9586 10.4006 11.818 10.5975Z"
                    fill="currentColor"></path>
            </svg>
        </span>
        <p class="font-bold text-lg mt-5">$username</p>

        <ul class="w-full flex flex-col items-center gap-3 mt-10">
            <li class="w-full flex justify-center items-center">
                <a href="#informasiPersonal"
                    class="py-3 px-4 w-11/12 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-Genoa text-white disabled:opacity-50 disabled:pointer-events-none">
                    Informasi Personal
                </a>
            </li>
            <li class="w-full flex justify-center items-center">
                <a href="#ubahProfile"
                    class="py-3 px-4 w-11/12 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-Genoa text-white disabled:opacity-50 disabled:pointer-events-none">
                    Ubah Profile
                </a>
            </li>
            <li class="w-full flex justify-center items-center">
                <a href="#ubahPassword"
                    class="py-3 px-4 w-11/12 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-Genoa text-white disabled:opacity-50 disabled:pointer-events-none">
                    Ubah Password
                </a>
            </li>
        </ul>
    </div>

    <div class="col-span-2 bg-slate-100 rounded-md h-screen overflow-hidden">
        <!-- Section Informasi Personal -->
        <section id="informasiPersonal" class="h-screen py-5">
            <h2 class="mx-5 my-5 text-lg font-bold">Informasi Personal</h2>
            <div class="grid grid-cols-1 p-10 gap-4">
                <!-- Email -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 pointer-events-none"
                        placeholder="you@site.com" readonly>
                </div>
                <!-- No. Telepon -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">No. Telepon</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 pointer-events-none"
                        placeholder="0812345678" readonly>
                </div>
                <!-- Alamat -->
                <div class="w-full">
                    <label for="textarea-label" class="block text-sm font-medium mb-2 dark:text-white">Alamat</label>
                    <textarea id="textarea-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 pointer-events-none"
                        rows="3" placeholder="Alamat" readonly></textarea>
                </div>
                <!-- Jenis Kelamin -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Jenis
                        Kelamin</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 pointer-events-none"
                        placeholder="Jenis Kelamin" readonly>
                </div>
                <!-- NIK -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">NIK</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 pointer-events-none"
                        placeholder="NIK" readonly>
                </div>
            </div>
        </section>
        <!-- Section Ubah Profile -->
        <section id="ubahProfile" class="h-screen py-5 overflow-auto  [&::-webkit-scrollbar]:w-2
  [&::-webkit-scrollbar-track]:rounded-full
  [&::-webkit-scrollbar-track]:bg-gray-100
  [&::-webkit-scrollbar-thumb]:rounded-full
  [&::-webkit-scrollbar-thumb]:bg-gray-300
  dark:[&::-webkit-scrollbar-track]:bg-neutral-700
  dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <h2 class="mx-5 mt-5 text-lg font-bold">Ubah Profile</h2>
            <div class="grid grid-cols-1 p-10 gap-4">
                <!-- Username -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Username</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        placeholder="username">
                </div>
                <!-- Photo Profile -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Foto Profile</label>
                    <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                            file:bg-gray-50 file:border-0
                            file:me-4
                            file:py-3 file:px-4
                            dark:file:bg-neutral-700 dark:file:text-neutral-400">
                </div>
                <!-- Email -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        placeholder="you@site.com">
                </div>
                <!-- No. Telepon -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">No. Telepon</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        placeholder="0812345678">
                </div>
                <!-- Alamat -->
                <div class="w-full">
                    <label for="textarea-label" class="block text-sm font-medium mb-2 dark:text-white">Alamat</label>
                    <textarea id="textarea-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        rows="3" placeholder="Alamat"></textarea>
                </div>
                <!-- Jenis Kelamin -->
                <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Jenis
                    Kelamin</label>
                <select id="hs-select-label"
                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <option selected="">$jenisKelamin</option>
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                </select>
                <!-- NIK -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">NIK</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        placeholder="NIK">
                </div>
                <!-- Button Simpan -->
                <button type="submit"
                    class="py-3 px-4 mt-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-Genoa text-white disabled:opacity-50 disabled:pointer-events-none">
                    Simpan Perubahan
                </button>
            </div>
        </section>
        <!-- Section Ubah Password -->
        <section id="ubahPassword" class="h-screen py-5">
            <h2 class="mx-5 mt-5 text-lg font-bold">Ubah Password</h2>
            <p class="mx-5 text-xs">Untuk memperbarui kata sandi anda tolong masukkan kata sandi anda sebelumnya</p>
            <div class="grid grid-cols-1 p-10 gap-4">
                <!-- Kata Sandi Lama -->
                <div class="w-full">
                    <label class="block text-sm mb-2 dark:text-white">Kata Sandi Lama</label>
                    <div class="relative">
                        <input id="oldPass" type="password"
                            class="py-3 ps-4 pe-10 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Enter password" value="12345qwerty">
                        <button type="button" data-hs-toggle-password='{
        "target": "#oldPass"
      }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                            <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                <path class="hs-password-active:hidden"
                                    d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                </path>
                                <path class="hs-password-active:hidden"
                                    d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                <path class="hidden hs-password-active:block"
                                    d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Kata Sandi Baru -->
                <div class="w-full">
                    <label class="block text-sm mb-2 dark:text-white">Kata Sandi Baru</label>
                    <div class="relative">
                        <input id="newPass" type="password"
                            class="py-3 ps-4 pe-10 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Enter password" value="12345qwerty">
                        <button type="button" data-hs-toggle-password='{
        "target": "#newPass"
      }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                            <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                <path class="hs-password-active:hidden"
                                    d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                </path>
                                <path class="hs-password-active:hidden"
                                    d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                <path class="hidden hs-password-active:block"
                                    d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Konfirmasi Kata Sandi Baru -->
                <div class="w-full">
                    <label class="block text-sm mb-2 dark:text-white">Konfirmasi Kata Sandi Lama</label>
                    <div class="relative">
                        <input id="confirmPass" type="password"
                            class="py-3 ps-4 pe-10 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Enter password" value="12345qwerty">
                        <button type="button" data-hs-toggle-password='{
        "target": "#confirmPass"
      }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                            <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                <path class="hs-password-active:hidden"
                                    d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                </path>
                                <path class="hs-password-active:hidden"
                                    d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                <path class="hidden hs-password-active:block"
                                    d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Button Simpan -->
                <button type="button"
                    class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-Genoa text-white disabled:opacity-50 disabled:pointer-events-none">
                    Simpan Perubahan
                </button>
            </div>
        </section>
    </div>
</div>
@endsection