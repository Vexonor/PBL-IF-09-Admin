<!-- Edit Konten -->
<div id="edit-modal"
    class="hs-overlay hidden [--body-scroll:true] size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
        <div
            class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                <h3 id="hs-vertically-centered-scrollable-modal-label" class="font-bold text-gray-800 dark:text-white">
                    Edit Status Konten
                </h3>
                <button type="button"
                    class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close" data-hs-overlay="#edit-modal">
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
                    <form action="">
                        <!-- ID Konten -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">ID Konten
                                :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan ID Konten" readonly>
                        </div>
                        <!-- Judul Konten -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Judul Konten
                                :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Judul Konten" readonly>
                        </div>
                        <!-- Deskripsi Laporan -->
                        <div class="w-full mb-5">
                            <label for="textarea-label" class="block mb-2 text-sm font-medium dark:text-white">Deskripsi
                                Laporan :</label>
                            <textarea id="textarea-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="3" placeholder="Deskripsi Laporan"></textarea>
                        </div>
                        <!-- Tipe Konten -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Tipe Konten
                                :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Tipe Konten" readonly>
                        </div>
                        <!-- Nama Penulis / Editor -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Nama Penulis
                                / Editor
                                :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Nama Penulis / Editor" readonly>
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
                                        id="hs-radio-group-3">
                                    <span
                                        class="inline-flex mx-5 border-2 border-Medium-Carmine items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-Medium-Carmine dark:bg-blue-800/30 dark:text-blue-500">
                                        <span
                                            class="size-1.5 inline-block rounded-full bg-Medium-Carmine  dark:bg-blue-500"></span>
                                        Belum Selesai
                                    </span>
                                </div>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff" viewBox="0 0 256 256">
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

<!-- Hapus Laporan -->
<div id="hapus-modal"
    class="hs-overlay hidden [--body-scroll:true] size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
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

<!-- Detail Laporan -->
<div id="detail-modal"
    class="hs-overlay hidden [--body-scroll:true] size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
        <div
            class="flex flex-col w-full max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                <h3 id="hs-vertically-centered-scrollable-modal-label" class="font-bold text-gray-800 dark:text-white">
                    Detail Laporan
                </h3>
                <button type="button"
                    class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close" data-hs-overlay="#detail-modal">
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
                    <form action="">
                        <!-- ID Konten -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">ID Konten
                                :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan ID Konten" readonly>
                        </div>
                        <!-- Judul Konten -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Judul Konten
                                :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Judul Konten" readonly>
                        </div>
                        <!-- Deskripsi Laporan -->
                        <div class="w-full mb-5">
                            <label for="textarea-label" class="block mb-2 text-sm font-medium dark:text-white">Deskripsi
                                Laporan :</label>
                            <textarea id="textarea-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="3" placeholder="Deskripsi Laporan"></textarea>
                        </div>
                        <!-- Tipe Konten -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Tipe Konten
                                :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Tipe Konten" readonly>
                        </div>
                        <!-- Nama Penulis / Editor -->
                        <div class="w-full mb-5">
                            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Nama Penulis
                                / Editor
                                :</label>
                            <input type="text" id="input-label"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pointer-events-none focus-within:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukkan Nama Penulis / Editor" readonly>
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
                                        id="hs-radio-group-3">
                                    <span
                                        class="inline-flex mx-5 border-2 border-Medium-Carmine items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-Medium-Carmine dark:bg-blue-800/30 dark:text-blue-500">
                                        <span
                                            class="size-1.5 inline-block rounded-full bg-Medium-Carmine  dark:bg-blue-500"></span>
                                        Belum Selesai
                                    </span>
                                </div>
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
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>