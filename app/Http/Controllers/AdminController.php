<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    //
    public function index()
    {
        $orders = Orders::all();
        $users = Users::all();
        return view('admin.admin_index', [
            'manufacturers' => $orders,
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
        dd($product->delete());
        $product->delete();
        return redirect('/admin/product_table')->with('message', 'Product deleted successfully');
    }



    public function show_user(Users $id)
    {
        $user = Users::find($id);
        return view('admin.admin_user', [
            'user' => $id,
            'user_role' => Users::all()
        ]);
    }


    public function update_user(Request $request, Users $id)
    {


        // Validate the form
        $formfield = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required'],
            'First_name' => ['required'],
            'Last_name' => ['required'],
            'role' => 'nullable'
        ]);
        // Update the user
        $formfield['password']=bcrypt($formfield['password']);

        $id->update($formfield);

        // Redirect back to the user
        return redirect('/god')->with('message', 'User updated successfully');
    }



    public function delete_user(Users $id)
    {

        $id->delete();
        return redirect('/god')->with('message', 'User deleted successfully');
    }




    public function delete_order(Orders $id)
    {
        $id->delete();
        return redirect('/god')->with('message', 'Order deleted successfully');
    }

    public function show_order(Orders $id)
    {
        $order = Orders::find($id);
        return view('admin.admin_order', [
            'order' => $id
        
        ]);
    }

    public function update_order(Request $request, Orders $id)
    {
        $formfield = $request->validate([
            'order_id' => ['required'],
            'user_id' => ['required'],
            'product_name' => ['required'],
            'total_price' => ['required'],
            'quantity' => ['required']
        ]);
        $id->update($formfield);
        return redirect('/god')->with('message', 'Order updated successfully');
    }





    public function list_manufacturer()
    {
        return view('admin.admin_manufacturers',[
            'manufacturer' => Manufacturer::all()
        ]);
    }

    public function show_manufacturer(Manufacturer $id)
    {
        $manufacturer = Manufacturer::find($id);
        return view('admin.admin_manufacturer', [
            'manufacturer' => $id
        ]);
    }

    public function update_manufacturer(Request $request, Manufacturer $id)
    {
        $formfield = $request->validate([
            'manufacturers_name' => ['required'],
            'manufacturers_code' => ['required']
        ]);
        ddd($formfield);
        $id->update($formfield);
        return redirect('/admin/manufacturers')->with('message', 'Order updated successfully');
    }


    public function delete_manufacturer(Manufacturer $id)
    {
        $id->delete();
        return redirect('/admin/manufacturers')->with('message', 'Order deleted successfully');
    }
}
