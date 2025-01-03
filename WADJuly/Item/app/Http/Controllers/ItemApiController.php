<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items= Item::all();
        return response()->json($items);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            // $request->validate([
            //     'name' => 'required',
            //     'price' => 'required',
            //     'stock' => 'required',
            //     'description' => 'required',
            //     'categories' => 'required',
            //     'status' => 'required',
            //     // 'image' => 'required',
            // ]);

            // return $request->image;

            $images=[];
            if($request->hasFile('image')) {
                $files = $request->file('image');
                // return $files;
                foreach($files as $file) {
                    $filename = 'item_image_' . uniqid() . '.' . $file->extension();
                    $file->move(public_path('/storage/images'), $filename);
                    $images[] = $filename;
                }
            }
            $filename = json_encode($images);
            // return $filename;


            // return $request->file('image');
            $item = new Item();
            $item->name = $request->name;
            $item->price = $request->price;
            $item->stock = $request->stock;
            $item->description = $request->description;
            $item->category_id = $request->category_id;
            $item->status = $request->status;
            $item->image = $filename;
            $item->save();
            return response()->json([
                'message' => 'Item created successfully',
                'item' => $item
            ]);
        }

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
        //
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
            'category_id' => 'required',
            'status' => 'required',
        ]);


        $item = Item::find($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->category_id = $request->category_id;
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

            return response()->json([
                'message' => 'Item deleted successfully'
            ]);
        }
    }
}
