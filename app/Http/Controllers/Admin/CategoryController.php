<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CategoryController extends ApiController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create(Request $request)
    {
        $objCategory = new Category();
        $objCategory->category_name =  $request->name;
        if($request->parent_category){
            $objCategory->parent_category_id =  $request->parent_category;
        }
        $objCategory->status =  $request->status;
        $objCategory->save();
        return $this->responseSuccess();
    }
}
