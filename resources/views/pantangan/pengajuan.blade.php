<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                <h3>Pengajuan Pantangan</h3>
                <p class="text-subtitle text-muted">...</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapsePantanganSaya">Pantangan Saya</button>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Pantangan/Pengajuan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <section class="section collapse" id="collapsePantanganSaya">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Pantangan Saya</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                                <th>Tanggal Pengajuan</th>
                                <th>Lauk Pantangan</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datapantangan as $dp)
                                <tr>
                                    <th>{{$dp->tanggal_mulai}}</th>
                                    <th>
                                        @if($dp->lauk_pantangan=='lainnya')
                                            {{$dp->pantangan_lainnya}}
                                        @else
                                            {{$dp->lauk_pantangan}}
                                        @endif
                                    </th>
                                    <th>{{$dp->keterangan_pantangan}}</th>
                                    @if($dp->isDone==true)
                                        <th><span class="badge bg-success">Sembuh</span></th>
                                    @else
                                        @if($dp->isApproved==true)
                                            <th><span class="badge bg-info">Diterima</span></th>
                                        @else
                                            <th><span class="badge bg-danger">Diproses</span></th>
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
                <h6 class="card-title">Pengajuan</h6>
            </div>
            <div class="card-body">
                <form action="{{route('pantangan.create')}}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                    <div class="form-group">
                        <label for="tanggal">Tanggal Mulai Pantangan</label>
                        <input name="tanggal" type="date" id="flatpickr" class="form-control mb-3 flatpickr-no-config" required>
                    </div>
                    <div class="form-group">
                        <label for="lauk_pantangan">Lauk pantangan</label>
                        <select name="lauk_pantangan" id="lauk_pantangan" class="form-select form-control mb-3">
                            <option selected disabled value="">Choose...</option>    
                            <option value="udang">Udang</option>
                            <option value="cumi">Cumi</option>
                            <option value="ikan">Ikan</option>
                            <option value="seafood">Seafood</option>
                            <option value="daging">Daging</option>
                            <option value="ayam">Ayam</option>
                            <option value="telur">Telur</option>
                            <option value="gorengan">Gorengan</option>
                            <option value="kerupuk">Kerupuk</option>
                            <option value="keripik">Keripik</option>
                            <option value="lainnya" >Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group" id="collapseLainnya">
                        <label for="pantangan_lainnya">Pantangan Lainnya</label>
                        <input type="text" class="form-control" name="pantangan_lainnya" id="pantangan_lainnya">
                    </div>
                    <div class="form-group">
                        <label for="keterangan_pantangan">Keterangan Pantangan</label>
                        <textarea type="text" class="form-control" name="keterangan_pantangan" id="keterangan_pantangan"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>


