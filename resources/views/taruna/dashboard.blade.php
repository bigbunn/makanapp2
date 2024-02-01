<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last p-2">
                <h3>Taruna</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="row">
        <div class="card">
            <div class="card-header row">
                <div class="col-4 col-lg-3 col-md-4 col-xl-3 col-sm-12">
                    <div class="avatar avatar-full bg-warning " x-show="! photoPreview">
                        <img src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="col-8 col-md-6 col-sm-12 justify-content-start mt-2">
                    <h6 class="card-title mb-5">{{ auth()->user()->name }}</h6>
                    <p class="card-description">{{ $taruna[0]->npm}}</p>
                    <p class="card-description">{{ $kelas_taruna[0]->nama_kelas}}</p>
                    <p class="card-description">{{ $unit_taruna[0]->nama_unit}}</p>

                    </div>
                </div>
            </div>
            <div class="card-body">

            </div>
        </div>
    </section>

    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <a href="{{route('pantangan.pengajuan')}}">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Pantangan</h6>
                                        <h6 class="font-extrabold mb-0">
                                            @if(isset($pantangan_taruna[0]))
                                                {{$pantangan_taruna.length()}}
                                            @else
                                                Tidak ada
                                            @endif
                                        </h6>
                                    </div>
                                </div> 
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card"> 
                        <a href="{{route('puasa.daftar')}}">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Puasa</h6>
                                        <h6 class="font-extrabold mb-0">23/11/2024</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <a href="{{route('keluhan.laporan')}}">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Keluhan</h6>
                                        <h6 class="font-extrabold mb-0">
                                            @if(isset($keluhan_taruna[0]))
                                                {{$keluhan_taruna.length()}}
                                            @else
                                                Tidak ada
                                            @endif
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <!-- <a href="{{route('puasa.index')}}"> -->
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Perizinan</h6>
                                        <h6 class="font-extrabold mb-0">Belum ada</h6>
                                    </div>
                                </div>
                            </div>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</x-app-layout>


