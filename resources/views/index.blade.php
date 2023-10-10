@extends('layout')

@section('content')
<h2>TABEL PEMAIN</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_pemain as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_pemain }}</td>
                <td>{{ $item->no_punggung}}</td>
                <td>{{ $item->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
