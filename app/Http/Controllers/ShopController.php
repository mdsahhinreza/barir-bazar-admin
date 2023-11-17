<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shop = Shop::all();
        return view('backend.shop.shop_list', compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.shop.create_shop');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shop = new Shop();
        $shop->name = $request->shop_name;
        $shop->shop_category = $request->shop_category;
        $shop->owner_name = $request->shop_owner;
        $shop->owner_phone = $request->owner_phone_number;
        $shop->shop_photo = $request->shop_photo;
        $shop->address = $request->shop_address;
        $shop->status = 1;
        $shop->created_by = Auth::user()->id;
        $shop->save();
        return redirect()->route('shops')->with('success', 'Category Added Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
