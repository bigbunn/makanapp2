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
</x-app-layout>


