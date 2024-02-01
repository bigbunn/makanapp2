<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan Keluhan</h3>
                <p class="text-subtitle text-muted">Isi formulir berikut atau pilih menu di bawah</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard/Keluhan/Laporan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Laporan</h6>
            </div>
            <div class="card-body">
                <form action="route('keluhan.create')" method="post">

                    <div class="form-group">
                        <label for="tanggal">Tanggal Keluhan</label>
                        <input name="formtanggal" type="date" id="flatpickr form-tanggal" onchange="updatewaktu()" class="form-control mb-3 flatpickr-no-config" required>
                    </div>
                    <div class="form-group">
                        <label for="waktumakan">Waktu Makan</label>
                        <select name="waktumakan" id="waktumakan" class="form-select" onchange="updatemenu()" required>
                            
                            <option selected disabled>Choose...</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="menu">Menu Makan</label>
                        <select name="menumakanselect" id="menumakanselect" class="form-select" required>
                            
                            <option selected disabled>Choose...</option>
                            <option value="pagi">Nasi (Putih)</option>
                            <option value="siang">Lauk utama (ayam)</option>
                            <option value="malam">Lauk pendamping (tempe)</option>
                            <option value="malam">Sayur (sop)</option>
                            <option value="malam">Buah (semangka)</option>
                            <option value="malam" data-bs-toggle="collapse" data-bs-target="#menulainnya" aria-expanded="false" aria-controls="menulainnya">Lainnya...</option>
                        </select>
                    </div>
                    <div class="form-group collapse" id="menulainnya" name="menulainnya">
                        <label for="deskripsikeluhan">Keterangan</label>
                        <input type="text" class="form-control" name="keteranganmenulainnya" id="keteranganmenulainnya" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsikeluhan">Deskripsi Keluhan</label>
                        <textarea type="text" class="form-control" name="deskripsikeluhan" id="deskripsikeluhan" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <section class="section my-3">
        <div class="col-12">
            <div class="row">
                @foreach($datamenu as $menu)
                    <div class="col-12 col-lg-2 col-md-3 col-sm-6">
                        <a data-bs-toggle="modal" data-bs-target="#keluhanForm">
                            <div class="card hover">
                                <div class="card-header justify-content-center">
                                    <h6 class="font-extrabold">{{ $menu->tanggal}}</h6>
                                    <h6 class="font-extrabold">Makan {{ $menu->waktu_makan}}</h6>
                                </div>
                                <div class="card-body">
                                    <table>
                                        
                                        <tr><th>{{$menu->nasi}}</th></tr>
                                        <tr><th>{{$menu->lauk_satu}}</th></tr>
                                        <tr><th>{{$menu->lauk_dua}}</th></tr>
                                        <tr><th>{{$menu->sayur}}</th></tr>
                                        <tr><th>{{$menu->buah}}</th></tr>
                                        <tr><th>{{$menu->komplemen}}</th></tr>
                                    </table>
                                </div>
                            </div>
                            <div class="modal fade text-left" id="keluhanForm" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Masukan Keluhan</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="route('keluhan.create')">
                                            <div class="modal-body">
                                                <h6 class="modal-description">{{$menu->tanggal}}</h6>
                                                <input type="hidden" name="menu_id" value="{{$menu->id}}">
                                                
                                                <label for="menukeluhan">Menu :</label>
                                                <select class="form-select" name="menukeluhan" id="menukeluhan">
                                                    <option value="nasi">{{$menu->nasi}}</option>
                                                    <option value="lauk_satu">{{$menu->lauk_satu}}</option>
                                                    <option value="lauk_dua">{{$menu->lauk_dua}}</option>
                                                    <option value="sayur">{{$menu->sayur}}</option>
                                                    <option value="buah">{{$menu->buah}}</option>
                                                    <option value="komplemen">{{$menu->komplemen}}</option>
                                                </select>

                                                <label for="deskripsikeluhan">Keluhan :</label>
                                                <div class="form-group">
                                                    <input id="deskripsikeluhan" type="text" placeholder="Deskripsi Keluhan"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ms-1"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Submit</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>

    @section('script')
    <script>
        var datamenu = <?php echo json_encode($datamenu); ?>;

        function updatewaktu(){
            var tanggalInput = document.getElementById('formtanggal');
            var waktumakanselect = document.getElementById('waktumakan');

            waktumakanselect.innerHTML='';
            var waktuMakanOptions = getUniqueOptions(datamenu, 'waktu_makan', 'tanggal', tanggalInput.value);
            if(tanggalValue){
                waktuMakanOptions.forEach(function(option) {
                    addOption(waktumakanselect, option, option);
                });
            }

            updateMenu()
        }

        function updatemenu(){
            var tanggalInput = document.getElementById('formtanggal');
            var waktumakanselect = document.getElementById('waktumakan');
            var menumakanselect = document.getElementById('menumakanselect');
            menuMakanSelect.innerHTML = '';

            var menuMakanOptions = getUniqueOptions(datamenu, 'menu', ['tanggal', 'waktu_makan'], [tanggalInput.value, waktuMakanSelect.value]);
            menuMakanOptions.forEach(function(option) {
                addOption(menuMakanSelect, option, option);
            });
        }

        function getUniqueOptions(data, key, filterKeys, filterValues) {
            // Fungsi untuk mendapatkan nilai unik dari suatu kunci dari objek
            var uniqueOptions = [];
            var uniqueValues = new Set();

            data.forEach(function(item) {
                // Filter item berdasarkan filterKeys dan filterValues jika diberikan
                var isFiltered = true;
                if (filterKeys && filterValues) {
                    for (var i = 0; i < filterKeys.length; i++) {
                        if (item[filterKeys[i]] !== filterValues[i]) {
                            isFiltered = false;
                            break;
                        }
                    }
                }

                if (isFiltered) {
                    var value = item[key];
                    if (!uniqueValues.has(value)) {
                        uniqueValues.add(value);
                        uniqueOptions.push(value);
                    }
                }
            });

            return uniqueOptions;
        }

        function addOption(select, text, value) {
            var option = document.createElement('option');
            option.text = text;
            option.value = value;
            select.add(option);
        }
    </script>
    @endsection
</x-app-layout>


