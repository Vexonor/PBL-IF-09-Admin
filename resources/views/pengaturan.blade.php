@extends('layouts/main')

@section('main')
<div class="grid grid-cols-3 gap-5">
    <div class="col-span-1 bg-slate-100 flex flex-col items-center h-screen rounded-md">
        <span class="inline-block size-24 mt-10 bg-gray-100 rounded-full overflow-hidden">
            <img class="size-full bg-white rounded-full"
                src="{{ Auth::User()->Foto_Profil ? Auth::User()->Foto_Profil : asset("/img/user.svg") }}" alt="Avatar">
        </span>
        <p class="font-bold text-center text-lg mt-5">{{ Auth::User()->Nama }}</p>

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
                        placeholder="you@site.com" value="{{ Auth::User()->email }}" readonly>
                </div>
                <!-- No. Telepon -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">No. Telepon</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 pointer-events-none"
                        placeholder="0812345678" value="{{ Auth::User()->No_Telp }}" readonly>
                </div>
                <!-- Alamat -->
                <div class="w-full">
                    <label for="textarea-label" class="block text-sm font-medium mb-2 dark:text-white">Alamat</label>
                    <textarea id="textarea-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 pointer-events-none"
                        rows="3" placeholder="Alamat" readonly>{{ Auth::User()->Alamat }}</textarea>
                </div>
                <!-- Jenis Kelamin -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Jenis
                        Kelamin</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 pointer-events-none"
                        placeholder="Jenis Kelamin" value="{{ Auth::User()->Jenis_Kelamin }}" readonly>
                </div>
                <!-- NIK -->
                <div class="w-full">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">NIK</label>
                    <input type="text" id="input-label"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 pointer-events-none"
                        placeholder="NIK" value="{{ Auth::User()->Nik }}" readonly>
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
                <form action="{{ route('admin.update', ['ID_User' => Auth::User()->ID_User]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <!-- Username -->
                    <div class="w-full">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Username</label>
                        <input type="text" id="input-label"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="username" name="Nama" value="{{ Auth::User()->Nama }}" required>
                    </div>
                    <!-- Photo Profile -->
                    <div class="w-full">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Foto
                            Profile</label>
                        <input type="file" name="Foto_Profile" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
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
                            placeholder="you@site.com" name="email" value="{{ Auth::User()->email }}" required>
                    </div>
                    <!-- No. Telepon -->
                    <div class="w-full">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">No.
                            Telepon</label>
                        <input type="text" id="input-label"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="0812345678" name="No_Telp" value="{{ Auth::User()->No_Telp }}" required>
                    </div>
                    <!-- Alamat -->
                    <div class="w-full">
                        <label for="textarea-label"
                            class="block text-sm font-medium mb-2 dark:text-white">Alamat</label>
                        <textarea id="textarea-label"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            rows="3" placeholder="Alamat" name="Alamat" required>{{ Auth::User()->Alamat }}</textarea>
                    </div>
                    <!-- Jenis Kelamin -->
                    <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Jenis
                        Kelamin</label>
                    <select id="hs-select-label" name="Jenis_Kelamin"
                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        <option disabled="">$jenisKelamin</option>
                        <option value="Laki - Laki"
                            {{ Auth::User()->Jenis_Kelamin == 'Laki - Laki' ? 'selected' : '' }}>Laki -
                            Laki</option>
                        <option value="Perempuan" {{ Auth::User()->Jenis_Kelamin == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </select>
                    <!-- NIK -->
                    <div class="w-full">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">NIK</label>
                        <input type="text" id="input-label"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="NIK" name="Nik" value="{{ Auth::User()->Nik }}" required>
                    </div>
                    <!-- Button Simpan -->
                    <button type="submit"
                        class="py-3 px-4 mt-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-Genoa text-white disabled:opacity-50 disabled:pointer-events-none">
                        Simpan Perubahan
                    </button>
                </form>
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