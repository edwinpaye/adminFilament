<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponse;
use App\Http\Resources\ProductResource;
use App\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    private ProductRepositoryInterface $repository;
    
    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->repository->index();

        return ProductResource::collection($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = $this->repository->getById($id);

        return ApiResponse::sendResponse(new ProductResource($product),'',200);
    }

}
