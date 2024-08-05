@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Tambah Barang</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Barang</a></div>
    <div class="breadcrumb-item">Tambah Barang</div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body p-0">
        <form action="{{ route('barang.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInput1">Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Kode Barang">
            <small id="emailHelp" class="form-text text-muted">Masukan kode barang, contoh : 562314 </small>
            @error('kode_barang')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInput2">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama Barang">
            <small id="emailHelp" class="form-text text-muted">Masukan Nama Barang, contoh : Seprai</small>
            @error('nama_barang')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInput3">Harga</label>
            <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Harga">
            <small id="emailHelp" class="form-text text-muted">Masukan Harga Barang, contoh : 10.000</small>
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
    </div>
  </div>
</div>
</div>
</div>
@endsection