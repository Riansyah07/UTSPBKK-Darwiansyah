@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Member</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Member</a></div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('member.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Member</th>
                        <th scope="col">No Identitas</th>
                        <th scope="col">Nama Member</th>
                        <th scope="col">Password</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Tgl Join</th>
                        <th scope="col" style="width: 20%">ACTIONS</th>
                    </tr>
                    @forelse ($member as $index => $member)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
                        <td>{{ $member->member_id }}</td>
                        <td>{{ $member->no_identitas }}</td>
                        <td>{{ $member->nama_member }}</td>
                        <td>{{ $member->password }}</td>
                        <td>{{ $member->alamat }}</td>
                        <td>{{ $member->no_hp }}</td>
                        <td>{{ $member->tgl_join }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('member.destroy', $member->member_id) }}" method="POST" style="display:inline">
                                <a href="{{ route('member.edit', $member->member_id) }}" class="btn btn-sm btn-primary">EDIT</a>
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