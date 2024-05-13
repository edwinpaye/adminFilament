<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponse;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Resources\GalleryResource;
use App\Interfaces\GalleryRepositoryInterface;

class GalleryController extends Controller
{
    private GalleryRepositoryInterface $repository;
    
    public function __construct(GalleryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->repository->index();

        return GalleryResource::collection($data);
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
    public function show($id)
    {
        $data = $this->repository->getById($id);

        return ApiResponse::sendResponse(new GalleryResource($data),'',200);
    }

}
