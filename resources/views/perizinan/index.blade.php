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

    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Daftar Taruna Izin Keluar
                    </h5>
                    <h6 class="card-title">22/10/2024 - 23/10/2024</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Unit</th>
                                <th>Kelas</th>
                                <th>Asrama</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Persetujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($keluarall as $k)
                                @foreach($taruna as $t)
                                    @if($t->user_id==$k->user_id)
                                    <tr>
                                        <td>{{$t->nama_lengkap}}</td>
                                        <td>
                                            @foreach($unit_taruna as $u)
                                                @if($u->id==$t->unit_id)
                                                    {{$u->nama_unit}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($kelas_taruna as $k)
                                                @if($k->id==$t->kelas_id)
                                                    {{$k->nama_kelas}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{$t->nomor_kamar}}</td>
                                        <td>{{$k->tanggal_mulai}} - {{$k->tanggal_selesai}}</td>
                                        
                                        @if($k->isDone==true)
                                        <td><span class="badge bg-success">Done</span></td>
                                        @else
                                            @if($k->isApproved==true)
                                            <td><span class="badge bg-info">Approved</span></td>
                                            @else
                                            <td><span class="badge bg-danger">Waiting for approval</span></td>
                                            @endif
                                        @endif
                                        
                                        <td><button type="button" class="btn btn-primary">Approve</button></td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Daftar Taruna Pesiar
                    </h5>
                    <!-- <h6 class="card-title">22/10/2024</h6> -->
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead class="text-center">
                            <tr>
                                <th>Nama</th>
                                <th>Unit</th>
                                <th>Kelas</th>
                                <th>Asrama</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Persetujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pesiarall as $p)
                                @foreach($taruna as $t)
                                    @if($t->user_id==$p->user_id)
                                    <tr>
                                        <td>{{$t->nama_lengkap}}</td>
                                        <td class="text-center">
                                            @foreach($unit_taruna as $u)
                                                @if($u->id==$t->unit_id)
                                                    {{$u->nama_unit}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            @foreach($kelas_taruna as $k)
                                                @if($k->id==$t->kelas_id)
                                                    {{$k->nama_kelas}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="text-center">{{$t->nomor_kamar}}</td>
                                        <td class="text-center">{{$p->tanggal_mulai}}</td>

                                        @if($p->isDone==true)
                                        <td class="text-center"><span class="badge bg-success">Done</span></td>
                                        @else
                                            @if($p->isApproved==true)
                                            <td class="text-center"><span class="badge bg-info">Approved</span></td>
                                            @else
                                            <td class="text-center"><span class="badge bg-danger">Waiting for approval</span></td>
                                            @endif
                                        @endif

                                        <td class="text-center"><button type="button" class="btn btn-primary">Approve</button></td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Daftar Taruna Izin Bermalam
                    </h5>
                    <h6 class="card-title">22/10/2024 - 23/10/2024</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead class="table-head text-center">
                            <tr>
                                <th>Nama</th>
                                <th>Unit</th>
                                <th>Kelas</th>
                                <th>Asrama</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Persetujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bermalamall as $p)
                                @foreach($taruna as $t)
                                    @if($t->user_id==$p->user_id)
                                    <tr>
                                        <td>{{$t->nama_lengkap}}</td>
                                        <td class="text-center">
                                            @foreach($unit_taruna as $u)
                                                @if($u->id==$t->unit_id)
                                                    {{$u->nama_unit}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            @foreach($kelas_taruna as $k)
                                                @if($k->id==$t->kelas_id)
                                                    {{$k->nama_kelas}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="text-center">{{$t->nomor_kamar}}</td>
                                        <td class="text-center">{{$p->tanggal_mulai}}</td>

                                        @if($p->isDone==true)
                                        <td class="text-center"><span class="badge bg-success">Done</span></td>
                                        @else
                                            @if($p->isApproved==true)
                                            <td class="text-center"><span class="badge bg-info">Approved</span></td>
                                            @else
                                            <td class="text-center"><span class="badge bg-danger">Waiting for approval</span></td>
                                            @endif
                                        @endif

                                        <td class="text-center"><button type="button" class="btn btn-primary">Approve</button></td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
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


