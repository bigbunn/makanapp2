<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Status Makan Taruna</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <a href="{{route('datamakan.index')}}">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Data Makan</h6>
                                        <h6 class="font-extrabold mb-0">23/11/2024</h6>
                                    </div>
                                </div> 
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card"> 
                        <a href="{{route('pantangan.index')}}">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Pantangan</h6>
                                        <h6 class="font-extrabold mb-0">12</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <a href="{{route('keluhan.index')}}">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Keluhan</h6>
                                        <h6 class="font-extrabold mb-0">52</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <a href="{{route('puasa.index')}}">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Puasa</h6>
                                        <h6 class="font-extrabold mb-0">0</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4>Keluhan</h4>
                </div>
                <div class="card-body">
                    <div style="width: 80%; margin: auto;">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        
    <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Taruna Puasa</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">Europe</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">862</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-europe"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">America</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">375</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-america"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">India</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">625</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-india"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-danger" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">Indonesia</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">1025</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-indonesia"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    @section('script')
        <!-- CDN -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- <script src="~chart.js/dist/chart.js"></script> -->
        @vite(["node_modules/chart.js/dist/chart.umd.js"])
        @vite(["node_modules/chart.js/dist/chart.js"])
        <!-- @vite(["resources/js/app.js"]) -->
        <script>
                var ctx = document.getElementById('barChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: @json($data['labels']),
                        datasets: [{
                            label: 'Data',
                            data: @json($data['data']),
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
        </script>
    @endsection
</x-app-layout>


