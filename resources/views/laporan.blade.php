@extends('layouts/main')

@section('main')
    <!-- Laporan -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden border dark:border-neutral-700">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                    Kode Laporan</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                    Nama Pelapor</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                    Kategori Laporan</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                    Status Laporan</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase dark:text-neutral-500">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                    LP-001</td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                    Jhon Doe</td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                    Kondisi TPS
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200"><span
                                        class="inline-flex border-2 border-Genoa items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-Aquamarine text-Genoa dark:bg-blue-800/30 dark:text-blue-500">
                                        <span class="size-1.5 inline-block rounded-full bg-Genoa  dark:bg-blue-500"></span>
                                        Selesai
                                    </span></td>
                                <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                    <button type="button"
                                        class="inline-flex items-center px-4 py-3 text-sm font-medium text-white border border-transparent rounded-lg gap-x-2 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal"
                                        data-hs-overlay="#edit-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                            viewBox="0 0 256 256">
                                            <path
                                                d="M227.32,73.37,182.63,28.69a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H216a8,8,0,0,0,0-16H115.32l112-112A16,16,0,0,0,227.32,73.37ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.69,147.32,64l24-24L216,84.69Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button type="button"
                                        class="inline-flex items-center px-4 py-3 text-sm font-medium text-white border border-transparent rounded-lg gap-x-2 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        aria-haspopup="dialog" aria-expanded="false"
                                        aria-controls="hs-vertically-centered-scrollable-modal"
                                        data-hs-overlay="#hapus-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                            viewBox="0 0 256 256">
                                            <path
                                                d="M216,48H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM192,208H64V64H192ZM80,24a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H88A8,8,0,0,1,80,24Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button type="button"
                                        class="inline-flex items-center px-4 py-3 text-sm font-medium text-white border border-transparent rounded-lg gap-x-2 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        aria-haspopup="dialog" aria-expanded="false"
                                        aria-controls="hs-vertically-centered-scrollable-modal"
                                        data-hs-overlay="#detail-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                            viewBox="0 0 256 256">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm12-88a12,12,0,1,1-12-12A12,12,0,0,1,140,128Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,128Zm-88,0a12,12,0,1,1-12-12A12,12,0,0,1,96,128Z">
                                            </path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Penanggung Jawab -->
    <button type="button"
        class="inline-flex items-center justify-center px-4 py-3 my-10 text-sm font-medium text-white border border-transparent rounded-lg w-52 gap-x-2 bg-Genoa focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal" data-hs-overlay="#tambah-modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
            <path
                d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z">
            </path>
        </svg>
        Tambah
    </button>


    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden border dark:border-neutral-700">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                    Nama</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                    Tanggal Pengangkutan</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                    Wilayah Pengangkutan</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">
                                    Status Pengangkutan</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase dark:text-neutral-500">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                    John Brown</td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                    24-04-2024</td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">Batam
                                    Center
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200"><span
                                        class="inline-flex border-2 border-Genoa items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-Aquamarine text-Genoa dark:bg-blue-800/30 dark:text-blue-500">
                                        <span class="size-1.5 inline-block rounded-full bg-Genoa  dark:bg-blue-500"></span>
                                        Selesai
                                    </span></td>
                                <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                    <button type="button"
                                        class="inline-flex items-center px-4 py-3 text-sm font-medium text-white border border-transparent rounded-lg gap-x-2 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal"
                                        data-hs-overlay="#edit-modal1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                            viewBox="0 0 256 256">
                                            <path
                                                d="M227.32,73.37,182.63,28.69a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H216a8,8,0,0,0,0-16H115.32l112-112A16,16,0,0,0,227.32,73.37ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.69,147.32,64l24-24L216,84.69Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button type="button"
                                        class="inline-flex items-center px-4 py-3 text-sm font-medium text-white border border-transparent rounded-lg gap-x-2 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        aria-haspopup="dialog" aria-expanded="false"
                                        aria-controls="hs-vertically-centered-scrollable-modal"
                                        data-hs-overlay="#hapus-modal1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="#000000" viewBox="0 0 256 256">
                                            <path
                                                d="M216,48H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM192,208H64V64H192ZM80,24a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H88A8,8,0,0,1,80,24Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button type="button"
                                        class="inline-flex items-center px-4 py-3 text-sm font-medium text-white border border-transparent rounded-lg gap-x-2 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        aria-haspopup="dialog" aria-expanded="false"
                                        aria-controls="hs-vertically-centered-scrollable-modal"
                                        data-hs-overlay="#detail-modal1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="#000000" viewBox="0 0 256 256">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm12-88a12,12,0,1,1-12-12A12,12,0,0,1,140,128Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,128Zm-88,0a12,12,0,1,1-12-12A12,12,0,0,1,96,128Z">
                                            </path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



