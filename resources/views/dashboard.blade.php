<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last p-2">
                <h3>Status Makan Taruna</h3>
                    <div class="input-group-prepend py-3">
                        <select name="" id="inputSelect1" class="custom-select btn btn-outline-primary">
                            <option selected value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
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
        <div class="col-12 col-lg-12">
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
                                        <h6 class="font-extrabold mb-0">26</h6>
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

    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Keluhan</h4>
                        </div>
                        <div class="card-body justify-content-center">
                            <div style="width: 80%; margin: auto;">
                                <canvas id="keluhanChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Puasa</h4>
                        </div>
                        <div class="card-body justify-content-center">
                            <div style="width: 80%; margin: auto;">
                                    <canvas id="puasaChart"></canvas>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pantangan</h4>
                        </div>
                        <div class="card-body justify-content-center">
                            <div style="width: 80%; margin: auto;">
                                    <canvas id="pantanganChart"></canvas>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Perizinan</h4>
                        </div>
                        <div class="card-body justify-content-center">
                            <div style="width: 80%; margin: auto;">
                                    <canvas id="perizinanChart"></canvas>
                                </div>
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
        <!-- @vite(["node_modules/chart.js/dist/chart.umd.js"])
        @vite(["node_modules/chart.js/dist/chart.js"]) -->
        <!-- @vite(["resources/js/app.js"]) -->
        <script>
                var ctx = document.getElementById('keluhanChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: @json($dataKeluhan['labels']),
                        datasets: [{
                            label: 'Keluhan',
                            data: @json($dataKeluhan['data']),
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

                var ctx2 = document.getElementById('puasaChart').getContext('2d');
                var puasaChart = new Chart(ctx2, {
                    type: 'line',
                    data: {
                        labels: @json($dataPuasa['labels']),
                        datasets: [{
                            label: 'Puasa',
                            data: @json($dataPuasa['data']),
                            backgroundColor: 'rgba(255, 192, 192, 1)',
                            borderColor: 'rgba(255, 192, 192, 1)',
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

                var ctx3 = document.getElementById('pantanganChart').getContext('2d');
                var puasaChart = new Chart(ctx3, {
                    type: 'bar',
                    data: {
                        labels: @json($dataPantangan['labels']),
                        datasets: [{
                            label: 'Pantangan',
                            data: @json($dataPantangan['data']),
                            backgroundColor: 'rgba(75, 192, 192, 1)',
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

                var ctx4 = document.getElementById('perizinanChart').getContext('2d');
                var puasaChart = new Chart(ctx4, {
                    type: 'line',
                    data: {
                        labels: @json($dataPerizinan['labels']),
                        datasets: [{
                            label: 'Izin Keluar',
                            data: @json($dataPerizinan['dataIzinKeluar']),
                            backgroundColor: 'rgba(75, 192, 192, 1)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },{
                            label: 'Izin Pesiar',
                            data: @json($dataPerizinan['dataIzinPesiar']),
                            backgroundColor: 'rgba(180, 192, 192, 1)',
                            borderColor: 'rgba(180, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Izin Bermalam',
                            data: @json($dataPerizinan['dataIzinBermalam']),
                            backgroundColor: 'rgba(255, 192, 192, 1)',
                            borderColor: 'rgba(255, 192, 192, 1)',
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


