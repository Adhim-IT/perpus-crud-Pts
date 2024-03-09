@extends('layouts.main')

@section('title', 'buat kategori');

@section('content')
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">nama Kategori</label>
            <input type="name" class="form-control @error('name')
            is-invalid
            @enderror"
                name="name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>

  @endsection
