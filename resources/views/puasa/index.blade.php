<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Puasa</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Puasa</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <div class="page-heading">
            <!-- <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Daftar Taruna Berpuasa</h3>
                        <p class="text-subtitle text-muted">23/11/2024.</p>
                    </div>
                </div>
            </div> -->
            <section class="section">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistik Puasa</h4>
                            </div>
                            <div class="card-body justify-content-center">
                                <div style="width: 80%; margin: auto;">
                                    <canvas id="puasaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Daftar Taruna Berpuasa
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Unit</th>
                                    <th>Kelas</th>
                                    <th>Asrama</th>
                                    <th>Pantangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Graiden</td>
                                    <td>Unit C Satria</td>
                                    <td>4 RPLK</td>
                                    <td>A</td>
                                    <td>
                                        <span class="badge bg-success">Tidak ada</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dale</td>
                                    <td>Unit D Satria</td>
                                    <td>4 RKS Red</td>
                                    <td>F</td>
                                    <td>
                                        <span class="badge bg-success">Tidak ada</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nathaniel</td>
                                    <td>Unit A Madya</td>
                                    <td>3 RPK</td>
                                    <td>C</td>
                                    <td>
                                        <span class="badge bg-danger">Ada</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
    @section('script')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
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
        </script>
    @endsection
</x-app-layout>


