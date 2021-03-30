@extends('barangs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2></h2>
            </div>

            <div class="float-right my-2">
                <a class="btn btnsuccess" href="{{ route('barangs.create') }}"> Input Barang</a>
            </div>

            <div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id Barang</th>
            <th>Kode barang</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Harga</th>
            <th>QTY</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barangs as $Barang)
        <tr>
            <td>{{ $Barang->id_barang }}</td>
            <td>{{ $Barang->kode_barang }}</td>
            <td>{{ $Barang->nama_barang }}</td>
            <td>{{ $Barang->kategori_barang }}</td>
            <td>{{ $Barang->harga }}</td>
            <td>{{ $Barang->qty }}</td>
            <td>
                <form action="{{ route('barangs.destroy',$Barang->id_barang) }}" method="POST">
                    <a class="btn btninfo" href="{{ route('barangs.show',$Barang->id_barang) }}"><button type="button" class="btn btn-success">Tampil</button></a>
                    <a class="btn btnprimary" href="{{ route('barangs.edit',$Barang->id_barang) }}"><button type="button" class="btn btn-warning">Edit</button></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $barangs->links() }}
@endsection