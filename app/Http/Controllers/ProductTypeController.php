<?php

namespace App\Http\Controllers;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_product=ProductType::all();
        return view('admin/productTypes/index',compact('all_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/productTypes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=$request->all();
        ProductType::create($product);
        return redirect('home/productTypes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $products=ProductType::find($id);

        return view('admin/productTypes/edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=ProductType::find($id);
        $requsetData = $request->all();
        if ($request->hasFile('img')) {  //如果資料庫有新圖片
            $old_image = $item->img;
            Storage::disk('local')->delete('public/' . $old_image); //laravel寫法
            $file_name = $request->file('img')->store('', 'public');  //存照片到public/storage
            $requsetData['img'] = $file_name;;
        }

        ProductType::find($id)->update($requsetData);
        return redirect('home/productTypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $date= ProductType::find($id);
        ProductType::find($id)->delete();
        Storage::disk('local')->delete('public/' . $date->img);
        return redirect('home/productTypes');
    }
}
