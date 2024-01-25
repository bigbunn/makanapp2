<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pantangan</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Pantangan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
    <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Pantangan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
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
                                    <td class="col-2">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold">Si Cantik</p>
                                        </div>
                                    </td>
                                    <td class="col-1">
                                        <p class=" mb-0">Unit A Pratama</p>
                                    </td>
                                    <td class="col-1">
                                        <p class=" mb-0">1 RKS A</p>
                                    </td>
                                    <td class="col-1">
                                        <p class=" mb-0">A501</p>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Udang</p>
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


