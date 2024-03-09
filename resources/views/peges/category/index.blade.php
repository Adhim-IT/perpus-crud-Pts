@extends('layouts.main')

@section('title', 'Data kategori');

@section('content')
    <table class="table table-striped table-hover">
        ...<table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Katagori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categories )
                    <tr>
                        <th scope="row">{{ $categories->id }}</th>
                        <td>{{ $categories->name }}</td>
                        <td nowrap>
                            <a href="{{ route('category.edit', $categories->id) }}"class="btn btn-sm btn-warning">edit</a>
                            <form action="{{ route('category.destroy', $categories->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </table>
    <a href="{{ route('category.create') }}">
        <button class="btn btn-primary float-end d-block">Tambah</button>
    </a>
@endsection
