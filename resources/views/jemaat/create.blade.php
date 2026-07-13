@extends('layouts.app')

@section('content')

<h2>Tambah Data Jemaat</h2>

<form method="POST" action="/jemaat">

    @csrf

    <div class="mb-3">
        <label>Nama</label>
        <input 
        type="text" 
        name="nama" 
        class="form-control"
        value="{{ old('nama') }}">

        @error('nama')
    <div class="text-danger">
        {{ $message }}
    </div>
@enderror
    </div>

    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" 
        name="tanggal_lahir" 
        class="form-control"
        value="{{ old('tanggal_lahir') }}" >
        @error('tanggal_lahir')
    <div class="text-danger">
        {{ $message }}
    </div>
@enderror
    </div>

    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">

    <option value="">-- Pilih --</option>

    <option value="Laki-laki"
        {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>
        Laki-laki
    </option>

    <option value="Perempuan"
        {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
        Perempuan
        
    </option>

</select>
@error('jenis_kelamin')
    <div class="text-danger">
        {{ $message }}
    </div>
@enderror
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat"
    class="form-control"> {{ old('alamat') }}
        </textarea>
        @error('alamat')
    <div class="text-danger">
        {{ $message }}
    </div>
@enderror
    </div>

    <div class="mb-3">
        <label>No HP</label>
        <input 
        type="text" 
        name="no_hp" 
        class="form-control"
        value="{{ old('no_hp') }}">
        @error('no_hp')
    <div class="text-danger">
        {{ $message }}
    </div>
@enderror
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" 
        name="email" 
        class="form-control"
        value="{{ old('email') }}">
        
        @error('email')
    <div class="text-danger">
        {{ $message }}
    </div>
@enderror>
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

</form>

@endsection