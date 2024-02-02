<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pendaftaran Puasa</h3>
                <!-- <p class="text-subtitle text-muted">...</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Puasa/Daftar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Daftar</h6>
                
            </div>
            <div class="card-body row">
                <div class="col-3 col-md-3 col-sm-12">
                    <div class="form-control">
                        <div class="theme-toggle d-flex gap-2  align-items-center justify-content-center mt-2">
                            <h6 class="">Puasa</h6>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-puasa" data-bs-toggle="collapse" data-bs-target="#collapsePuasa" aria-expanded="false" aria-controls="collapsePuasa">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-9 col-md-9 col-sm-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                    @endif
                    <form action="{{route('puasa.create')}}" method="post" class="form collapse" id="collapsePuasa">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal">Tanggal Puasa</label>
                            <input name="tanggal" type="date" id="flatpickr" class="form-control mb-3 flatpickr-no-config" required>
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
                        Daftar Taruna Berpuasa
                    </h5>
                    <h6 class="card-description">22/10/2024</h6>
                </div>
                <div class="card-body">
                    @if(isset($datapuasa))
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Unit</th>
                                    <th>Kelas</th>
                                    <th>Asrama</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datapuasa as $dp)
                                    <tr>
                                        <td>{{ $dp['nama_taruna'] }}</td>
                                        <td>{{ $dp['unit_taruna']  }}</td>
                                        <td>{{ $dp['kelas_taruna'] }}</td>
                                        <td>{{ $dp['asrama_taruna']}}</td>
                                        @if(new Datetime($dp['tanggal_puasa'])>= new Datetime())
                                            <td><a href="/puasa/hapus/{{$dp['puasa_id']}}"><button type="button" class="btn btn-danger"><i class="bi bi-dash"></button></a></td>
                                        @endif
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    @else
                        No entry
                    @endif
                </div>
            </div>
        </div>
    </section>

    @section('script')
        <script>
            var today = new Date().toISOString().split('T')[0];
            document.getElementsByName("tanggal")[0].setAttribute('min', today);
        </script>
    @endsection
</x-app-layout>


