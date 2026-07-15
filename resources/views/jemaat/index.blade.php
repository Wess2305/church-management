@extends('layouts.app')

@section('content')

<h2>📋 Data Jemaat</h2>

@if(session('success'))

<div class="alert alert-success">

{{ session('success')}}
</div>

@endif

<form action="/jemaat" method="GET" class="mb-3">

    <div class="input-group">

        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="Cari nama jemaat..."
            value="{{ request('search') }}">

        <button class="btn btn-primary">
            Cari
        </button>

    </div>

</form>


<a href="/jemaat/create" class="btn btn-primary mb-3">
    ➕ Tambah Jemaat
</a>

<table class="table table-bordered">

    <thead>

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

        @forelse($jemaats as $jemaat)

        <tr>

            <td>{{ $jemaat->id }}</td>

            <td>{{ $jemaat->nama }}</td>

            <td>{{ $jemaat->no_hp }}</td>

            <td>{{ $jemaat->email }}</td>

            <td>{{ $jemaat->email }}</td>

<td>
    <a href="/jemaat/{{ $jemaat->id }}/edit"
       class="btn btn-warning btn-sm">
        Edit
    </a>

    <form action="/jemaat/{{ $jemaat->id }}"
          method="POST"
          style="display:inline;">

        @csrf
        @method('DELETE')

        <button
            class="btn btn-danger btn-sm"
            onclick="return confirm('Yakin ingin menghapus data ini?')">
            Hapus
        </button>

    </form>
</td>

        </tr>

        @empty

        <tr>

            <td colspan="4">
                Belum ada data jemaat.
            </td>

        </tr>

        @endforelse

    </tbody>

</table>

{{ $jemaats->links() }}

@endsection