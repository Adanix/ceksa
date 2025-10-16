@extends('responden.layout.main')
@section('content')

<div class="row mt-3">
    <div class="col-md-12">
        <div class="card mb-4">
            <h4 class="card-header">Profil Detail</h4>
            @if ($message = Session::get('success'))
            <div class="alert alert-success p-3 ms-3 me-3">
                <span>{{ $message }}</span>
            </div>
            @endif
            <!-- Account -->
            <div class="card-body pt-2">
                <form id="formAccountSettings" action="/responden/perubahan" method="POST">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                                <input class="form-control" type="text" id="firstName" name="nama" value="{{ Auth::user()->nama }}" placeholder="Masukan Nama">
                                <label for="firstName">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                                <input class="form-control" type="text" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="john.doe@example.com">
                                <label for="email">E-mail</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                                <input type="date" class="form-control" id="organization" name="ttl" value="{{ Auth::user()->ttl }}">
                                <label for="organization">Tanggal Lahir</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                                <input type="text" class="form-control" id="address" value="{{ Auth::user()->age('ttl') }}" disabled>
                                <label for="address">Usia</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                                <div class="form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" minlength="8" />
                                            <label for="passord">Ganti Password</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary me-2 waves-effect waves-light">Simpan</button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
</div>
@endsection