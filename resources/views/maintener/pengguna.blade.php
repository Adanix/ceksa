@extends('maintener.layout.main')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success mt-1 mb-0">
    <span>{{ $message }}</span>
</div>
@endif

<!-- Data Tables -->
<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h5 class="card-header">Data Pengguna</h5>
            </div>
            <div class="col-lg-6 col-md-6 mt-md-3 mb-sm-3">
                <form method="get" class="d-flex">
                    <input class="form-control me-2" type="search" name="search" placeholder="Cari Pengguna ..." aria-label="Search" value="{{ $search }}">
                    <button class="btn btn-outline-primary waves-effect" type="submit">cari</button>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-truncate">Nama Pengguna</th>
                    <th class="text-truncate">Email</th>
                    <th class="text-truncate">Role</th>
                    <th class="text-truncate">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($users as $user)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm me-3">
                                @if ($user->role === 'maintener')
                                <img src="/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                @elseif ($user->role === 'admin')
                                <img src="/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                @else
                                <img src="/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                @endif
                            </div>
                            <div>
                                <h6 class="mb-0 text-truncate">{{ $user->nama }}</h6>
                                <small class="text-truncate">Umur {{ $user->age('ttl') }}</small>
                            </div>
                        </div>
                    </td>
                    <td class="text-truncate">{{ $user->email }}</td>
                    <td class="text-truncate">
                        @if ($user->role === 'maintener')
                        <i class="mdi mdi-cog-outline mdi-24px text-warning me-1"></i> {{ $user->role }}
                        @elseif ($user->role === 'admin')
                        <i class="mdi mdi-laptop mdi-24px text-danger me-1"></i> {{ $user->role }}
                        @else
                        <i class="mdi mdi-account mdi-24px text-primary me-1"></i> {{ $user->role }}
                        @endif
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="dropdown-item waves-effect mb-2" data-bs-toggle="modal" data-bs-target="#backDropModal{{ $user->id }}">
                                <i class="mdi mdi-pencil-outline me-1" style="color:#1900ff;"></i>Edit
                            </button>
                            <button type="button" class="dropdown-item waves-effect" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $user->id }}">
                                <i class="mdi mdi-trash-can-outline text-danger me-1"></i>Hapus
                            </button>
                        </div>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="backDropModal{{ $user->id }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('pengguna.update', $user->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="backDropModalTitle">Edit Pengguna</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-4 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameBackdrop" class="form-control" name="nama" value="{{ $user->nama }}" placeholder="Masukan Nama">
                                                    <label for="nameBackdrop">Nama</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-4 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameBackdrop" class="form-control" name="email" value="{{ $user->email }}" placeholder="Masukan Nama">
                                                    <label for="nameBackdrop">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="date" id="dobBackdrop" name="ttl" value="{{ $user->ttl }}" class="form-control">
                                                    <label for="dobBackdrop">Tanggal Lahir</label>
                                                </div>
                                            </div>
                                            <div class="col mb-2">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="role" id="defaultSelect" class="form-select">
                                                        <option value="{{ $user->role }}">{{ $user->role }}
                                                        </option>
                                                        <option value="maintener">Maintener</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="pengguna">Pengguna</option>
                                                    </select>
                                                    <label for="emailBackdrop">Role</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-4 mt-3">
                                                <div class="form-password-toggle">
                                                    <div class="input-group input-group-merge">
                                                        <div class="form-floating form-floating-outline">
                                                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" minlength="8" />
                                                            <label for="password">Password</label>
                                                        </div>
                                                        <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan
                                            Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- //! End Modal Edit -->

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="modalHapus{{ $user->id }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <form action="{{ route('pengguna.destroy', $user->id) }}" method="post" class="modal-content">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Hapus Pengguna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <span><b>Nama : </b>{{ $user->nama }}</span> <br>
                                                <span><b>Email : </b>{{ $user->email }}</span> <br>
                                                <span><b>Umur : </b>{{ $user->age('ttl') }}</span> <br>
                                                <span><b>Role : </b>{{ $user->role }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- //!Modal Hapus -->

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <nav aria-label="Page navigation" class="pagination justify-content-end mt-3">
            {!! $users->appends(Request::except('page'))->render() !!}
        </nav>
    </div>
</div>
<!--/ Data Tables -->
@endsection