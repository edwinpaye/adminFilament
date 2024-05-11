<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreGalleryRequest $request)
    // public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $uploadedImages = [];

        foreach ($request->file('images') as $imageFile) {
            $imageName = time() . '_' . $imageFile->getClientOriginalName();
            $imagePath = '/images/' . $imageName;
            $imageFile->move(public_path('images'), $imageName);

            // $image = new Image();
            // $image->name = $imageName;
            // $image->path = $imagePath;
            // $image->save();

            // $uploadedImages[] = $image;
        }

        return response()->json(['message' => 'Images uploaded successfully', 'images' => $uploadedImages], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
