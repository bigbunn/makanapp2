<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Keluhan</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Keluhan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <div class="col-12">
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
    </section>
</x-app-layout>


