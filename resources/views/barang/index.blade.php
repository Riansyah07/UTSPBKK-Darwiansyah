@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Barang</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Barang</a></div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('barang.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col" style="width: 20%">ACTIONS</th>
                    </tr>
                    @forelse ($barang as $index => $barang)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $barang->kode_barang) }}" method="POST" style="display:inline">
                                <a href="{{ route('barang.edit', $barang->kode_barang) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Barang Belum Ada.
                    </div>
                    @endforelse
            </table>
            {{-- {{ $user->links() }} --}}
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection