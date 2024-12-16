<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $items = Item::where('name', 'like', '%' . $query . '%')->orWhere('status', 'like', '%' . $query . '%')->paginate(5);
        return view('item.index', compact('items'));
        // return $request->all();
    }


    public function index()
    {
        $items = Item::paginate(5);
        return view('item.index', compact('items'));
        return $items;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'categories' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);

        // if ($request->image) {
        //     $file = $request->image;
        //     $filename = 'item_image_' . uniqid() . '.' . $file->extension();
        //     $file->move(public_path('/images'), $filename);
        //     $request->merge(['image' => $filename]);
        //     // $file->storeAs('public/itemImages', $filename);
        //     // return $filename;
        // }

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $filename = 'item_image_' . uniqid() . '.' . $file->extension();
        //     $file->move(public_path('/storage/images'), $filename);
        //     $request->merge(['image' => $filename]);
        // }

        // dd(request('image'));
        $images=[];
        if($request->hasFile('image')) {
            $files = $request->file('image');
            // dd($files);
            foreach($files as $file) {
                $filename = 'item_image_' . uniqid() . '.' . $file->extension();
                $file->move(public_path('/storage/images'), $filename);
                $images[] = $filename;
            }
        }
        $filename = json_encode($images);


        // return $request->file('image');
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->category_id = $request->categories;
        $item->status = $request->status;
        $item->image = $filename;
        $item->save();
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('item.detail', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $item = Item::find($id);
        if ($item) {
            return view("item.edit", compact('item', 'categories'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'categories' => 'required',
            'status' => 'required',
        ]);


        $item = Item::find($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->category_id = $request->categories;
        $item->status = $request->status;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'item_image_' . uniqid() . '.' . $file->extension();
            $file->move(public_path('/storage/images'), $filename);
            $request->merge(['image' => $filename]);
            $item->image = $filename;
        }
        $item->update();
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        if ($item) {
            $item->delete();

            return back();
        }
    }
}
