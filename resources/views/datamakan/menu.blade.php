<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Menu Makan</h3>
                <button class="btn btn-success">Masukan Menu Baru</button>
                <button type="button" data-bs-toggle="modal" data-bs-target="#excelModal" class="btn btn-success"><img class="mx-2" src="{{asset('images/logo/excel.png')}}" alt="excel" style="max-width:20px" srcset="">Excel</button>

                <div class="modal fade text-left" id="excelModal" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel1">Basic Modal</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="card-text">Upload File Excel</p>
                                <input type="file" class="basic-filepond">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Submit</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Data Makan/Menu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section m-3">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="font-extrabold">01/12/2024</h6>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr><th>Nasi putih</th></tr>
                                <tr><th>Ayam kremes</th></tr>
                                <tr><th>Capcay</th></tr>
                                <tr><th>Tahu Goreng</th></tr>
                                <tr><th>Buah</th></tr>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</x-app-layout>


