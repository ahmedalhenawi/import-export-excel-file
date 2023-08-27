<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromArray;

class CategoryExport implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function array(): array
    {
        $list= [];
        $list[] = ['id' , 'name' , 'status' , 'created_at' , 'updated_at'];
        $categories = Category::all();
        foreach($categories as $category){
            $list[] = [$category->id , $category->name , $category->status , $category->created_at , $category->updated_at];
        }
        return $list;
    }
}