<!-- Edit Laporan -->
<div id="edit-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
        <div
            class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                <h3 id="hs-vertically-centered-scrollable-modal-label"
                    class="font-bold text-gray-800 dark:text-white">
                    Edit Status Laporan
                </h3>
                <button type="button"
                    class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close" data-hs-overlay="#edit-modal">
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
                <div class="space-y-4">
                    <form action="">
                        <!-- Kategori Laporan -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Kategori
                                Laporan :</label>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-1" checked="">
                                    <label for="hs-radio-group-1"
                                        class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Pengumpulan
                                        Sampah</label>
                                </div>
                                <div class="flex">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-2">
                                    <label for="hs-radio-group-2"
                                        class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Kondisi
                                        TPS</label>
                                </div>
                                <div class="flex">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-3">
                                    <label for="hs-radio-group-3"
                                        class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Tempat Sampah
                                        Liar</label>
                                </div>
                                <div class="flex">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-3">
                                    <label for="hs-radio-group-3"
                                        class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Lainnya</label>
                                </div>
                            </div>
                        </div>
                        <!-- Deskripsi Laporan -->
                        <div class="w-full mb-5">
                            <label for="textarea-label"
                                class="block mb-2 text-sm font-medium dark:text-white">Deskripsi Laporan</label>
                            <textarea id="textarea-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="3" placeholder="Deskripsi Laporan"></textarea>
                        </div>
                        <!-- Titik Koordinat -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Titik
                                Koordinat :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Titik Koordinat" readonly>
                        </div>
                        <!-- Gambar Pendukung -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Gambar
                                Pendukung :</label>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-1">
                                    <img src="{{ asset('img/dokumenpendukung.jpg') }}" class="size-20\" alt="">
                                </div>
                                <div class="col-span-1">
                                    <img src="{{ asset('img/dokumenpendukung.jpg') }}" class="size-20\" alt="">
                                </div>
                                <div class="col-span-1">
                                    <img src="{{ asset('img/dokumenpendukung.jpg') }}" class="size-20\" alt="">
                                </div>
                                <div class="col-span-1">
                                    <img src="{{ asset('img/dokumenpendukung.jpg') }}" class="size-20\" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Status Laporan -->
                        <div class="w-full">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Status
                                Laporan :</label>
                            <div class="flex gap-x-6">
                                <div class="flex items-center">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-1" checked="">
                                    <span
                                        class="inline-flex mx-5 border-2 border-Genoa items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-Aquamarine text-Genoa dark:bg-blue-800/30 dark:text-blue-500">
                                        <span
                                            class="size-1.5 inline-block rounded-full bg-Genoa  dark:bg-blue-500"></span>
                                        Selesai
                                    </span>
                                </div>

                                <div class="flex items-center">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-2">
                                    <span
                                        class="inline-flex mx-5 border-2 border-Orange-Peel items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-100 text-Orange-Peel dark:bg-blue-800/30 dark:text-blue-500">
                                        <span
                                            class="size-1.5 inline-block rounded-full bg-Orange-Peel  dark:bg-blue-500"></span>
                                        Sedang Diproses
                                    </span>
                                </div>

                                <div class="flex items-center">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-3">
                                    <span
                                        class="inline-flex mx-5 border-2 border-Medium-Carmine items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-Medium-Carmine dark:bg-blue-800/30 dark:text-blue-500">
                                        <span
                                            class="size-1.5 inline-block rounded-full bg-Medium-Carmine  dark:bg-blue-500"></span>
                                        Belum Selesai
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-neutral-700">
                <button type="button"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    data-hs-overlay="#edit-modal">
                    Tutup
                </button>
                <button type="button"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white border border-transparent rounded-lg gap-x-2 bg-Genoa focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff"
                        viewBox="0 0 256 256">
                        <path
                            d="M208,32H83.31A15.86,15.86,0,0,0,72,36.69L36.69,72A15.86,15.86,0,0,0,32,83.31V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM88,48h80V80H88ZM208,208H48V83.31l24-24V80A16,16,0,0,0,88,96h80a16,16,0,0,0,16-16V48h24Zm-80-96a40,40,0,1,0,40,40A40,40,0,0,0,128,112Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,176Z">
                        </path>
                    </svg>
                    Simpan
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Detail Laporan -->
<div id="detail-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
        <div
            class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                <h3 id="hs-vertically-centered-scrollable-modal-label"
                    class="font-bold text-gray-800 dark:text-white">
                    Detail Laporan
                </h3>
                <button type="button"
                    class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close" data-hs-overlay="#detail-modal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <div class="space-y-4">
                    <form action="">
                        <!-- Kategori Laporan -->
                        <div class="w-full mb-5">
                            <label for="input-label"
                                class="block mb-2 text-sm font-medium dark:text-white">Kategori
                                Laporan :</label>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-1" checked="">
                                    <label for="hs-radio-group-1"
                                        class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Pengumpulan
                                        Sampah</label>
                                </div>
                                <div class="flex">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-2">
                                    <label for="hs-radio-group-2"
                                        class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Kondisi
                                        TPS</label>
                                </div>
                                <div class="flex">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-3">
                                    <label for="hs-radio-group-3"
                                        class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Tempat
                                        Sampah
                                        Liar</label>
                                </div>
                                <div class="flex">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-3">
                                    <label for="hs-radio-group-3"
                                        class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Lainnya</label>
                                </div>
                            </div>
                        </div>
                        <!-- Deskripsi Laporan -->
                        <div class="w-full mb-5">
                            <label for="textarea-label"
                                class="block mb-2 text-sm font-medium dark:text-white">Deskripsi
                                Laporan</label>
                            <textarea id="textarea-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="3" placeholder="Deskripsi Laporan"></textarea>
                        </div>
                        <!-- Titik Koordinat -->
                        <div class="w-full mb-5">
                            <label for="input-label"
                                class="block mb-2 text-sm font-medium dark:text-white">Titik
                                Koordinat :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Titik Koordinat" readonly>
                        </div>
                        <!-- Gambar Pendukung -->
                        <div class="w-full mb-5">
                            <label for="input-label"
                                class="block mb-2 text-sm font-medium dark:text-white">Gambar
                                Pendukung :</label>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-1">
                                    <img src="{{ asset('img/dokumenpendukung.jpg') }}"
                                        class="size-20\" alt="">
                                </div>
                                <div class="col-span-1">
                                    <img src="{{ asset('img/dokumenpendukung.jpg') }}"
                                        class="size-20\" alt="">
                                </div>
                                <div class="col-span-1">
                                    <img src="{{ asset('img/dokumenpendukung.jpg') }}"
                                        class="size-20\" alt="">
                                </div>
                                <div class="col-span-1">
                                    <img src="{{ asset('img/dokumenpendukung.jpg') }}"
                                        class="size-20\" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Status Laporan -->
                        <div class="w-full">
                            <label for="input-label"
                                class="block mb-2 text-sm font-medium dark:text-white">Status
                                Laporan :</label>
                            <div class="flex gap-x-6">
                                <div class="flex items-center">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-1" checked="">
                                    <span
                                        class="inline-flex mx-5 border-2 border-Genoa items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-Aquamarine text-Genoa dark:bg-blue-800/30 dark:text-blue-500">
                                        <span
                                            class="size-1.5 inline-block rounded-full bg-Genoa  dark:bg-blue-500"></span>
                                        Selesai
                                    </span>
                                </div>

                                <div class="flex items-center">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-2">
                                    <span
                                        class="inline-flex mx-5 border-2 border-Orange-Peel items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-100 text-Orange-Peel dark:bg-blue-800/30 dark:text-blue-500">
                                        <span
                                            class="size-1.5 inline-block rounded-full bg-Orange-Peel  dark:bg-blue-500"></span>
                                        Sedang Diproses
                                    </span>
                                </div>

                                <div class="flex items-center">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-3">
                                    <span
                                        class="inline-flex mx-5 border-2 border-Medium-Carmine items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-Medium-Carmine dark:bg-blue-800/30 dark:text-blue-500">
                                        <span
                                            class="size-1.5 inline-block rounded-full bg-Medium-Carmine  dark:bg-blue-500"></span>
                                        Belum Selesai
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hapus Laporan -->
<div id="hapus-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="hs-vertically-centered-modal-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div
            class="flex flex-col w-full bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                <h3 id="hs-vertically-centered-modal-label" class="font-bold text-gray-800 dark:text-white">
                    Hapus Laporan
                </h3>
                <button type="button"
                    class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close" data-hs-overlay="#hapus-modal">
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
                <p class="text-center text-gray-800 dark:text-neutral-400">
                    Apakah anda yakin ingin menghapus data ini?
                </p>

                <ul class="flex items-center justify-center gap-4 my-10">
                    <li><button type="button" data-hs-overlay="#hapus-modal"
                            class="inline-flex items-center justify-center w-32 px-4 py-3 text-sm font-medium text-white border border-transparent rounded-full gap-x-2 bg-Medium-Carmine focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
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
                        <button type="button"
                            class="inline-flex items-center justify-center w-32 px-4 py-3 text-sm font-medium text-white border border-transparent rounded-full gap-x-2 bg-Genoa focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z">
                                </path>
                            </svg>
                            Ya
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Tambah Penanggung Jawab -->
<div id="tambah-modal"
class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
<div
class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
<div
class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
<div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
<h3 id="hs-vertically-centered-scrollable-modal-label"
class="font-bold text-gray-800 dark:text-white">
Tambah Penanggung Jawab
</h3>
<button type="button"
class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
aria-label="Close" data-hs-overlay="#tambah-modal">
<span class="sr-only">Close</span>
<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M18 6 6 18"></path>
    <path d="m6 6 12 12"></path>
