<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\CategoriesPost;
use Illuminate\Http\Client\ResponseSequence;

class CategoriesPostController extends Controller
{
    public function index()
    {
        $categoriespost = CategoriesPost::get();

        return response()->json($categoriespost, 200);
    }

    public function show($id)
    {
        $categoriespost = CategoriesPost::find($id);

        return response()->json($categoriespost, 200);
    }

    public function store()
    {
        $attr = request()->all();
        $attr['slug'] = Str::slug(request('name'));
        $categoriespost = CategoriesPost::create($attr);

        return response()->json($categoriespost, 200);
    }

    public function update($id)
    {
        $categoriespost = CategoriesPost::find($id);

        $categoriespost->name = request('name');
        $categoriespost->slug = Str::slug(request('name'));

        $categoriespost->save;

        return response()->json($categoriespost, 200);
    }

    public function delete($id)
    {
        $categoriespost = CategoriesPost::find($id);

        $categoriespost->delete();
        $message = ['message' => 'delete successfully', 'Categoriespost_id' => $id];
        return response()->json($message, 200);
    }
}
