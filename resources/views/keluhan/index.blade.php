<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Keluhan</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Keluhan</li>
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
                                <h4>Statistik Keluhan</h4>
                            </div>
                            <div class="card-body justify-content-center">
                                <div style="width: 80%; margin: auto;">
                                    <canvas id="keluhanChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Keluhan</h4>
                </div>
                
                <div class="card-body">
                    @if(isset($keluhan[0]))
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Menu</th>
                                        <th>Keluhan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($keluhan as $k)
                                    @foreach($user as $u)
                                        @if($u->id==$k->user_id)
                                            <tr>
                                                <td class="col-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ $u->profile_photo_url }}" alt="{{ $u->name }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">{{$u->name}}</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">{{$k->tanggal}}</p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">{{$k->menu_type}}</p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">{{$k->keterangan_keluhan}}</p>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    
                                @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    
                    @else
                        <h6 class="card-description">No entry</h6>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @section('script')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        </script>
    @endsection
</x-app-layout>


