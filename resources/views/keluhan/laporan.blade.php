<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                <h3>Laporan Keluhan</h3>
                <p class="text-subtitle text-muted">Isi formulir berikut atau pilih menu di bawah</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseKeluhanSaya">Laporan Saya</button>
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

    <section class="section collapse" id="collapseKeluhanSaya">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Keluhan Saya</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu Makan</th>
                                <th>Menu</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datakeluhan as $dk)
                                @foreach($datamenu as $dm)
                                    @if($dm->id==$dk->menu_id)
                                        <tr>
                                            <th>{{$dm->tanggal}}</th>
                                            <th>{{$dm->waktu_makan}}</th>
                                            <th>{{$dk->menu_type}}</th>
                                            <th>{{$dk->keterangan_keluhan}}</th>
                                        </tr>
                                    @endif
                                @endforeach
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section" id="collapselaporan">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Laporan</h6>
            </div>
            <div class="card-body">
                <form action="{{route('keluhan.create')}}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                    <input type="hidden" id="inputMenuId" name="menu_id" value="">
                    <div class="form-group">
                        <label for="tanggal">Tanggal Keluhan</label>
                        <input name="tanggal" type="text" placeholder="Pilih tanggal" onfocus="(this.type='date')" id="form-tanggal" class="form-control mb-3 flatpickr-no-config" required onchange="updatewaktu()">
                    </div>
                    <div class="form-group">
                        <label for="waktumakan">Waktu Makan</label>
                        <select name="waktumakan" id="waktumakan" class="form-select" required onchange="updatemenu()"></select>
                    </div>
                    <div class="form-group">
                        <label for="menu">Menu Makan</label>
                        <select name="menumakan" id="menumakanselect" class="form-select" required></select> 
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
                        <a href="#" onclick='updateform({{$menu->id}})'>
                            <div class="card hover">
                                <div class="card-header justify-content-center">
                                    <h6 class="font-extrabold">{{ $menu->tanggal}}</h6>
                                    <h6 class="font-extrabold">Makan {{ $menu->waktu_makan}}</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        
                                        <a href="#"><tr><th>{{$menu->nasi}}</th></tr></a>
                                        <a href="#"><tr><th>{{$menu->lauk_satu}}</th></tr></a>
                                        <a href="#"><tr><th>{{$menu->lauk_dua}}</th></tr></a>
                                        <a href="#"><tr><th>{{$menu->sayur}}</th></tr></a>
                                        <a href="#"><tr><th>{{$menu->buah}}</th></tr></a>
                                        <a href="#"><tr><th>{{$menu->komplemen}}</th></tr></a>
                                    </table>
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
        var datamenu = @json($datamenu);

        function updateform($menu_id){
            var inputmenuid = document.getElementById('inputMenuId');
            inputmenuid.value=$menu_id;

            var tanggalInput = document.getElementById('form-tanggal');
            var waktumakanselect = document.getElementById('waktumakan');
            var menumakanselect = document.getElementById('menumakanselect');

            for (var key in datamenu){
                if(datamenu[key]['id']==$menu_id){
                    tanggalInput.value=datamenu[key]['tanggal'];
                    updatewaktu();
                    var indeksopsi=Array.from(waktumakanselect.options).findIndex(option=>option.value==datamenu[key]['waktu_makan']);
                    waktumakanselect.selectedIndex=indeksopsi;
                    updatemenu();
                }
            }
        }

        function updatewaktu(){
            var tanggalInput = document.getElementById('form-tanggal');
            var waktumakanselect = document.getElementById('waktumakan');

            waktumakanselect.innerHTML='';
            tanggalValue = tanggalInput.value;
            addoption(waktumakanselect,"Choose...",'');
            for(var key in datamenu){
                if(datamenu[key]['tanggal']==tanggalValue){
                    addoption(waktumakanselect,datamenu[key]['waktu_makan'],datamenu[key]['waktu_makan']);
                }
            }
            updatemenu();
        }

        function updatemenu(){
            var tanggalInput = document.getElementById('form-tanggal');
            var waktumakanselect = document.getElementById('waktumakan');
            var menumakanselect = document.getElementById('menumakanselect');
            menumakanselect.innerHTML = '';
            
            var tanggalValue = tanggalInput.value;
            var waktumakanValue = waktumakanselect.value;
            
            for(var key in datamenu){
                if(datamenu[key]['tanggal']==tanggalValue){
                    if(datamenu[key]['waktu_makan']==waktumakanValue){
                        addoption(menumakanselect,"Choose...",'');
                        addoption(menumakanselect,datamenu[key]['nasi'],datamenu[key]['nasi']);
                        addoption(menumakanselect,datamenu[key]['lauk_satu'],datamenu[key]['lauk_satu']);
                        addoption(menumakanselect,datamenu[key]['lauk_dua'],datamenu[key]['lauk_dua']);
                        addoption(menumakanselect,datamenu[key]['sayur'],datamenu[key]['sayur']);
                        addoption(menumakanselect,datamenu[key]['buah'],datamenu[key]['buah']);
                        if(datamenu[key]['komplemen']!=''){
                            addoption(menumakanselect,datamenu[key]['komplemen'],datamenu[key]['komplemen']);
                        }
                    }
                }
            }
            
            
        }

        function addoption(select, text, value,isDisabled=false) {
            var option = document.createElement('option');
            option.text = text;
            option.value = value;
            if(isDisabled){
                option.disabled=true;
            }
            select.add(option);
            
        }
    </script>
    @endsection
</x-app-layout>


