@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Tambah Member</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body p-0">
        <form action="{{ route('member.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">ID Member</label>
            <input type="text" name="member_id" class="form-control" id="exampleInputEmail1" value="{{ old('member_id', $member->member_id) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan ID Member Baru.</small>
            @error('member_id')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail2">NO Identitas</label>
            <input type="text" name="no_identitas" class="form-control" id="exampleInputEmail2" value="{{ old('no_identitas', $member->no_identitas) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan ID Baru.</small>
            @error('no_identitas')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Nama Member</label>
            <input type="text" name="nama_member" class="form-control" id="exampleInputEmail3" value="{{ old('nama_member', $member->nama_member) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan Nama Baru.</small>
            @error('nama_member')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail4">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputEmail4" value="{{ old('password', $member->password) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan Password Baru.</small>
            @error('password')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail5">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputEmail5" value="{{ old('alamat', $member->alamat) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan Alamat Baru.</small>
            @error('alamat')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail6">No HP</label>
            <input type="text" name="no_hp" class="form-control" id="exampleInputEmail6" value="{{ old('no_hp', $member->no_hp) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan NO HP Baru.</small>
            @error('no_hp')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Tanggal Join</label>
            <input type="date" name="tgl_join" class="form-control" id="exampleInputEmail1" value="{{ old('tgl_join', $member->tgl_join) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan Tanggal Baru.</small>
            @error('tgl_join')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <br />
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
        {{-- {{ $user->links() }} --}}
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection