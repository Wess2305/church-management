@extends('layouts.app')

@section('content')

<h2>📋 Data Jemaat</h2>


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

@endsection