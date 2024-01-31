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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Perizinan/Izin Keluar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Daftar Izin Keluar</h6>
                <!-- <h6 class="card-description">22/10/2024</h6> -->
                
            </div>
            <div class="card-body row">
                <div class="col-3 col-md-3 col-sm-12">
                    <div class="form-control">
                        <div class="theme-toggle d-flex gap-2  align-items-center justify-content-center mt-2">
                            <h6 class="">Izin Keluar</h6>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-keluar" data-bs-toggle="collapse" data-bs-target="#collapseKeluar" aria-expanded="false" aria-controls="collapseKeluar">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-9 col-md-9 col-sm-12">
                    <form action="" method="post" class="form collapse" id="collapseKeluar">
                        <div class="form-group">
                            <label for="tanggal">Tanggal Izin Keluar</label>
                            <input name="tanggal" type="date" id="flatpickr" class="form-control mb-3 flatpickr-no-config" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Kembali</label>
                            <input name="tanggal" type="date" id="flatpickr" class="form-control mb-3 flatpickr-no-config" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Tujuan</label>
                            <input name="alamat" type="text" class="form-control mb-3" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Tujuan</label>
                            <input name="alamat" type="text" class="form-control mb-3" required>
                        </div>
                        
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <h6 class="">Makan diuangkan</h6>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-diuangkan" data-bs-toggle="collapse" data-bs-target="#collapseDiuangkan" aria-expanded="false" aria-controls="collapseDiuangkan">
                            </div>
                        </div>
                        <div class="form-group collapse" id="collapseDiuangkan">
                            <label for="keterangandiuangkan">Keterangan Makan Diuangkan</label>
                            <input name="keterangandiuangkan" type="text" class="form-control mb-3" placeholder="Makan pagi 22/10/2024 - Makan siang 23/10/2024" required>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <h6 class="">Makan di box</h6>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dibox" data-bs-toggle="collapse" data-bs-target="#collapseDibox" aria-expanded="false" aria-controls="collapseDibox">
                            </div>
                        </div>
                        <div class="form-group collapse" id="collapseDibox">
                            <label for="keterangandibox">Keterangan Makan Di dalam box</label>
                            <input name="keterangandibox" type="text" class="form-control mb-3" placeholder="Makan pagi 22/10/2024 di auditorium" required>
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
                        Daftar Taruna Izin Keluar
                    </h5>
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