</svg>
</button>
</div>
<div class="p-4 overflow-y-auto">
<div class="space-y-4">
<form action="">
    <!-- Wilayah -->
    <div class="w-full mb-5">
        <label for="input-label"
            class="block mb-2 text-sm font-medium dark:text-white">Wilayah
            Pengangkutan :</label>
        <div class="relative" data-hs-combo-box="">
            <div class="relative">
                <input
                    class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    type="text" role="combobox" aria-expanded="false"
                    value="Argentina" data-hs-combo-box-input="">
                <div class="absolute -translate-y-1/2 top-1/2 end-3"
                    aria-expanded="false" data-hs-combo-box-toggle="">
                    <svg class="shrink-0 size-3.5 text-gray-500 dark:text-neutral-500"
                        xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m7 15 5 5 5-5"></path>
                        <path d="m7 9 5-5 5 5"></path>
                    </svg>
                </div>
            </div>
            <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700"
                style="display: none;" data-hs-combo-box-output="">
                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                    tabindex="0" data-hs-combo-box-output-item="">
                    <div class="flex items-center justify-between w-full">
                        <span data-hs-combo-box-search-text="Argentina"
                            data-hs-combo-box-value="">Argentina</span>
                        <span class="hidden hs-combo-box-selected:block">
                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                    tabindex="1" data-hs-combo-box-output-item="">
                    <div class="flex items-center justify-between w-full">
                        <span data-hs-combo-box-search-text="Brazil"
                            data-hs-combo-box-value="">Brazil</span>
                        <span class="hidden hs-combo-box-selected:block">
                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                    tabindex="2" data-hs-combo-box-output-item="">
                    <div class="flex items-center justify-between w-full">
                        <span data-hs-combo-box-search-text="China"
                            data-hs-combo-box-value="">China</span>
                        <span class="hidden hs-combo-box-selected:block">
                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                    tabindex="3" data-hs-combo-box-output-item="">
                    <div class="flex items-center justify-between w-full">
                        <span data-hs-combo-box-search-text="USA"
                            data-hs-combo-box-value="">USA</span>
                        <span class="hidden hs-combo-box-selected:block">
                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                    tabindex="3" data-hs-combo-box-output-item="">
                    <div class="flex items-center justify-between w-full">
                        <span data-hs-combo-box-search-text="Italy"
                            data-hs-combo-box-value="">Italy</span>
                        <span class="hidden hs-combo-box-selected:block">
                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                    tabindex="3" data-hs-combo-box-output-item="">
                    <div class="flex items-center justify-between w-full">
                        <span data-hs-combo-box-search-text="France"
                            data-hs-combo-box-value="">France</span>
                        <span class="hidden hs-combo-box-selected:block">
                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Edit Penanggung Jawab -->
