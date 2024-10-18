@extends('layouts/main')

@section('main')
<button type="button" class="py-3 px-4 my-5 w-52 justify-center inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-Genoa text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal" data-hs-overlay="#tambah-modal">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
        <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z">
        </path>
    </svg>
    Tambah Lokasi TPS
</button>

<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle ">
            <div class="border overflow-hidden dark:border-neutral-700">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase dark:text-neutral-500 bg-Genoa">
                                Kode TPS</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase dark:text-neutral-500 bg-Genoa">
                                Wilayah TPS</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase dark:text-neutral-500 bg-Genoa">
                                Titik Koordinat</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase dark:text-neutral-500 bg-Genoa">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-800 dark:text-neutral-200">
                                TPS 1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-800 dark:text-neutral-200">
                                Batam Center</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-800 dark:text-neutral-200">
                                1.1187205,104.0484566</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal" data-hs-overlay="#edit-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M227.32,73.37,182.63,28.69a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H216a8,8,0,0,0,0-16H115.32l112-112A16,16,0,0,0,227.32,73.37ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.69,147.32,64l24-24L216,84.69Z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-vertically-centered-scrollable-modal" data-hs-overlay="#hapus-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M216,48H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM192,208H64V64H192ZM80,24a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H88A8,8,0,0,1,80,24Z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-vertically-centered-scrollable-modal" data-hs-overlay="#detail-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm12-88a12,12,0,1,1-12-12A12,12,0,0,1,140,128Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,128Zm-88,0a12,12,0,1,1-12-12A12,12,0,0,1,96,128Z">
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





<!-- Content 2 -->
<button type="button" class="py-3 px-4 mt-20 my-5 w-68 justify-center inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-Genoa text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal" data-hs-overlay="#tambah-modal">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
        <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z">
        </path>
    </svg>
    Tambah Jadwal Pengangkutan
</button>

<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle ">
            <div class="border overflow-hidden dark:border-neutral-700">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase dark:text-neutral-500 bg-Genoa">
                                Kode TPS</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase dark:text-neutral-500 bg-Genoa">
                                Tanggal Pengangkutan</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase dark:text-neutral-500 bg-Genoa">
                                Status TPS</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase dark:text-neutral-500 bg-Genoa">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-800 dark:text-neutral-200">
                                John Brown</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-800 dark:text-neutral-200">
                                24-04-2024</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-800 dark:text-neutral-200"><span class="inline-flex border-2 border-red-500 items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-red-100 text-red-500 dark:bg-blue-800/30 dark:text-blue-500">
                                    <span class="size-1.5 inline-block rounded-lg bg-red-500 dark:bg-blue-500"></span>
                                    Belum Selesai
                                </span></td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal" data-hs-overlay="#edit-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M227.32,73.37,182.63,28.69a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H216a8,8,0,0,0,0-16H115.32l112-112A16,16,0,0,0,227.32,73.37ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.69,147.32,64l24-24L216,84.69Z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-vertically-centered-scrollable-modal" data-hs-overlay="#hapus-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M216,48H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM192,208H64V64H192ZM80,24a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H88A8,8,0,0,1,80,24Z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-vertically-centered-scrollable-modal" data-hs-overlay="#detail-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm12-88a12,12,0,1,1-12-12A12,12,0,0,1,140,128Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,128Zm-88,0a12,12,0,1,1-12-12A12,12,0,0,1,96,128Z">
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
<!-- Content 2 --> 
@endsection