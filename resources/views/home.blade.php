@extends('template.layout')

@section('content')

    <h1>Home</h1>

    <div>
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
                {{-- ini yg dicek, yaitu nama kolomnya --}}
                @error('kategori')
                    <p>{{ $message }}</p>
                @enderror
            <input class="border @error('kategori') border-red @enderror" type="text" name="kategori">
            <input type="file" name="img" id="">
            <input type="submit" name="btn" value="Simpan">
        </form>
    </div>

    @foreach ($kategoris as $isi)
        <li>{{ $isi->kategori }} -- <a href="/store/{{ $isi->idkategori }}" class="text-red">Hapus</a></li>
    @endforeach

@endsection