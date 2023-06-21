<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Work;
use App\Models\Product;
use App\Models\Order;
use App\Models\Rated;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_waiting_products()
    {
        return view('admin.dashboard');
    }

     public function show_waiting_works()
    {
        $works = Work::all();

        return view('admin.dashboard');
    }

    public function show_products_active()
    {
        $products_active = Product::where('sold', 0)->select('id','user_id','title')->get();

        return view('admin.dashboard', ['products_active' => $products_active]);
    }



    public function update_products_active($id)
    {

        $product = Product::findOrFail($id);

        return view('admin.edit.product', ['product' => $product]);
    }



    public function update_products_activePost(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();

        return redirect()->route('admin_products_active_update', ['id' => $product->id])->with('success', 'Product updated successfully!');

    }


    public function delete_products_active($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.delete.product', ['product' => $product]);
    }

    public function delete_products_activePost($id)
{


        $product = Product::findOrFail($id);
        $rated = Rated::where('product_id',$id);

            $rated->delete();
            $product->delete();
            return redirect()->route('admin_products_active')->with('success', 'Product deleted successfully');

    }

    public function show_products_sold()
    {
        return view('admin.dashboard');
    }



    public function show_works_active()
    {

        $works_active = Work::where('accepted',0)->select('id','user_id','image_style')->get();
        return view('admin.dashboard', ['works_active'=>$works_active]);
    }


    public function show_users()
    {
        $users = User::select('id', 'name', 'email')->get();

        return view('admin.dashboard', ['users' => $users]);
    }

    public function show_orders()
    {
        $orders = Order::select('id','user_id','product_id')->get();

      /*  foreach ($orders as $order) {
            $product = Product::find($order->product_id);
            $order->price = $product->price;
        }*/

        return view('admin.dashboard', ['orders' => $orders]);
    }

}
