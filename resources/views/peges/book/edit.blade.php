@extends('layouts.main')

@section('title', 'Edit Buku');

@section('content')
    <form action="{{ route('buku.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="name" class="form-control @error('title')
            is-invalid
            @enderror"
                name="title" value="{{ $book->title }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Penulis Buku</label>
            <input type="name" class="form-control @error('author')
            is-invalid
            @enderror"
                name="author" value="{{ $book->author }}">
            @error('author')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit Buku</label>
            <input type="name" class="form-control @error('publisher')
            is-invalid
            @enderror"
                name="publisher" value="{{ $book->publisher }}">
            @error('publisher')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="name" class="form-control @error('year')
            is-invalid
            @enderror"
                name="year" value="{{ $book->year }}">
            @error('year')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="name" class="form-control @error('isbn')
            is-invalid
            @enderror"
                name="isbn" value="{{ $book->isbn }}">
            @error('isbn')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Cover</label>
            <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover">
            @error('cover')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control @error('description')
            is-invalid
            @enderror" name="description"> {{ $book->description }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                <option selected disabled>Pilih Kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
