<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd($product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::find(\request('product_id'));
        if ($product == null) {
            return $this->out('Gagal', '404', ['Produk Tidak Ditemukan']);
        }
        $order = new Order();
        $order->order_date = Carbon::now('Asia/Jakarta');
        $order->product_id = $product->id;
        $order->customer_id = request('customer_id');
        $order->qty = request('qty');
        $order->price = (($product->price) * request('qty'));
        if ($order->save() == true) {
            return $this->out($order, 'Success', 'Nothing', 201);
        } else {
            return $this->out([], 'Gagal', ['Order gagal disimpan'], 504);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function findAll()
    {
        $order = Order::query()
            ->leftJoin('customers', 'customers.id', '=', 'orders.customer_id')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id');
        if (request()->has('q')) {
            $q = request('q');
            $order->where('products.title', 'like', "%$q%");
        }
        $data = $order->paginate(10, [
            'orders.*',
            'customers.first_name',
            'customers.last_name',
            'customers.city',
            'customers.address',
            'products.title as product_title',
        ]);
        // return $data;
        return $this->out($data, 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
