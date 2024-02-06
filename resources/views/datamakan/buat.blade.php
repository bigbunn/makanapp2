<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Buat Data Makan Baru</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Data Makan/Buat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <form action="#" method="get">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Makan</h4>
                                <!-- <button type="button" onclick="updateTable()" class="btn btn-primary">Refresh</button> -->
                                
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-primary">
                                        <tr>
                                            <th rowspan="2" scope="col"><strong>Tujuan</strong></th>
                                            <th colspan="7" scope="col" class="text-center"><strong>Waktu Makan</strong></th>
                                        </tr>
                                        <tr class="text-center">
                                            <th scope="col" class="collapse" id="collapsePuasa"><strong>Sahur</strong></th>
                                            <th scope="col"><strong>Pagi</strong></th>
                                            <th scope="col"><strong>Snack</strong></th>
                                            <th scope="col"><strong>Siang</strong></th>
                                            <th scope="col"><strong>Malam</strong></th>
                                            <th scope="col"><strong>Snack</strong></th>
                                            <th scope="col" class="collapse" id="collapsePuasa"><strong>Takjil</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-info">
                                            <th>Ruang Makan</th>
                                            <th class="text-center collapse table-success" id="collapsePuasa"></th>
                                            <th class="text-center" id="cell-rm-pagi"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center collapse table-success" id="collapsePuasa"></th>
                                        </tr>
                                        <tr  class="table-info">
                                            <th>Sampataloka</th>
                                            <th class="text-center collapse table-success" id="collapsePuasa"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center collapse table-success" id="collapsePuasa"></th>
                                        </tr>
                                        <tr class="table-info collapse" id="collapseDiuangkan">
                                            <th>Diuangkan</th>
                                            <th class="text-center collapse table-success" id="collapsePuasa"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center collapse table-success" id="collapsePuasa"></th>
                                        </tr>
                                        <tr class="table-info collapse" id="collapseDiDalamBox">
                                            <th>Di Dalam Box</th>
                                            <th class="text-center collapse table-success" id="collapsePuasa"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center collapse table-success" id="collapsePuasa"></th>
                                        </tr>
                                        <tr class="table-primary">
                                            <th>Total</th>
                                            <th class="text-center collapse" id="collapsePuasa"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                            <th class="text-center collapse" id="collapsePuasa"></th>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                                <div class="p-3">
                                    <h6 class="card-title text-center">Data Kondisi Khusus</h6>
                                </div>
                                <table class="table  table-striped table-bordered">
                                    <thead class="thead-light text-center">
                                        <!-- <tr class="table-danger">
                                            <th colspan="3">Data Kondisi Khusus</th>
                                        </tr> -->
                                        <tr>
                                            <th colspan="3">Ruang Makan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th >Pantangan</th>
                                        </tr>
                                        <tr>
                                            @foreach($pantangan as $pan)
                                                @foreach($taruna as $t)
                                                    @if($t->user_id==$pan->user_id && $t->jenis_kelamin == 'laki-laki')
                                                        <th>{{$t->nama_lengkap}}</th>
                                                        <th>1</th>
                                                        <th>{{$pan->lauk_pantangan}}
                                                        @foreach($pantangan as $pan2)
                                                            @if($pan2->id != $pan->id && $pan2->user_id==$pan->user_id)
                                                                , {{$pan2->lauk_pantangan}}
                                                            @endif
                                                        @endforeach
                                                        </th>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </tbody>
                                    <thead class="thead-light text-center">
                                        <tr>
                                            <th colspan="3">Sampataloka</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th >Pantangan</th>
                                        </tr>
                                        <tr>
                                            @foreach($pantangan as $pan)
                                                @foreach($taruna as $t)
                                                    @if($t->user_id==$pan->user_id && $t->jenis_kelamin == 'perempuan')
                                                        <th>{{$t->nama_lengkap}}</th>
                                                        <th>1</th>
                                                        <th>{{$pan->lauk_pantangan}}
                                                        @foreach($pantangan as $pan2)
                                                            @if($pan2->id != $pan->id && $pan2->user_id==$pan->user_id)
                                                                , {{$pan2->lauk_pantangan}}
                                                            @endif
                                                        @endforeach
                                                        </th>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-12 col-xl-7 col-md-12 col-lg-12" onchange="updateTable()">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Data</h4>
                                <div class="input-group mt-3">
                                    <!-- <label for="inputDate" class="label">Masukkan Tanggal</label> -->
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Masukkan Tanggal</span>
                                    </div>
                                    <input type="date" name="inputDate" id="inputDate"  class="form-control flatpickr-no-config mb-3" placeholder="Select date..">
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-control">
                                            <div class="theme-toggle d-flex gap-2  align-items-center justify-content-center mt-2">
                                                <h6 class="">Puasa</h6>
                                                <div class="form-check form-switch fs-6">
                                                    <input class="form-check-input me-0" type="checkbox" id="toggle-puasa" data-bs-toggle="collapse" data-bs-target="#collapsePuasa" aria-expanded="false" aria-controls="collapsePuasa">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-control">
                                            <div class="theme-toggle d-flex gap-2  align-items-center justify-content-center mt-2">
                                                <h6 class="">Diuangkan</h6>
                                                <div class="form-check form-switch fs-6">
                                                    <input class="form-check-input me-0" type="checkbox" id="toggle-diuangkan" data-bs-toggle="collapse" data-bs-target="#collapseDiuangkan" aria-expanded="false" aria-controls="collapseDiuangkan">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-control">
                                            <div class="theme-toggle d-flex gap-2  align-items-center justify-content-center mt-2">
                                                <h6 class="">Di dalam box</h6>
                                                <div class="form-check form-switch fs-6">
                                                    <input class="form-check-input me-0" type="checkbox" id="toggle-didalambox" data-bs-toggle="collapse" data-bs-target="#collapseDiDalamBox" aria-expanded="false" aria-controls="collapseDiDalamBox">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-control">
                                            <div class="theme-toggle d-flex gap-2  align-items-center justify-content-center mt-2">
                                                <h6 class="">Lainnya</h6>
                                                <div class="form-check form-switch fs-6">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#collapselainnya" aria-expanded="false" aria-controls="collapselainnya"><i class="bi bi-plus"></i></button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Ruang Makan</h5>

                                            </div>
                                            <div class="card-body">
                                            <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                <label for="sahur" class="input-group-text col-4">Sahur</label>
                                                <input class="col-8" type="text" name="sahur" id="rmsahur">
                                                </div>

                                            <div class="input-group mb-3">
                                                <label for="pagi" class="input-group-text col-4">Pagi</label>
                                                <input class="col-8" type="text" name="pagi" id="rmpagi" value="{{$dataTaruna['jumlahPutra']}}">
                                                </div>


                                                <div class="input-group mb-3">
                                                <label for="snackpagi" class="input-group-text col-4">Snack Pagi</label>
                                                <input class="col-8" type="text" name="snackpagi" id="rmsnackpagi" value="{{$dataTaruna['jumlahPutra']}}">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="siang" class="input-group-text col-4">Siang</label>
                                                <input class="col-8" type="text" name="siang" id="rmsiang" value="{{$dataTaruna['jumlahPutra']}}">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="malam" class="input-group-text col-4">Malam</label>
                                                <input class="col-8" type="text" name="malam" id="rmmalam" value="{{$dataTaruna['jumlahPutra']}}">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="snackmalam" class="input-group-text col-4">Snack Malam</label>
                                                <input class="col-8" type="text" name="snackmalam" id="rmsnackmalam" value="{{$dataTaruna['jumlahPutra']}}">
                                                </div>

                                                <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                <label for="takjil" class="input-group-text col-4">Takjil</label>
                                                <input class="col-8" type="text" name="takjil" id="rmtakjil">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Sampataloka</h5>

                                            </div>
                                            <div class="card-body">
                                            <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                <label for="sahur" class="input-group-text col-4">Sahur</label>
                                                <input class="col-8" type="text" name="sahur" id="sahur">
                                                </div>

                                            <div class="input-group mb-3">
                                                <label for="pagi" class="input-group-text col-4">Pagi</label>
                                                <input class="col-8" type="text" name="pagi" id="pagi" value="{{$dataTaruna['jumlahPutri']}}">
                                                </div>


                                                <div class="input-group mb-3">
                                                <label for="snackpagi" class="input-group-text col-4">Snack Pagi</label>
                                                <input class="col-8" type="text" name="snackpagi" id="snackpagi" value="{{$dataTaruna['jumlahPutri']}}">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="siang" class="input-group-text col-4">Siang</label>
                                                <input class="col-8" type="text" name="siang" id="siang" value="{{$dataTaruna['jumlahPutri']}}">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="malam" class="input-group-text col-4">Malam</label>
                                                <input class="col-8" type="text" name="malam" id="malam" value="{{$dataTaruna['jumlahPutri']}}">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="snackmalam" class="input-group-text col-4">Snack Malam</label>
                                                <input class="col-8" type="text" name="snackmalam" id="snackmalam" value="{{$dataTaruna['jumlahPutri']}}">
                                                </div>

                                                <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                <label for="takjil" class="input-group-text col-4">Takjil</label>
                                                <input class="col-8" type="text" name="takjil" id="takjil">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-6 collapse" id="collapseDiuangkan">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Diuangkan</h5>

                                            </div>
                                            <div class="card-body">
                                            <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                <label for="sahur" class="input-group-text col-4">Sahur</label>
                                                <input class="col-8" type="text" name="sahur" id="sahur">
                                                </div>

                                            <div class="input-group mb-3">
                                                <label for="pagi" class="input-group-text col-4">Pagi</label>
                                                <input class="col-8" type="text" name="pagi" id="pagi">
                                                </div>


                                                <div class="input-group mb-3">
                                                <label for="snackpagi" class="input-group-text col-4">Snack Pagi</label>
                                                <input class="col-8" type="text" name="snackpagi" id="snackpagi">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="siang" class="input-group-text col-4">Siang</label>
                                                <input class="col-8" type="text" name="siang" id="siang">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="malam" class="input-group-text col-4">Malam</label>
                                                <input class="col-8" type="text" name="malam" id="malam">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="snackmalam" class="input-group-text col-4">Snack Malam</label>
                                                <input class="col-8" type="text" name="snackmalam" id="snackmalam">
                                                </div>

                                                <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                <label for="takjil" class="input-group-text col-4">Takjil</label>
                                                <input class="col-8" type="text" name="takjil" id="takjil">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-6 collapse" id="collapseDiDalamBox">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Di dalam box</h5>

                                            </div>
                                            <div class="card-body">
                                            <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                <label for="sahur" class="input-group-text col-4">Sahur</label>
                                                <input class="col-8" type="text" name="sahur" id="sahur">
                                                </div>

                                            <div class="input-group mb-3">
                                                <label for="pagi" class="input-group-text col-4">Pagi</label>
                                                <input class="col-8" type="text" name="pagi" id="pagi">
                                                </div>


                                                <div class="input-group mb-3">
                                                <label for="snackpagi" class="input-group-text col-4">Snack Pagi</label>
                                                <input class="col-8" type="text" name="snackpagi" id="snackpagi">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="siang" class="input-group-text col-4">Siang</label>
                                                <input class="col-8" type="text" name="siang" id="siang">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="malam" class="input-group-text col-4">Malam</label>
                                                <input class="col-8" type="text" name="malam" id="malam">
                                                </div>

                                                <div class="input-group mb-3">
                                                <label for="snackmalam" class="input-group-text col-4">Snack Malam</label>
                                                <input class="col-8" type="text" name="snackmalam" id="snackmalam">
                                                </div>

                                                <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                <label for="takjil" class="input-group-text col-4">Takjil</label>
                                                <input class="col-8" type="text" name="takjil" id="takjil">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-6 collapse" id="collapselainnya">
                                        <div class="card">
                                            
                                            <div class="card-header">
                                                <h5 class="card-title col-11">Keterangan Lainnya <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="collapse" data-bs-target="#collapselainnya" aria-expanded="false" aria-controls="collapselainnya"><i class="bi bi-dash"></i></button></h5>
                                                
                                                <div class="input-group mb-3">
                                                <!-- <label for="keteranganlainnya1" class="input-group-text col-4">Keterangan</label> -->
                                                <input class="col-12" type="text" name="keteranganLainnya1" id="keteranganLainnya1" placeholder="ex: Di bojongsari">
                                            </div>
                                            </div>
                                            
                                            <div class="card-body">
                                                <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                    <label for="sahur" class="input-group-text col-4">Sahur</label>
                                                    <input class="col-8" type="text" name="sahur" id="sahur">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label for="pagi" class="input-group-text col-4">Pagi</label>
                                                    <input class="col-8" type="text" name="pagi" id="pagi">
                                                </div>


                                                <div class="input-group mb-3">
                                                    <label for="snackpagi" class="input-group-text col-4">Snack Pagi</label>
                                                    <input class="col-8" type="text" name="snackpagi" id="snackpagi">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label for="siang" class="input-group-text col-4">Siang</label>
                                                    <input class="col-8" type="text" name="siang" id="siang">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label for="malam" class="input-group-text col-4">Malam</label>
                                                    <input class="col-8" type="text" name="malam" id="malam">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label for="snackmalam" class="input-group-text col-4">Snack Malam</label>
                                                    <input class="col-8" type="text" name="snackmalam" id="snackmalam">
                                                </div>

                                                <div class="input-group mb-3 collapse" id="collapsePuasa">
                                                    <label for="takjil" class="input-group-text col-4">Takjil</label>
                                                    <input class="col-8" type="text" name="takjil" id="takjil">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            
                                <input type="submit" class="btn btn-primary disabled" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    
    <!-- <section class="section">
        <div>
            <div class="row">
                <div class="col-12 col-lg-5 col-md-12">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 col-md-12">
                    
                </div>
            </div>
        </div>
    </section> -->

    @section('script')
        <script>
            updateTable();
            function updateTable(){
                var rm1 = document.getElementById("rmpagi").value;

                document.getElementById("cell-rm-pagi").innerText = rm1;
            }
        </script>

    @endsection
</x-app-layout>


