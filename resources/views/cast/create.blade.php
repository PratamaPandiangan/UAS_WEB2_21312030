@extends('layout.master')

@section('judul')
Tambah Cast
@endsection

@section('content')
<form method="post" action="/cast">
    @csrf
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="nama" value="" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Cast</label>
        <input type="text" name="umur" value="" class="form-control">
    </div>
    @error('umur')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <textarea class="form-control" name="bio"> </textarea>
    </div>
    @error('bio')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection