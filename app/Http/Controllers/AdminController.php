<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Products;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    //
    public function index()
    {
        $manufacturers = Manufacturer::all();
        $users = Users::all();
        return view('admin.admin_index', [
            'manufacturers' => $manufacturers,
            'users' => $users
        ]);
    }




    public function table_product()
    {
        return view('admin.admin_product_table', [
            'products' => Products::all()
        ]);
    }

    public function table_manufacturer()
    {
        return view('admin.admin_manufacturer', [
            'products' => Manufacturer::all()
        ]);
    }




    public function store(Request $request)
    {

        $formfields = $request->validate([
            'product_name' => 'required',
            'product_id' => ['required', Rule::unique('products')],
            'price' => 'required',
            'product_details' => 'required',
            'product_type' => 'required',
            'mansx' => 'required',
            'product_year' => 'required',
            'quantity' => 'required',
            'product_description' => 'required',
            'more_details' => 'required'

        ]);

        if ($request->hasFile('image')) {
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images', $name);
            $formfields['image'] = 'storage/' . substr($path, strpos($path, 'images'));
        }

        $images = '';
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('public/images', $name);
                $images .= 'storage/' . substr($path, strpos($path, 'images')) . ',';
            }
        }
        $formfields['images'] = rtrim($images, ',');

        $product = Products::create($formfields);

        return redirect('/admin/product_table')->with('message', 'Product created successfully');
    }



    public function create()
    {
        return view('admin.product_insert', [
            'product_types' => Products::all()
        ]);
    }

    public function edit(Products $product)
    {
        //  dd($product->product_name);
       
        return view('admin/product_edit', [

            'product' => $product,
            'product_types' => Products::all()
        ]);
    }
    public function update(Request $request, Products $product)
    {
         $formfields = $request->validate([ 
            'product_name' => 'required',
            'product_id' => ['required'],
            'price' => 'required',
            'product_details' => 'required',
            'product_type' => 'required',
            'mansx' => 'required',
            'product_year' => 'required',
            'quantity' => 'required',
            'product_description' => 'required',
            'more_details' => 'required'

        ]);
        if ($request->hasFile('image')) {
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images', $name);
            $formfields['image'] = 'storage/' . substr($path, strpos($path, 'images'));
        }

        $images = '';
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('public/images', $name);
                $images .= 'storage/' . substr($path, strpos($path, 'images')) . ',';
            }
        }
        $formfields['images'] = rtrim($images, ',');

        $product->update($formfields);

     
        return redirect('/admin/product_table')->with('message', 'Product updated successfully');

    }


    public function destroy(Products $product)
    {
        $product ->delete();
        return redirect('/admin/product_table')->with('message', 'Product deleted successfully');
    }


}
