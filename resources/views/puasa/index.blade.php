<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Puasa</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
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
                        <div class="input-group mt-3">
                            <!-- <label for="inputDate" class="label">Masukkan Tanggal</label> -->
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text">Masukkan Tanggal</span>
                            </div> -->
                            <input type="date" id="flatpickr" class="form-control mb-3 flatpickr-no-config" value="2024-01-12">
                        </div>
                    </div>
                    <div class="card-body">
                        @if(isset($puasa[0]))
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
                                    @foreach($puasa as $p)
                                        @foreach($taruna as $t)
                                            @if($t->user_id==$p->user_id)
                                                @foreach($kelas as $k)
                                                    @if($t->kelas_id==$k->id)
                                                        @foreach($unit as $u)
                                                            @if($u->id==$t->unit_id)
                                                                <tr>
                                                                    <td>{{$t->nama_lengkap}}</td>
                                                                    <td>{{$u->nama_unit}}</td>
                                                                    <td>{{$k->nama_kelas}}</td>
                                                                    <td>{{$t->nomor_kamar}}</td>
                                                                    <td>
                                                                        @foreach($pantangan as $p)
                                                                            {{$ada=false}}
                                                                            @if($p->user_id==$t->user_id)
                                                                                {{$ada=true}}
                                                                            @endif
                                                                        @endforeach
                                                                        @if($ada)
                                                                        <span class="badge bg-danger">Ada</span>
                                                                        @else
                                                                        <span class="badge bg-success">Tidak Ada</span>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                        <h6 class="card-description">No entry</h6>
                        @endif
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


