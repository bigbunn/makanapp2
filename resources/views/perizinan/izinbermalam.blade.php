<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                <h3>Perizinan</h3>
                <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseBermalamSaya">Izin Bermalam Saya</button>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Perizinan/Izin Bermalam</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <section class="section collapse" id="collapseBermalamSaya">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Izin Bermalam Saya</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Alamat Tujuan</th>
                                <th>Alasan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($databermalam as $db)
                                <tr>
                                    <th>{{$db->tanggal_mulai}} - {{$db->tanggal_selesai}}</th>
                                    <th>{{$db->alamat}}</th>
                                    <th>{{$db->alasan}}</th>
                                    @if($db->isDone==true)
                                        <th><span class="badge bg-success">Done</span></th>
                                    @else
                                        @if($db->isApproved==true)
                                            <th><span class="badge bg-info">Approved</span></th>
                                        @else
                                            <th><span class="badge bg-danger">Processed</span></th>
                                        @endif
                                    @endif
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Daftar Izin Bermalam</h6>
                <!-- <h6 class="card-description">22/10/2024</h6> -->
                
            </div>
            <div class="card-body row">
                <div class="col-3 col-md-3 col-sm-12">
                    <div class="form-control">
                        <div class="theme-toggle d-flex gap-2  align-items-center justify-content-center mt-2">
                            <h6 class="">Izin Bermalam</h6>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-bermalam" data-bs-toggle="collapse" data-bs-target="#collapseBermalam" aria-expanded="false" aria-controls="collapseBermalam">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-9 col-md-9 col-sm-12">
                    <form action="{{route('perizinan.createizinbermalam')}}" method="post" class="form collapse" id="collapseBermalam">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal_mulai">Tanggal Mulai</label>
                            <input name="tanggal_mulai" type="date" id="flatpickr-range" class="form-control mb-3 flatpickr-range" required >
                        </div>
                        <div class="form-group">
                            <label for="tanggal_selesai">Tanggal Izin Bermalam</label>
                            <input name="tanggal_selesai" type="date" id="flatpickr-range" class="form-control mb-3 flatpickr-range" required >
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Tujuan</label>
                            <input name="alamat" type="text" class="form-control mb-3" required>
                        </div>
                        <div class="form-group">
                            <label for="alasan">Alasan Izin Bermalam</label>
                            <input name="alasan" type="text" class="form-control mb-3" required>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-2 ">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            
                        </div>
                    </form>
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
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Unit</th>
                                <th>Kelas</th>
                                <th>Asrama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bermalamall as $p)
                                @foreach($taruna as $t)
                                    @if($t->user_id==$p->user_id)
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
        <script>
            var today = new Date().toISOString().split('T')[0];
            document.getElementsByName("tanggal_mulai")[0].setAttribute('min', today);
            document.getElementsByName("tanggal_selesai")[0].setAttribute('min', today);
        </script>
    @endsection
</x-app-layout>


