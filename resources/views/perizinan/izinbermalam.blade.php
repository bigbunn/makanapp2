<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Perizinan</h3>
                <p class="text-subtitle text-muted">...</p>
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
                    <form action="" method="post" class="form collapse" id="collapseBermalam">
                        <div class="form-group">
                            <label for="tanggal">Tanggal Izin Bermalam</label>
                            <input name="tanggal" type="date" id="flatpickr-range" class="form-control mb-3 flatpickr-range" required>
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
                        Daftar Taruna Pesiar
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
                            <tr>
                                <td>Graiden</td>
                                <td>Unit C Satria</td>
                                <td>4 RPLK</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>Dale</td>
                                <td>Unit D Satria</td>
                                <td>4 RKS Red</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>Nathaniel</td>
                                <td>Unit A Madya</td>
                                <td>3 RPK</td>
                                <td>C</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>


