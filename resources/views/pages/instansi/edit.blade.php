@extends('layouts.default')
@section('title','Ubah nama kelompok')
@section('header-title',' Ubah nama kelompok')


@section('content')
<div class="card shadow mb-4 col-lg-6">
    <div class="card-body">
        <form action="{{route('instansi.update',$instansi->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">kelompok</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') ?? $instansi->nama }}">
                @error('nama')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="form-group">
                <label for="alamat">anggota</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror">{{old('alamat') ?? $instansi->alamat }}</textarea>
                @error('alamat')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>

    </div>
</div>
@endsection
