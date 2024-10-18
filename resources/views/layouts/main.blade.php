<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./node_modules/apexcharts/dist/apexcharts.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/sidebar.css')
    @vite('resources/js/app.js')
    @vite('resources/js/sidebar.js')
</head>

<body class="font-poppins">
    <div class="flex h-full">
        <!-- Sidebar -->
        <div class="w-[350px] bg-gray-200">
            @include('components/sidebar')
        </div>

        <!-- Main Content -->
        <div class="flex-grow flex flex-col">
            <!-- Header -->
            <div class="grid grid-cols-3 p-5">
                <!-- Title -->
                <div class="col-span-1 flex items-center justify-center">
                    <span class="font-semibold text-xl">{{ $title }}</span>
                </div>

                <!-- Search Bar -->
                <div class="col-span-1 flex items-center justify-center w-full">
                    <div class="relative w-full">
                        <input type="text" class="peer py-3 px-4 pl-11 w-full block bg-gray-100 border border-transparent rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Cari">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                                <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Account -->
                <div class="col-span-1 flex justify-end">
                    <div class="hs-dropdown relative inline-flex">
                        <button id="hs-dropdown-custom-trigger" type="button" class="hs-dropdown-toggle py-1 ps-1 pe-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <img class="w-8 h-auto rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Avatar">
                            <span class="text-gray-600 font-medium truncate max-w-[7.5rem] dark:text-neutral-400">Jane
                                Doe</span>
                            <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-trigger">
                            <div class="p-1 space-y-0.5">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700" href="#">
                                    Pengaturan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="container mx-auto p-5   ">
                @yield('main')
            </div>
        </div>
    </div>
</body>

<script src="./node_modules/lodash/lodash.min.js"></script>
<script src="./node_modules/apexcharts/dist/apexcharts.min.js"></script>
<script src="./node_modules/preline/dist/helper-apexcharts.js"></script>
<script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

<script>
    window.addEventListener('load', () => {
        // Apex Line Chart
        (function() {
            buildChart('#hs-curved-area-charts', (mode) => ({
                chart: {
                    height: 300,
                    type: 'area',
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    }
                },
                series: [{
                        name: 'Income',
                        data: [18000, 51000, 60000, 38000, 88000, 50000, 40000, 52000, 88000, 80000, 60000, 70000]
                    },
                    {
                        name: 'Outcome',
                        data: [27000, 38000, 60000, 77000, 40000, 50000, 49000, 29000, 42000, 27000, 42000, 50000]
                    }
                ],
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2
                },
                grid: {
                    strokeDashArray: 2
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        type: 'vertical',
                        shadeIntensity: 1,
                        opacityFrom: 0.1,
                        opacityTo: 0.8
                    }
                },
                xaxis: {
                    type: 'category',
                    tickPlacement: 'on',
                    categories: [
                        '25 January 2023',
                        '26 January 2023',
                        '27 January 2023',
                        '28 January 2023',
                        '29 January 2023',
                        '30 January 2023',
                        '31 January 2023',
                        '1 February 2023',
                        '2 February 2023',
                        '3 February 2023',
                        '4 February 2023',
                        '5 February 2023'
                    ],
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        stroke: {
                            dashArray: 0
                        },
                        dropShadow: {
                            show: false
                        }
                    },
                    tooltip: {
                        enabled: false
                    },
                    labels: {
                        style: {
                            colors: '#9ca3af',
                            fontSize: '13px',
                            fontFamily: 'Inter, ui-sans-serif',
                            fontWeight: 400
                        },
                        formatter: (title) => {
                            let t = title;

                            if (t) {
                                const newT = t.split(' ');
                                t = `${newT[0]} ${newT[1].slice(0, 3)}`;
                            }

                            return t;
                        }
                    }
                },
                yaxis: {
                    labels: {
                        align: 'left',
                        minWidth: 0,
                        maxWidth: 140,
                        style: {
                            colors: '#9ca3af',
                            fontSize: '13px',
                            fontFamily: 'Inter, ui-sans-serif',
                            fontWeight: 400
                        },
                        formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
                    }
                },
                tooltip: {
                    x: {
                        format: 'MMMM yyyy'
                    },
                    y: {
                        formatter: (value) => `$${value >= 1000 ? `${value / 1000}k` : value}`
                    },
                    custom: function(props) {
                        const {
                            categories
                        } = props.ctx.opts.xaxis;
                        const {
                            dataPointIndex
                        } = props;
                        const title = categories[dataPointIndex].split(' ');
                        const newTitle = `${title[0]} ${title[1]}`;

                        return buildTooltip(props, {
                            title: newTitle,
                            mode,
                            hasTextLabel: true,
                            wrapperExtClasses: 'min-w-28',
                            labelDivider: ':',
                            labelExtClasses: 'ms-2'
                        });
                    }
                },
                responsive: [{
                    breakpoint: 568,
                    options: {
                        chart: {
                            height: 300
                        },
                        labels: {
                            style: {
                                colors: '#9ca3af',
                                fontSize: '11px',
                                fontFamily: 'Inter, ui-sans-serif',
                                fontWeight: 400
                            },
                            offsetX: -2,
                            formatter: (title) => title.slice(0, 3)
                        },
                        yaxis: {
                            labels: {
                                align: 'left',
                                minWidth: 0,
                                maxWidth: 140,
                                style: {
                                    colors: '#9ca3af',
                                    fontSize: '11px',
                                    fontFamily: 'Inter, ui-sans-serif',
                                    fontWeight: 400
                                },
                                formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
                            }
                        },
                    },
                }]
            }), {
                colors: ['#2563eb', '#9333ea'],
                fill: {
                    gradient: {
                        stops: [0, 90, 100]
                    }
                },
                xaxis: {
                    labels: {
                        style: {
                            colors: '#9ca3af'
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#9ca3af'
                        }
                    }
                },
                grid: {
                    borderColor: '#e5e7eb'
                }
            }, {
                colors: ['#3b82f6', '#a855f7'],
                fill: {
                    gradient: {
                        stops: [100, 90, 0]
                    }
                },
                xaxis: {
                    labels: {
                        style: {
                            colors: '#a3a3a3',
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#a3a3a3'
                        }
                    }
                },
                grid: {
                    borderColor: '#404040'
                }
            });
        })();
    });
</script>

</html>