<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Categories;

class MarketController extends Controller
{

    /**
     *
     */
    public function alldata()
    {
        $market = new Products();
        dd(Products::all());
    }

    public function products()
    {

        return response()->json(Products::all());

    }

    public function getProductById($product_id)
    {

        return response()->json(Products::find($product_id));

    }

    public function orders()

    {

        return response()->json(Orders::all());

    }
    public function getOrderById($order_id)
    {

        return response()->json(Products::find($order_id));

    }

    public function categories()

    {

        return response()->json(Categories::all());

    }

    public function deleteProduct($product_id)
    {

        return response()->json(Products::destroy($product_id));

    }

    public function UpdateProduct($product_id, Request $req)
    {

        Products::where('id', $product_id)->update($req->all());
        return response()->json(['success' => true]);

    }

    public function check(Request $req)
    {

        $products = $req->validate([
            'id' => 'required|min:1|max:15',
            'name' => 'required|min:5|max:20',
            'model' => 'required|min:5|max:15',
            'price' => 'required|min:5|max:15',
        ]);
    }
}
