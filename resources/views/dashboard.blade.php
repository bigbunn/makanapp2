<script>
    $( ".date" ).flatpickr({
   dateFormat:"mm/dd/yyyy",
   disableMobile: "true",
   defaultDate: [new Date(), "2016-10-30"]
    });
</script>

<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Status Makan Taruna</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Makan</h4>
                <input type="date" id="flatpickr" class="form-control mb-3 flatpickr-no-config" placeholder="Select date...">
            </div>
            <div class="card-body">
                <table class="table  table-striped table-bordered">
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
                            <th class="text-center">1</th>
                            <th class="text-center">2</th>
                            <th class="text-center">3</th>
                            <th class="text-center">4</th>
                            <th class="text-center">5</th>
                            <th class="text-center">6</th>
                            <th class="text-center">7</th>
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
    </section>

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
        <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4>Data Keluhan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Keluhan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{asset('images/faces/5.jpg')}}">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">22/11/2023</p>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Nasi berair!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{asset('images/faces/2.jpg')}}">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">22/11/2023</p>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Lalat pada sayur</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{asset('images/faces/8.jpg')}}">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Singh Eknoor</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">22/11/2023</p>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Mie basi</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{asset('images/faces/3.jpg')}}">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Rani Jhadav</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">22/11/2023</p>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Susu basi</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Taruna Puasa</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">Europe</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">862</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-europe"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">America</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">375</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-america"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">India</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">625</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-india"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-danger" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">Indonesia</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">1025</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-indonesia"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </section>
</x-app-layout>


