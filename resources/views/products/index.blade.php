@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-end">
        <a href="{{ route('products.create') }}" class="btn btn-outline-dark mb-3">Create Mobil</a>
    </div>
    <h2 class="text-center text-br"><strong>Daftar Produk</strong></h2>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-dark-transparent">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->kode }}</td>
                        <td>{{ $product->nama }}</td>
                        <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td>{{ $product->deskripsi }}</td>
                        <td>
                            @if ($product->satuan)
                                {{ $product->satuan->nama_satuan }}
                            @else
                                Satuan tidak tersedia
                            @endif
                        </td>
                        <td>
                            @if($product->image_url)
                                <img src="{{ $product->image_url }}" alt="Gambar Produk" style="max-width: 100px; max-height: 100px;">
                            @else
                                Gambar tidak tersedia
                            @endif
                        </td>
                        <td>
                            @include('products.actions')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
