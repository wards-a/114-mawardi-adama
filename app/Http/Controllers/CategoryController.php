<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->fetchCategoriesForTableContent();

        // array for component table
        $table_heads = ['Nama Kategori', 'Deskripsi'];
        $table_actions = [
            [
                'name' => 'edit',
                'route' => 'category.edit',
            ],
            [
                'name' => 'remove',
                'route' => '/category',
            ],
        ];

        return view('admin.category', compact('categories', 'table_heads', 'table_actions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $this->validation($request);

        // validation failed
        if ($validator !== true) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Store data to table
        $payload = $request->only(['name', 'description']);
        Category::create($payload);

        return redirect()->route('category.index')->with('success', 'Catgeory created successfully!');
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
    public function edit(string $id)
    {
        $category = Category::select('id', 'name', 'description')
        ->where('id', $id)
        ->first();

        if (!$category) {
            return redirect()->route('category.index')->with('error', 'Categories not found!');
        }

        return view('admin.category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // get category
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('category.index')->with('error', 'Categories not found!');
        }

        //validation
        $validator = $this->validation($request, $category);
        if ($validator !== true) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update category
        $payload = $request->only(['name', 'description']);
        $category->update($payload);

        return redirect()->route('category.index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category deleted sucessfully!',
        ]);
    }

    private function fetchCategoriesForTableContent()
    {
        $categories = Category::select('name', 'description', 'id')->orderBy('name', 'asc')->paginate(10);
        dd($categories);
        return $categories;
    }

    private function validation($request, $category = NULL){
        
        $rules = [
            'name' => 'required|alpha_dash:ascii|max:100|unique:categories,name,' . ($category ? $category->id : $category) . ',id,deleted_at,NULL',
        ];

        $validator = Validator::make($request->all(), $rules);
        
        // dd($validator->fails());
        if ($validator->fails()) {
            return $validator;
        }

        return true;
    }
}
