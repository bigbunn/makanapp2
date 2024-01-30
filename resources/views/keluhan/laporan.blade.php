<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan Keluhan</h3>
                <p class="text-subtitle text-muted">...</p>
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
                <form action="" method="post">

                    <div class="form-group">
                        <label for="tanggal">Tanggal Keluhan</label>
                        <input name="tanggal" type="date" id="flatpickr" class="form-control mb-3 flatpickr-no-config" required>
                    </div>
                    <div class="form-group">
                        <label for="waktumakan">Waktu Makan</label>
                        <select name="waktumakan" id="waktumakan" class="form-select" required>
                            
                            <option selected disabled>Choose...</option>
                            <option value="pagi">Makan Pagi</option>
                            <option value="siang">Makan Siang</option>
                            <option value="malam">Makan Malam</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="menu">Menu Makan</label>
                        <select name="menu" id="menu" class="form-select" required>
                            
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
</x-app-layout>