<div id="edit-modal1"
class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
<div
    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
    <div
        class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
            <h3 id="hs-vertically-centered-scrollable-modal-label"
                class="font-bold text-gray-800 dark:text-white">
                Edit Informasi Pengangkutan
            </h3>
            <button type="button"
                class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                aria-label="Close" data-hs-overlay="#edit-modal1">
                <span class="sr-only">Close</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <div class="p-4 overflow-y-auto">
            <div class="space-y-4">
                <form action="">
                    <!-- Wilayah -->
                    <div class="w-full mb-5">
                        <label for="input-label"
                            class="block mb-2 text-sm font-medium dark:text-white">Wilayah
                            Pengangkutan :</label>
                        <div class="relative" data-hs-combo-box="">
                            <div class="relative">
                                <input
                                    class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    type="text" role="combobox" aria-expanded="false"
                                    value="Argentina" data-hs-combo-box-input="">
                                <div class="absolute -translate-y-1/2 top-1/2 end-3"
                                    aria-expanded="false" data-hs-combo-box-toggle="">
                                    <svg class="shrink-0 size-3.5 text-gray-500 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5"></path>
                                        <path d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700"
                                style="display: none;" data-hs-combo-box-output="">
                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                    tabindex="0" data-hs-combo-box-output-item="">
                                    <div class="flex items-center justify-between w-full">
                                        <span data-hs-combo-box-search-text="Argentina"
                                            data-hs-combo-box-value="">Argentina</span>
                                        <span class="hidden hs-combo-box-selected:block">
                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                    tabindex="1" data-hs-combo-box-output-item="">
                                    <div class="flex items-center justify-between w-full">
                                        <span data-hs-combo-box-search-text="Brazil"
                                            data-hs-combo-box-value="">Brazil</span>
                                        <span class="hidden hs-combo-box-selected:block">
                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                    tabindex="2" data-hs-combo-box-output-item="">
                                    <div class="flex items-center justify-between w-full">
                                        <span data-hs-combo-box-search-text="China"
                                            data-hs-combo-box-value="">China</span>
                                        <span class="hidden hs-combo-box-selected:block">
                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                    tabindex="3" data-hs-combo-box-output-item="">
                                    <div class="flex items-center justify-between w-full">
                                        <span data-hs-combo-box-search-text="USA"
                                            data-hs-combo-box-value="">USA</span>
                                        <span class="hidden hs-combo-box-selected:block">
                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                    tabindex="3" data-hs-combo-box-output-item="">
                                    <div class="flex items-center justify-between w-full">
                                        <span data-hs-combo-box-search-text="Italy"
                                            data-hs-combo-box-value="">Italy</span>
                                        <span class="hidden hs-combo-box-selected:block">
                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                    tabindex="3" data-hs-combo-box-output-item="">
                                    <div class="flex items-center justify-between w-full">
                                        <span data-hs-combo-box-search-text="France"
                                            data-hs-combo-box-value="">France</span>
                                        <span class="hidden hs-combo-box-selected:block">
                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Wilayah -->

                    <!-- Tanggal Pengangkutan -->
                    <div class="w-full mb-5">
                        <label for="input-label"
                            class="block mb-2 text-sm font-medium dark:text-white">Tanggal
                            Pengangkutan :</label>
                        @include('layouts/calendar')
                    </div>
                    <!-- Tanggal Pengangkutan -->

                    <!-- Jam Pengangkutan -->
                    <div class="w-full mb-5">
                        <label for="input-label"
                            class="block mb-2 text-sm font-medium dark:text-white">Jam
                            Pengangkutan :</label>
                        <input type="time" id="input-label"
                            class="block w-full px-4 py-3 text-sm border-2 rounded-lg border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>
                    <!-- Jam Pengangkutan -->
                    <!-- Edit Penanggung Jawab -->
                    <div id="edit-modal1"
                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                        role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
                        <div
                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                            <div
                                class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                <div
                                    class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                                    <h3 id="hs-vertically-centered-scrollable-modal-label"
                                        class="font-bold text-gray-800 dark:text-white">
                                        Edit Penanggung Jawab
                                    </h3>
                                    <button type="button"
                                        class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                        aria-label="Close" data-hs-overlay="#edit-modal1">
                                        <span class="sr-only">Close</span>
                                        <svg class="shrink-0 size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4 overflow-y-auto">
                                    <div class="space-y-4">
                                        <!-- Kode Laporan -->
                                        <div class="w-full mb-5">
                                            <label for="input-label"
                                                class="block mb-2 text-sm font-medium dark:text-white">Kode
                                                Laporan :</label>
                                            <div class="max-w-sm space-y-3">
                                                <input type="text"
                                                    class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder="Masukkan Kode Laporan">
                                            </div>
                                            <!-- Kode Laporan-->

                                            <!-- Kategori Laporan -->
                                            <div class="w-full mt-5">
                                                <label for="input-label"
                                                    class="block mb-2 text-sm font-medium dark:text-white">Kategori
                                                    Laporan :</label>
                                                <select multiple=""
                                                    data-hs-select='{
