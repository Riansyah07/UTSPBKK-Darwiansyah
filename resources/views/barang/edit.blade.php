@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Edit Barang</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Barang</a></div>
    <div class="breadcrumb-item">Edit Barang</div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body p-0">
        <form action="{{ route('barang.update',$barang->kode_barang) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="exampleInputEmail1">Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" id="exampleInputEmail1" value="{{ old('kode_barang', $barang->kode_barang) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan Kode Baru.</small>
            @error('kode_barang')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail2">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{ old('nidn', $barang->nama_barang) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan Nama Baru.</small>
            @error('nama_barang')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Harga</label>
            <input type="text" name="harga" class="form-control" id="exampleInputEmail1" value="{{ old('nidn', $barang->harga) }}">
            <small id="emailHelp" class="form-text text-muted">Masukkan Harga Baru.</small>
            @error('harga')
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
      @endsection