<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Puasa</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
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
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Daftar Taruna Berpuasa
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
                                    <th>Pantangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Graiden</td>
                                    <td>Unit C Satria</td>
                                    <td>4 RPLK</td>
                                    <td>A</td>
                                    <td>
                                        <span class="badge bg-success">Tidak ada</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dale</td>
                                    <td>Unit D Satria</td>
                                    <td>4 RKS Red</td>
                                    <td>F</td>
                                    <td>
                                        <span class="badge bg-success">Tidak ada</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nathaniel</td>
                                    <td>Unit A Madya</td>
                                    <td>3 RPK</td>
                                    <td>C</td>
                                    <td>
                                        <span class="badge bg-danger">Ada</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
</x-app-layout>


