<?php

namespace App\Repositories;

use App\Interfaces\GalleryRepositoryInterface;
use App\Models\Gallery;

class GalleryRepository implements GalleryRepositoryInterface
{
    /**
     * Create a new class instance.
     */
   public function __construct()
   {
      //
   }

   public function index(){
      return Gallery::query()->with('gallery_items')->paginate(10);
   }

   public function getById($id){
      return Gallery::findOrFail($id);
   }

   // public function store(array $data){
   //    return Gallery::create($data);
   // }

   // public function update(array $data,$id){
   //    return Gallery::whereId($id)->update($data);
   // }
   
   // public function delete($id){
   //    Gallery::destroy($id);
   // }
}
