<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;
use Illuminate\Support\Facades\Session;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('peges.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('peges.book.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $data = $request->all();

        // Check if a file is present in the request
        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('assets/book', 'public');
        } else {
            $data['cover'] = null;
        }

        $book = Book::create($data);

        SweetAlert::success('success' , 'Book created successfully');
        return redirect()->route('buku.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        $categories = Category::all(); // Ambil data kategori

        return view('peges.book.detail', compact('book', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        $categories = Category::all(); // Ambil data kategori

        return view('peges.book.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $data = $request->all();
        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('assets/book', 'public');
        }else{
            $data['cover'] = $book->cover;
        }
        $book->update($data);
        SweetAlert::toast('Book updated successfully', 'success');
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();

        SweetAlert::confirmDelete('succes', 'Book deleted successfully');
        return redirect()->route('buku.index');
    }


}
