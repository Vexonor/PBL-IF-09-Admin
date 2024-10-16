<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trashify - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>
    <style>
        .sidebar {
            box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

    @vite('resources/css/app.css')

    @vite('resources/js/app.js')

</head>
<body class="bg-gray-100">

    
    <div class="flex">
        <div class="w-64 bg-green-800 h- rounded-tr-[25px] rounded-br-[25px] shadow-lg sidebar">
            <div class="flex items-center text-white text-2xl font-bold p-4">
                <span>Trashify</span>
                <img src="/img/garbage-truck 4.svg" alt="Icon" class="h-8 w-8 translate-x-20 mt-2">
            </div>

            <ul class="mt-4 space-y-2 overflow-hidden ml-4 text-white">
    <li class="px-14 py-2 hover:bg-green-600 rounded-l-md {{ request()->is('dashboard') ? 'bg-white text-green-800' : '' }}">
        <a href="#">Dashboard</a>
    </li>
    <li class="px-14 py-2 hover:bg-green-600 rounded-l-md {{ request()->is('laporan') ? 'bg-white text-green-800' : '' }}">
        <a href="#">Laporan</a>
    </li>
    <li class="px-14 py-2 hover:bg-green-600 rounded-l-md {{ request()->is('informasi-pengangkutan') ? 'bg-white text-green-800' : '' }}">
        <a href="#">Informasi Pengangkutan</a>
    </li>
    <li class="px-14 py-2 hover:bg-green-600 rounded-l-md {{ request()->is('lokasi-tps') ? 'bg-white text-green-800' : '' }}">
        <a href="#">Lokasi TPS</a>
    </li>
    <li class="px-14 py-2 hover:bg-green-600 rounded-l-md {{ request()->is('lokasi-bank-sampah') ? 'bg-white text-green-800' : '' }}">
        <a href="#">Lokasi Bank Sampah</a>
    </li>
    <li class="px-14 py-2 hover:bg-green-600 rounded-l-md {{ request()->is('admin') ? 'bg-white text-green-800' : '' }}">
        <a href="#">Admin</a>
    </li>
    <li class="px-14 py-2 hover:bg-green-600 rounded-l-md {{ request()->is('petugas-kebersihan') ? 'bg-white text-green-800' : '' }}">
        <a href="#">Petugas Kebersihan</a>
    </li>
</ul>
        </div>
        <div class="flex-1 p-8 bg-white rounded-l-lg shadow-lg">
            <div class="flex  items-center mb-6">
                <h1 class="text-3xl font-bold">Dashboard</h1>
                <div class="flex ml-64 w-full">
                    <div class="relative">
                        <input type="text" class="border border-gray-300 rounded-3xl px-40 py-2 text-center" placeholder="Search">
                        <span class="absolute inset-y-0 right-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.9 14.32a7.94 7.94 0 111.42-1.42l5.17 5.17a1 1 0 01-1.42 1.42l-5.17-5.17zM8 14A6 6 0 108 2a6 6 0 000 12z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Kartu -->
            <div class="mt-4 grid grid-cols-4 gap-8 mr-2">
                <!-- Kartu 1 -->
                <div class="bg-white p-0 rounded-lg shadow-md border border-purple-100 w-80 h-32">
                    <div class="flex justify-between items-center">
                        <div class="mt-6">
                            <h2 class="text-sm text-gray-500 ml-3">Jumlah Laporan</h2>
                            <h3 class="text-2xl font-bold ml-3">25.1k</h3>
                            <p class="text-l text-green-500 ml-3">+15%</p>
                        </div>
                        <div class="text-3xl text-black">
                            <img src="/img/Receipt.svg" alt="Icon" class="w-12 h-12 mt-2 mr-12">
                        </div>
                    </div>
                    <a href="#" class="text-sm text-green-500 -translate-y-6 text-right px-8 underline block ">Lihat Laporan</a>
                </div>

                <!-- Kartu 2 -->
                <!-- Kartu 1 -->
                <div class="bg-white p-0 rounded-lg shadow-md border border-purple-100 w-80 h-32">
                    <div class="flex justify-between items-center">
                        <div class="mt-6">
                            <h2 class="text-sm text-gray-500 ml-3">Jumlah Laporan</h2>
                            <h3 class="text-2xl font-bold ml-3">25.1k</h3>
                            <p class="text-l text-green-500 ml-3">+15%</p>
                        </div>
                        <div class="text-3xl text-black">
                            <img src="/img/Receipt.svg" alt="Icon" class="w-12 h-12 mt-2 mr-12">
                        </div>
                    </div>
                    <a href="#" class="text-sm text-green-500 -translate-y-6 text-right px-8 underline block ">Lihat Laporan</a>
                </div>
                <!-- Kartu 3 -->
                <!-- Kartu 1 -->
                <div class="bg-white p-0 rounded-lg shadow-md border border-purple-100 w-80 h-32">
                    <div class="flex justify-between items-center">
                        <div class="mt-6">
                            <h2 class="text-sm text-gray-500 ml-3">Jumlah Laporan</h2>
                            <h3 class="text-2xl font-bold ml-3">25.1k</h3>
                            <p class="text-l text-green-500 ml-3">+15%</p>
                        </div>
                        <div class="text-3xl text-black">
                            <img src="/img/Receipt.svg" alt="Icon" class="w-12 h-12 mt-2 mr-12">
                        </div>
                    </div>
                    <a href="#" class="text-sm text-green-500 -translate-y-6 text-right px-8 underline block ">Lihat Laporan</a>
                </div>

                <!-- Kartu 4 -->
                <!-- Kartu 1 -->
                <div class="bg-white p-0 rounded-lg shadow-md border border-purple-100 w-80 h-32">
                    <div class="flex justify-between items-center">
                        <div class="mt-6">
                            <h2 class="text-sm text-gray-500 ml-3">Jumlah Laporan</h2>
                            <h3 class="text-2xl font-bold ml-3">25.1k</h3>
                            <p class="text-l text-green-500 ml-3">+15%</p>
                        </div>
                        <div class="text-3xl text-black">
                            <img src="/img/Receipt.svg" alt="Icon" class="w-12 h-12 mt-2 mr-12">
                        </div>
                    </div>
                    <a href="#" class="text-sm text-green-500 -translate-y-6 text-right px-8 underline block ">Lihat Laporan</a>
                </div>

                <!-- Kartu 5 -->
                <!-- Kartu 1 -->
                <div class="bg-white p-0 rounded-lg shadow-md border border-purple-100 w-80 h-32 ml-96 -translate-x-8">
                    <div class="flex justify-between items-center">
                        <div class="mt-6">
                            <h2 class="text-sm text-gray-500 ml-3">Jumlah Laporan</h2>
                            <h3 class="text-2xl font-bold ml-3">25.1k</h3>
                            <p class="text-l text-green-500 ml-3">+15%</p>
                        </div>
                        <div class="text-3xl text-black">
                            <img src="/img/Receipt.svg" alt="Icon" class="w-12 h-12 mt-2 mr-12">
                        </div>
                    </div>
                    <a href="#" class="text-sm text-green-500 -translate-y-6 text-right px-8 underline block ">Lihat Laporan</a>
                </div>

                <!-- Kartu 6 -->
                <!-- Kartu 1 -->
                <div class="bg-white p-0 rounded-lg shadow-md border border-purple-100 w-80 h-32 ml-96 -translate-x-8">
                    <div class="flex justify-between items-center">
                        <div class="mt-6">
                            <h2 class="text-sm text-gray-500 ml-3">Jumlah Laporan</h2>
                            <h3 class="text-2xl font-bold ml-3">25.1k</h3>
                            <p class="text-l text-green-500 ml-3">+15%</p>
                        </div>
                        <div class="text-3xl text-black">
                            <img src="/img/Receipt.svg" alt="Icon" class="w-12 h-12 mt-2 mr-12">
                        </div>
                    </div>
                    <a href="#" class="text-sm text-green-500 -translate-y-6 text-right px-8 underline block ">Lihat Laporan</a>
                </div>

                
                
    <!-- Bagian Dropdown -->
    <div class="absolute inline-block text-left translate-y-80">
        <!-- Tombol Dropdown -->
        <div class="flex items-center space-x-4 p-4 bg-white px-4 rounded-lg shadow-md border border-purple-100">
            <div class="bg-green-200 rounded-full p-2">
                <img src="/img/icon-map.svg" alt="Map Icon" class="w-2 h-2 ">
            </div>
            <span class="text-sm font-medium" id="selected-location">Batu Aji</span>
            <button class="focus:outline-none" id="dropdown-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        <!-- Menu Dropdown -->
        <div id="dropdown-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10 hidden">
            <ul class="py-1">
                <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100" onclick="selectLocation('Batam Center')">Batam Center</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100" onclick="selectLocation('Bengkong')">Bengkong</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100" onclick="selectLocation('Sengkuang')">Sengkuang</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100" onclick="selectLocation('Batu Aji')">Batu Aji</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100" onclick="selectLocation('Poltek')">Poltek</a></li>
            </ul>
        </div>
    </div>
                </div>
            
        
    
    <script>
        
        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown-menu');
        const selectedLocation = document.getElementById('selected-location');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        function selectLocation(location) {
            selectedLocation.textContent = location;
            dropdownMenu.classList.add('hidden'); 
        }

        document.addEventListener('click', function(event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
    <!-- Legend Indicator -->
    <div class="flex justify-center sm:justify-end items-center gap-x-4 mb-3 sm:mb-6 mt-10">
                <div class="inline-flex items-center">
                    <span class="size-2.5 inline-block bg-blue-600 rounded-sm me-2"></span>
                    <span class="text-[13px] text-gray-600 dark:text-neutral-400">Income</span>
                </div>
                <div class="inline-flex items-center">
                    <span class="size-2.5 inline-block bg-purple-600 rounded-sm me-2"></span>
                    <span class="text-[13px] text-gray-600 dark:text-neutral-400">Outcome</span>
                </div>
            </div>

            <!-- Grafik -->
            <div id="hs-curved-area-charts" class="w-full h-[px]"></div>
        </div>
    </div>

    <!-- Script ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const options = {
                chart: {
                    type: 'area',
                    height: '400px'
                },
                series: [{
                    name: 'Income',
                    data: [4500, 5000, 4700, 5200, 6000, 5500, 7000]
                }, {
                    name: 'Outcome',
                    data: [3000, 3400, 3200, 4000, 4200, 4100, 5000]
                }],
                xaxis: {
                    categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                },
                colors: ['#1E3A8A', '#6B21A8'],
                legend: {
                    position: 'top'
                },
                grid: {
                    borderColor: '#e0e0e0'
                }
            };

            const chart = new ApexCharts(document.querySelector("#hs-curved-area-charts"), options);
            chart.render();
        });
    </script>

<div id="hs-curved-area-charts"></div>
</body>
</html>
