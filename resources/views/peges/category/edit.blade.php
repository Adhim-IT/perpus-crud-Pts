@extends('layouts.main')

@section('title', 'Tambah kategori');

@section('content')
<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Perbarui Kategori</button>
</form>


@endsection
