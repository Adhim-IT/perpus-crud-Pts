@extends('layouts.main')

@section('title', 'Data Buku');

@section('content')
    <table class="table table-striped table-hover">
        ...<table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Penerbit</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Katagori</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book )
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->title}}</td>
                    <td> {{$book->author}}</td>
                    <td> {{$book->publisher}}</td>
                    <td> {{$book->year}}</td>
                    <td> {{$book->isbn}}</td>
                    <td>
                        <img src="{{asset('storage/'. $book->cover)}}" alt="{{ $book->title }}" width="100px">
                    </td>
                    <td>
                        {{$book->description}}
                    </td>
                    <td>{{ $book->category ? $book->category->name : 'No Category' }}</td>
                    <td nowrap>
                        <a href="{{route('buku.edit' , $book->id )}}"class="btn btn-sm btn-warning">edit</a>
                        <form action="{{route('buku.destroy' , $book->id )}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                        <a href="{{route('buku.show' , $book->id )}}"" class = " btn btn-sm btn-info">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </table>
    <a href="{{route('buku.create')}}">
        <button class="btn btn-primary float-end d-block">Tambah</button>
    </a>
    @include('sweetalert::alert') 
@endsection
