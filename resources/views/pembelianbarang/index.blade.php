@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Pembalian Barang</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Pembelian Barang</a></div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('pembelianbarang.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Pembalian</th>
                        <th scope="col">KOde Barang</th>
                        <th scope="col">ID Pegawai</th>
                        <th scope="col">Tanggak</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col" style="width: 20%">ACTIONS</th>
                    </tr>
                    @forelse ($pembelianbarang as $index => $pembelianbarang)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
                        <td>{{ $pembelianbarang->id_pembelian }}</td>
                        <td>{{ $pembelianbarang->kode_barang }}</td>
                        <td>{{ $pembelianbarang->id_pegawai }}</td>
                        <td>{{ $pembelianbarang->tanggal }}</td>
                        <td>{{ $pembelianbarang->jumlah }}</td>

                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pembelianbarang.destroy', $pembelianbarang->id_pembelian) }}" method="POST" style="display:inline">
                                <a href="{{ route('pembelianbarang.edit', $pembelianbarang->id_pembelian) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Member Belum Ada.
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