"placeholder": "Select multiple options...",
"toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
"toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
"dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
"optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
"optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
"extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
}'
                                                    class="hidden">
                                                    <option value="">Choose</option>
                                                    <option>Pengangkutan Sampah</option>
                                                    <option>Kondisi TPS</option>
                                                    <option>Tempat Sampah Liar</option>
                                                    <option>Lainnya</option>
                                                </select>
                                                <!-- Kategori Laporan -->

                                                <!-- Titik Koordinat -->
                                                <div class="w-full mt-5">
                                                    <label for="input-label"
                                                        class="block mb-2 text-sm font-medium dark:text-white">Titik
                                                        Koordinat :</label>
                                                    <div class="max-w-sm space-y-3">
                                                        <input type="text"
                                                            class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            placeholder="Masukkan Titik Koordinat">
                                                    </div>
                                                    <!-- Titik Koordinat-->

                                                    <!-- Petugas -->
                                                    <div class="w-full mb-5">
                                                        <label for="input-label"
                                                            class="block mb-2 text-sm font-medium dark:text-white">Petugas
                                                            Yang Bertanggung Jawab :</label>
                                                        <div class="relative" data-hs-combo-box="">
                                                            <div class="relative">
                                                                <input
                                                                    class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                                    type="text" role="combobox"
                                                                    aria-expanded="false"
                                                                    value="Argentina"
                                                                    data-hs-combo-box-input="">
                                                                <div class="absolute -translate-y-1/2 top-1/2 end-3"
                                                                    aria-expanded="false"
                                                                    data-hs-combo-box-toggle="">
                                                                    <svg class="shrink-0 size-3.5 text-gray-500 dark:text-neutral-500"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path d="m7 15 5 5 5-5"></path>
                                                                        <path d="m7 9 5-5 5 5"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700"
                                                                style="display: none;"
                                                                data-hs-combo-box-output="">
                                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                                    tabindex="0"
                                                                    data-hs-combo-box-output-item="">
                                                                    <div
                                                                        class="flex items-center justify-between w-full">
                                                                        <span
                                                                            data-hs-combo-box-search-text="Argentina"
                                                                            data-hs-combo-box-value="">Argentina</span>
                                                                        <span
                                                                            class="hidden hs-combo-box-selected:block">
                                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24"
                                                                                height="24"
                                                                                viewBox="0 0 24 24"
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M20 6 9 17l-5-5">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                                    tabindex="1"
                                                                    data-hs-combo-box-output-item="">
                                                                    <div
                                                                        class="flex items-center justify-between w-full">
                                                                        <span
                                                                            data-hs-combo-box-search-text="Brazil"
                                                                            data-hs-combo-box-value="">Brazil</span>
                                                                        <span
                                                                            class="hidden hs-combo-box-selected:block">
                                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24"
                                                                                height="24"
                                                                                viewBox="0 0 24 24"
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M20 6 9 17l-5-5">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                                    tabindex="2"
                                                                    data-hs-combo-box-output-item="">
                                                                    <div
                                                                        class="flex items-center justify-between w-full">
                                                                        <span
                                                                            data-hs-combo-box-search-text="China"
                                                                            data-hs-combo-box-value="">China</span>
                                                                        <span
                                                                            class="hidden hs-combo-box-selected:block">
                                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24"
                                                                                height="24"
                                                                                viewBox="0 0 24 24"
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M20 6 9 17l-5-5">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                                    tabindex="3"
                                                                    data-hs-combo-box-output-item="">
                                                                    <div
                                                                        class="flex items-center justify-between w-full">
                                                                        <span
                                                                            data-hs-combo-box-search-text="USA"
                                                                            data-hs-combo-box-value="">USA</span>
                                                                        <span
                                                                            class="hidden hs-combo-box-selected:block">
                                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24"
                                                                                height="24"
                                                                                viewBox="0 0 24 24"
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M20 6 9 17l-5-5">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                                    tabindex="3"
                                                                    data-hs-combo-box-output-item="">
                                                                    <div
                                                                        class="flex items-center justify-between w-full">
                                                                        <span
                                                                            data-hs-combo-box-search-text="Italy"
                                                                            data-hs-combo-box-value="">Italy</span>
                                                                        <span
                                                                            class="hidden hs-combo-box-selected:block">
                                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24"
                                                                                height="24"
                                                                                viewBox="0 0 24 24"
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M20 6 9 17l-5-5">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                                    tabindex="3"
                                                                    data-hs-combo-box-output-item="">
                                                                    <div
                                                                        class="flex items-center justify-between w-full">
                                                                        <span
                                                                            data-hs-combo-box-search-text="France"
                                                                            data-hs-combo-box-value="">France</span>
                                                                        <span
                                                                            class="hidden hs-combo-box-selected:block">
                                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24"
                                                                                height="24"
                                                                                viewBox="0 0 24 24"
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M20 6 9 17l-5-5">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Petugas -->
                </form>
            </div>
        </div>
        <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-neutral-700">
            <button type="button"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                data-hs-overlay="#edit-modal1">
                Tutup
            </button>
            <button type="button"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-white border border-transparent rounded-lg gap-x-2 bg-Genoa focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    fill="#ffffff" viewBox="0 0 256 256">
                    <path
                        d="M208,32H83.31A15.86,15.86,0,0,0,72,36.69L36.69,72A15.86,15.86,0,0,0,32,83.31V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM88,48h80V80H88ZM208,208H48V83.31l24-24V80A16,16,0,0,0,88,96h80a16,16,0,0,0,16-16V48h24Zm-80-96a40,40,0,1,0,40,40A40,40,0,0,0,128,112Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,176Z">
                    </path>
                </svg>
                Simpan
            </button>
        </div>
    </div>
</div>
</div>






            <!-- Hapus Penanggung Jawab -->
            <div id="hapus-modal1"
                class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                role="dialog" tabindex="-1" aria-labelledby="hs-vertically-centered-modal-label">
                <div
                    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                    <div
                        class="flex flex-col w-full bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                            <h3 id="hs-vertically-centered-modal-label" class="font-bold text-gray-800 dark:text-white">
                                Hapus Informasi Pengangkutan
                            </h3>
                            <button type="button"
                                class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                aria-label="Close" data-hs-overlay="#hapus-modal1">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 overflow-y-auto">
                            <p class="text-center text-gray-800 dark:text-neutral-400">
                                Apakah anda yakin ingin menghapus data ini?
                            </p>
                            <!-- Hapus Informasi Pengangkutan-->
                            <div id="hapus-modal1"
                                class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                role="dialog" tabindex="-1" aria-labelledby="hs-vertically-centered-modal-label">
                                <div
                                    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                    <div
                                        class="flex flex-col w-full bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                        <div
                                            class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                                            <h3 id="hs-vertically-centered-modal-label"
                                                class="font-bold text-gray-800 dark:text-white">
                                                Hapus Jadwal Pengangkutan
                                            </h3>
                                            <button type="button"
                                                class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                                aria-label="Close" data-hs-overlay="#hapus-modal1">
                                                <span class="sr-only">Close</span>
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="p-4 overflow-y-auto">
                                            <p class="text-center text-gray-800 dark:text-neutral-400">
                                                Apakah anda yakin ingin menghapus data ini?
                                            </p>

                                            <ul class="flex items-center justify-center gap-4 my-10">
                                                <li><button type="button"
                                                        class="inline-flex items-center justify-center w-32 px-4 py-3 text-sm font-medium text-white border border-transparent rounded-full gap-x-2 bg-Medium-Carmine focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" fill="currentColor" viewBox="0 0 256 256">
                                                            <path
                                                                d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
                                                            </path>
                                                        </svg>
                                                        Tidak
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button"
                                                        class="inline-flex items-center justify-center w-32 px-4 py-3 text-sm font-medium text-white border border-transparent rounded-full gap-x-2 bg-Genoa focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" fill="currentColor" viewBox="0 0 256 256">
                                                            <path
                                                                d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z">
                                                            </path>
                                                        </svg>
                                                        Ya
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="flex items-center justify-center gap-4 my-10">
                                <li><button type="button"
                                        class="inline-flex items-center justify-center w-32 px-4 py-3 text-sm font-medium text-white border border-transparent rounded-full gap-x-2 bg-Medium-Carmine focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
                                            </path>
                                        </svg>
                                        Tidak
                                    </button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-32 px-4 py-3 text-sm font-medium text-white border border-transparent rounded-full gap-x-2 bg-Genoa focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        Ya
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detail Penanggung Jawab -->
            <div id="detail-modal1"
                class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
                <div
                    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                    <div
                        class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                            <h3 id="hs-vertically-centered-scrollable-modal-label"
                                class="font-bold text-gray-800 dark:text-white">
                                Detail Informasi Pengangkutan
                            </h3>
                            <button type="button"
                                class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                aria-label="Close" data-hs-overlay="#detail-modal1">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 overflow-y-auto">
                            <div class="space-y-4">
                                <form action="">
                                    <!-- Wilayah -->
                                    <div class="w-full mb-5">
                                        <label for="input-label"
                                            class="block mb-2 text-sm font-medium dark:text-white">Wilayah
                                            Pengangkutan :</label>
                                        <div class="relative" data-hs-combo-box="">
                                            <div class="relative">
                                                <input
                                                    class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    type="text" role="combobox" aria-expanded="false"
                                                    value="Argentina" data-hs-combo-box-input="">
                                                <div class="absolute -translate-y-1/2 top-1/2 end-3"
                                                    aria-expanded="false" data-hs-combo-box-toggle="">
                                                    <svg class="shrink-0 size-3.5 text-gray-500 dark:text-neutral-500"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="m7 15 5 5 5-5"></path>
                                                        <path d="m7 9 5-5 5 5"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700"
                                                style="display: none;" data-hs-combo-box-output="">
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="0" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="Argentina"
                                                            data-hs-combo-box-value="">Argentina</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="1" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="Brazil"
                                                            data-hs-combo-box-value="">Brazil</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="2" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="China"
                                                            data-hs-combo-box-value="">China</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="3" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="USA"
                                                            data-hs-combo-box-value="">USA</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="3" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="Italy"
                                                            data-hs-combo-box-value="">Italy</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="3" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="France"
                                                            data-hs-combo-box-value="">France</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wilayah -->

                                    <!-- Tanggal Pengangkutan -->
                                    <div class="w-full mb-5">
                                        <label for="input-label"
                                            class="block mb-2 text-sm font-medium dark:text-white">Tanggal
                                            Pengangkutan :</label>
                                        @include('layouts/calendar')
                                    </div>
                                    <!-- Tanggal Pengangkutan -->
                                    <!-- Detail Penanggung Jawab -->
                                    <div id="detail-modal1"
                                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
                                        <div
                                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                <div
                                                    class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                                                    <h3 id="hs-vertically-centered-scrollable-modal-label"
                                                        class="font-bold text-gray-800 dark:text-white">
                                                        Detail Informasi Pengangkutan
                                                    </h3>
                                                    <button type="button"
                                                        class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                                        aria-label="Close" data-hs-overlay="#detail-modal1">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <div class="space-y-4">
                                                        <!-- Kode Laporan -->
                                                        <div class="w-full mb-5">
                                                            <label for="input-label"
                                                                class="block mb-2 text-sm font-medium dark:text-white">Kode
                                                                Laporan :</label>
                                                            <div class="max-w-sm space-y-3">
                                                                <input type="text"
                                                                    class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                                    placeholder="Masukkan Kode Laporan">
                                                            </div>
                                                            <!-- Kode Laporan-->

                                                            <!-- Kategori Laporan -->
                                                            <div class="w-full mt-5">
                                                                <label for="input-label"
                                                                    class="block mb-2 text-sm font-medium dark:text-white">Kategori
                                                                    Laporan :</label>
                                                                <select multiple=""
                                                                    data-hs-select='{
  "placeholder": "Select multiple options...",
  "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
}'
                                                                    class="hidden">
                                                                    <option value="">Choose</option>
                                                                    <option>Pengangkutan Sampah</option>
                                                                    <option>Kondisi TPS</option>
                                                                    <option>Tempat Sampah Liar</option>
                                                                    <option>Lainnya</option>
                                                                </select>
                                                                <!-- Kategori Laporan -->

                                                                <!-- Titik Koordinat -->
                                                                <div class="w-full mt-5">
                                                                    <label for="input-label"
                                                                        class="block mb-2 text-sm font-medium dark:text-white">Titik
                                                                        Koordinat :</label>
                                                                    <div class="max-w-sm space-y-3">
                                                                        <input type="text"
                                                                            class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                                            placeholder="Masukkan Titik Koordinat">
                                                                    </div>
                                                                    <!-- Titik Koordinat-->

                                                                    <!-- Status Pengerjaan -->
                                                                    <div class="w-full mt-5">
                                                                        <label for="input-label"
                                                                            class="block mb-2 text-sm font-medium dark:text-white">Status
                                                                            Pengerjaan :</label>
                                                                        <div class="flex gap-x-2">
                                                                            <div class="flex items-center gap-x-1">
                                                                                <input type="radio"
                                                                                    name="hs-radio-group"
                                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                                                    id="hs-radio-group-3">
                                                                                <label for="hs-radio-group-3"
                                                                                    class="text-sm text-gray-500 dark:text-neutral-400">
                                                                                    <span
                                                                                        class="inline-flex border-2 border-Genoa items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-Aquamarine text-Genoa dark:bg-blue-800/30 dark:text-blue-500">
                                                                                        <span
                                                                                            class="size-1.5 inline-block rounded-lg bg-Genoa dark:bg-blue-500"></span>
                                                                                        Selesai
                                                                                    </span>
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-x-1">
                                                                                <input type="radio"
                                                                                    name="hs-radio-group"
                                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                                                    id="hs-radio-group-1">
                                                                                <label for="hs-radio-group-1"
                                                                                    class="text-sm text-gray-500 dark:text-neutral-400">
                                                                                    <span
                                                                                        class="inline-flex border-2 border-red-500 items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-red-100 text-red-500 dark:bg-blue-800/30 dark:text-blue-500">
                                                                                        <span
                                                                                            class="size-1.5 inline-block rounded-lg bg-red-500 dark:bg-blue-500"></span>
                                                                                        Belum Selesai
                                                                                    </span>
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-x-1">
                                                                                <input type="radio"
                                                                                    name="hs-radio-group"
                                                                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                                                    id="hs-radio-gr~oup-2">
                                                                                <label for="hs-radio-group-2"
                                                                                    class="text-sm text-gray-500 dark:text-neutral-400">
                                                                                    <span
                                                                                        class="inline-flex border-2 border-Orange-Peel items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-yellow-200 text-Orange-Peel dark:bg-blue-800/30 dark:text-blue-500">
                                                                                        <span
                                                                                            class="size-1.5 inline-block rounded-lg bg-Orange-Peel dark:bg-blue-500"></span>
                                                                                        Sedang Diproses
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Status Pengerjaan -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tambah Penanggung Jawab -->
            <div id="tambah-modal1"
                class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
                <div
                    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                    <div
                        class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                            <h3 id="hs-vertically-centered-scrollable-modal-label"
                                class="font-bold text-gray-800 dark:text-white">
                                Tambah Penanggung Jawab
                            </h3>
                            <button type="button"
                                class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                aria-label="Close" data-hs-overlay="#tambah-modal1">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Jam Pengangkutan -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Jam
                                Pengangkutan :</label>
                            <input type="time" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-2 rounded-lg border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="you@site.com">
                        </div>
                        <!-- Jam Pengangkutan -->
                        <div class="p-4 overflow-y-auto">
                            <div class="space-y-4">
                                <!-- Kode Laporan -->
                                <div class="w-full mb-5">
                                    <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Kode
                                        Laporan :</label>
                                    <div class="max-w-sm space-y-3">
                                        <input type="text"
                                            class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                            placeholder="Masukkan Kode Laporan">
                                    </div>
                                    <!-- Kode Laporan-->

                                    <!-- Petugas -->
                                    <div class="w-full mb-5">
                                        <label for="input-label"
                                            class="block mb-2 text-sm font-medium dark:text-white">Petugas
                                            Yang Bertanggung Jawab :</label>
                                        <div class="relative" data-hs-combo-box="">
                                            <div class="relative">
                                                <input
                                                    class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    type="text" role="combobox" aria-expanded="false"
                                                    value="Argentina" data-hs-combo-box-input="">
                                                <div class="absolute -translate-y-1/2 top-1/2 end-3"
                                                    aria-expanded="false" data-hs-combo-box-toggle="">
                                                    <svg class="shrink-0 size-3.5 text-gray-500 dark:text-neutral-500"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="m7 15 5 5 5-5"></path>
                                                        <path d="m7 9 5-5 5 5"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700"
                                                style="display: none;" data-hs-combo-box-output="">
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="0" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="Argentina"
                                                            data-hs-combo-box-value="">Argentina</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="1" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="Brazil"
                                                            data-hs-combo-box-value="">Brazil</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="2" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="China"
                                                            data-hs-combo-box-value="">China</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="3" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="USA"
                                                            data-hs-combo-box-value="">USA</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="3" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="Italy"
                                                            data-hs-combo-box-value="">Italy</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4 py-2 text-sm text-gray-800 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                                    tabindex="3" data-hs-combo-box-output-item="">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span data-hs-combo-box-search-text="France"
                                                            data-hs-combo-box-value="">France</span>
                                                        <span class="hidden hs-combo-box-selected:block">
                                                            <svg class="shrink-0 size-3.5 text-blue-600 dark:text-blue-500"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Petugas -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Kategori Laporan -->
                <div class="w-full mt-5">
                    <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Kategori Laporan
                        :</label>
                    <select multiple=""
                        data-hs-select='{
  "placeholder": "Select multiple options...",
  "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
}'
                        class="hidden">
                        <option value="">Choose</option>
                        <option>Pengangkutan Sampah</option>
                        <option>Kondisi TPS</option>
                        <option>Tempat Sampah Liar</option>
                        <option>Lainnya</option>
                    </select>
                    <!-- Kategori Laporan -->

                    <!-- Titik Koordinat -->
                    <div class="w-full mt-5">
                        <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Titik Koordinat
                            :</label>
                        <div class="max-w-sm space-y-3">
                            <input type="text"
                                class="block w-full py-3 text-sm border-2 rounded-lg ps-4 pe-9 border-slate-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Titik Koordinat">
                        </div>
                        <!-- Titik Koordinat-->

                        <!-- Status Pengerjaan -->
                        <div class="w-full mt-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Status
                                Pengerjaan :</label>
                            <div class="flex gap-x-2">
                                <div class="flex items-center gap-x-1">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-3">
                                    <label for="hs-radio-group-3" class="text-sm text-gray-500 dark:text-neutral-400">
                                        <span
                                            class="inline-flex border-2 border-Genoa items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-Aquamarine text-Genoa dark:bg-blue-800/30 dark:text-blue-500">
                                            <span
                                                class="size-1.5 inline-block rounded-lg bg-Genoa dark:bg-blue-500"></span>
                                            Selesai
                                        </span>
                                    </label>
                                </div>

                                <div class="flex items-center gap-x-1">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-group-1">
                                    <label for="hs-radio-group-1" class="text-sm text-gray-500 dark:text-neutral-400">
                                        <span
                                            class="inline-flex border-2 border-red-500 items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-red-100 text-red-500 dark:bg-blue-800/30 dark:text-blue-500">
                                            <span
                                                class="size-1.5 inline-block rounded-lg bg-red-500 dark:bg-blue-500"></span>
                                            Belum Selesai
                                        </span>
                                    </label>
                                </div>

                                <div class="flex items-center gap-x-1">
                                    <input type="radio" name="hs-radio-group"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-radio-gr~oup-2">
                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 dark:text-neutral-400">
                                        <span
                                            class="inline-flex border-2 border-Orange-Peel items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-yellow-200 text-Orange-Peel dark:bg-blue-800/30 dark:text-blue-500">
                                            <span
                                                class="size-1.5 inline-block rounded-lg bg-Orange-Peel dark:bg-blue-500"></span>
                                            Sedang Diproses
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Status Pengerjaan -->


                        <!-- Button Section -->
                        <div
                            class="flex items-center justify-end px-4 py-3 mt-6 border-t gap-x-2 dark:border-neutral-700">
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                data-hs-overlay="#tambah-modal1">
                                Tutup
                            </button>
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-white border border-transparent rounded-lg gap-x-2 bg-Genoa focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M208,32H83.31A15.86,15.86,0,0,0,72,36.69L36.69,72A15.86,15.86,0,0,0,32,83.31V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM88,48h80V80H88ZM208,208H48V83.31l24-24V80A16,16,0,0,0,88,96h80a16,16,0,0,0,16-16V48h24Zm-80-96a40,40,0,1,0,40,40A40,40,0,0,0,128,112Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,176Z">
                                    </path>
                                </svg>
                                Simpan
                            </button>
                        </div>
                        <!-- Button Section -->
                    </div>
                @endsection
