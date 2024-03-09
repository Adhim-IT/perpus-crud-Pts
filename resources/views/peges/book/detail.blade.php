@extends('layouts.main')

@section('title', 'Detail Buku')

@section('content')
    <div>
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="name" class="form-control" value="{{ $book->title }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Penulis Buku</label>
            <input type="name" class="form-control" value="{{ $book->author }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit Buku</label>
            <input type="name" class="form-control" value="{{ $book->publisher }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="name" class="form-control" value="{{ $book->year }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="name" class="form-control" value="{{ $book->isbn }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Cover</label>
            @if($book->cover)
                <img src="{{ asset('storage/' . $book->cover) }}" width="200" height="300" alt="Cover Image" class="img-fluid book-cover" >
            @else
                <p>No cover available</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" readonly>{{ $book->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="name" class="form-control" value="{{ $book->category->name }}" readonly>
        </div>
        <a href="{{ route('buku.index') }}" class="btn btn-primary">Back to Books</a>
    </div>

@endsection
