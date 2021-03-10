<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ProductController extends ApiController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getStoredProduct(Request $request)
    {
        $objProduct = new Product();
        $objProduct->name = $request->name;
        $objProduct->units = $request->unit;
        $objProduct->price = $request->price;
        $objProduct->description = $request->description;
        $objProduct->image = 'ddffff';
        $objProduct->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            \DB::enableQueryLog();
            Product::create($request->all());
        }catch (\Exception $e){
            dd($e);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductList()
    {
        $arrProducts = Product::all();
        return response()->json($arrProducts);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('Admin.product.list');
    }

    public function getCreateProduct()
    {
        return view('Admin.product.create');

    }
}
