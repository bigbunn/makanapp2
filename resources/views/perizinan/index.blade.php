<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Perizinan</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header ffloat-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Perizinan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <div class="page-heading">
            <section class="section">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistik Perizinan</h4>
                            </div>
                            <div class="card-body justify-content-center">
                                <div style="width: 80%; margin: auto;">
                                    <canvas id="perizinanChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </section>
        </div>          
    </section>

    @section('script')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
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


