<?php

namespace App\Http\Controllers;


use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        // retrieve products by product_type='CPU'

        $cpu_products = Products::where('product_type', 'CPU')->get();
        $gpus_products = Products::where('product_type', 'GPU')->get();
        $laptop_products = Products::where('product_type', 'LAPTOP')->get();
        $mice_products = Products::where('product_type', 'MICE')->get();
        $kb_products = Products::where('product_type', 'KB')->get();
        $random_products = Products::inRandomOrder()->get();
        $top_price_products = Products::orderBy('price', 'desc')->take(6)->get();
        $mice_kb_products = Products::whereIn('product_type', ['MICE', 'KB'])->get();
        $banner_1 = Products::where('id', '5')->first();
        $banner_2 = Products::where('id', '9')->first();
        $banner_3 = Products::where('id', '4')->first();
        $big_banner = Products::where('id', '7')->first();


        return view('index', [
            'products' => Products::all(),
            'cpu_products' => $cpu_products,
            'gpus_products' => $gpus_products,
            'laptop_products' => $laptop_products,
            'mice_products' => $mice_products,
            'kb_products' => $kb_products,
            'random_products' => $random_products,
            'top_price_products' => $top_price_products,
            'mice_kb_products' => $mice_kb_products,
            'banner_1' => $banner_1,
            'banner_2' => $banner_2,
            'banner_3' => $banner_3,
            'big_banner' => $big_banner

        ]);
    }

    public function show($id)
    {
        // get the product by id
        $product = Products::findOrFail($id);
        // split the image paths into an array
        $image_paths = explode(',', $product->images);
        $random_products = Products::inRandomOrder()->get();
        // pass all variables to the view
        return view('product', [
            'product' => $product,
            'image_paths' => $image_paths,
            'random_products' => $random_products

        ]);
    }

    // public function shop(Request $request)
    // {
    //     $query = $request->input('query');
    //     if(empty($query)) {
    //         $products = Products::paginate(9);
    //     } else {
    //         $products = Products::where('product_name', 'like', "%$query%")
        
    //                     ->paginate(9);
    //     }
    //     return view('shop', [
    //         'products' => $products
    //     ]);


    // }



    public function shop(Request $request)
    {
        $query = $request->input('query');
        $product_types = $request->input('product_type');
    
        if(empty($query) && empty($product_types)) {
            $products = Products::paginate(9);
        } else {
            $q = "%$query%";
            $query_products = Products::where('product_name', 'LIKE', $q);
            if(!empty($product_types)) {
                $types = explode(',', $product_types);
                $query_products = $query_products->whereIn('product_type', $types);
            }
            $products = $query_products->paginate(9);
        }
    
        return view('shop', [
            'products' => $products
        ]);
    }
    







    

}
