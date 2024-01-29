<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Buat Data Makan Baru</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Data Makan/Buat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <form action="#" method="post">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Makan</h4>
                                <div class="input-group mt-3">
                                    <!-- <label for="inputDate" class="label">Masukkan Tanggal</label> -->
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Masukkan Tanggal</span>
                                    </div>
                                    <input type="date" name="inputDate" id="inputDate"  class="form-control flatpickr-no-config mb-3" placeholder="Select date..">
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th rowspan="2" scope="col"><strong>Tujuan</strong></th>
                                            <th colspan="7" scope="col" class="text-center"><strong>Waktu Makan</strong></th>
                                        </tr>
                                        <tr class="text-center">
                                            <th scope="col"><strong>Sahur</strong></th>
                                            <th scope="col"><strong>Pagi</strong></th>
                                            <th scope="col"><strong>Snack</strong></th>
                                            <th scope="col"><strong>Siang</strong></th>
                                            <th scope="col"><strong>Malam</strong></th>
                                            <th scope="col"><strong>Snack</strong></th>
                                            <th scope="col"><strong>Takjil</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Ruang Makan</th>
                                            <th class="text-center"><input type="text" class="col-6 p-1" name="" id="" value="1"></th>
                                            <th class="text-center"><input type="text" class="col-6 p-1" name="" id="" value="1"></th>
                                            <th class="text-center"><input type="text" class="col-6 p-1" name="" id="" value="1"></th>
                                            <th class="text-center"><input type="text" class="col-6 p-1" name="" id="" value="1"></th>
                                            <th class="text-center"><input type="text" class="col-6 p-1" name="" id="" value="1"></th>
                                            <th class="text-center"><input type="text" class="col-6 p-1" name="" id="" value="1"></th>
                                            <th class="text-center"><input type="text" class="col-6 p-1" name="" id="" value="1"></th>
                                        </tr>
                                        <tr>
                                            <th>Sampataloka</th>
                                            <th class="text-center">1</th>
                                            <th class="text-center">2</th>
                                            <th class="text-center">3</th>
                                            <th class="text-center">4</th>
                                            <th class="text-center">5</th>
                                            <th class="text-center">6</th>
                                            <th class="text-center">7</th>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <th class="text-center">2</th>
                                            <th class="text-center">4</th>
                                            <th class="text-center">6</th>
                                            <th class="text-center">8</th>
                                            <th class="text-center">10</th>
                                            <th class="text-center">12</th>
                                            <th class="text-center">14</th>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                                <table class="table  table-striped table-bordered">
                                    <thead class="thead-light text-center">
                                        <tr>
                                            <th colspan="3">Data Kondisi Khusus</th>
                                        </tr>
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
                                            <th>Bani, Rahdian</th>
                                            <th>2</th>
                                            <th>Udang</th>
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
                                            <th>Khirsa</th>
                                            <th>1</th>
                                            <th>Udang</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-12 col-xl-7 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Data</h4>
                                <div class="col-2">
                                    <div class="form-control ">
                                        <div class="theme-toggle d-flex gap-2  align-items-center justify-content-center mt-2">
                                            <h6 class="">Puasa</h6>
                                            <div class="form-check form-switch fs-6">
                                                <input class="form-check-input me-0" type="checkbox" id="toggle-puasa">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div class="row">
                                     
                                </div>
                            
                                <input type="submit" class="btn btn-primary disabled" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    
    <section class="section">
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
    </section>
</x-app-layout>


