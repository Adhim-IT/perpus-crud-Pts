<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('peges.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('peges.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            $data = $request->validated();

            Category::create($data);
            SweetAlert::toast('Category created successfully', 'success');

        } catch (\Exception $e) {
            // Tangani kesalahan jika diperlukan
            SweetAlert::toast('Error creating category', 'error');
        }

        return redirect()->route('category.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $category = Category::find($id);

    // Pastikan kategori ditemukan sebelum melanjutkan
    if (!$category) {
        return redirect()->route('category.index')->with('error', 'Kategori tidak ditemukan');
    }

    $categories = Category::all(); // Ambil semua data kategori

    return view('peges.category.edit', compact('category', 'categories'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        // tambahkan aturan validasi lainnya sesuai kebutuhan
    ]);

    $category = Category::find($id);

    if (!$category) {
        SweetAlert::error('Error', 'Kategori tidak ditemukan');
        return redirect()->route('category.index');
    }

    $category->update([
        'name' => $request->input('name'),
        // tambahkan kolom lain sesuai kebutuhan
    ]);

    SweetAlert::success('Success', 'Kategori berhasil diperbarui');
    return redirect()->route('category.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);


        if ($category->books()->exists()) {

            $category->books()->update(['category_id' => null]);
        }

        // Hapus kategori
        $category->delete();

        SweetAlert::toast('Category deleted successfully', 'success');
        return redirect()->route('category.index');
    }

}
