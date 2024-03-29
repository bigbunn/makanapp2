<x-guest-layout>
    <div id="auth-left">
        <div class="auth-logo">
            <a href="index.html"><img src="{{ asset('/images/logo/logo.png') }}" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Complete your data</h1>
        <p class="auth-subtitle mb-5">Input your data identity.</p>

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif
        
        <form action="{{ route('identity') }}" method="POST">
            @csrf
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="text" class="form-control form-control-xl" name="npm" placeholder="NPM" required>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <select class="form-select" name="kelas" id="kelas">
                    <option value="" selected disabled>Choose...</option>
                    @foreach($kelas as $k)
                        <option value="{{ $k->id}}">{{$k->nama_kelas}}</option>
                    @endforeach
                </select>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <select class="form-select" name="unit" id="unit">
                    <option value="" selected disabled>Choose...</option>
                    @foreach($unit as $u)
                        <option value="{{ $u->id}}">{{$u->nama_unit}}</option>
                    @endforeach
                </select>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="text" class="form-control form-control-xl" name="asrama" placeholder="Asrama (A501)" required>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            
            <input type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" value="Submit"></input>
        </form>
    </div>
</x-guest-layout>
