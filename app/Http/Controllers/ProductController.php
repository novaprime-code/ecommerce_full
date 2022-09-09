<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereNotNull('category_id')->get();
        // var_dump($categories);
        return view('admin.product.add', compact('categories'));
        // echo "creat form";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
        );

        if($request->hasFile('product_img')){
            $image = $request->file('product_img');
            $fileName = date('Y-m-d-').time().'.'.$image->getClientOriginalExtension();
            $data['image']=$fileName;
        }
        $create = Product::create($data);
        if($create){
            $image->move(public_path("/uploads/products"),$fileName);

        }
        return redirect()->route('product.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Product $product)
    {
        $id=$request->id;
        $product = Product::findOrFail($id);
        $categories = Category::whereNotNull('category_id')->get();
        return view('admin.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $id=$request->id;
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
        );

        if($request->hasFile('product_img')){
            $image = $request->file('product_img');
            $fileName = date('Y-m-d-').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads/products"),$fileName);

            $data['image']=$fileName;
        }
        $create = Product::where('id',$id)->update($data);
        return redirect()->route('product.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        // $product->delete();
        $imagePath = Product::select('image')->where('id', $id)->first();

        $filePath = public_path('uploads/products/'.$imagePath->image);

        if (file_exists($filePath)) {

                  unlink($filePath);

                  Product::where('id', $id)->delete();

       }else{

        Product::where('id', $id)->delete();
       }
        return response()->json('success');
    }
    public function extraDetails(Request $request)
    {
     $id = $request->id;
     $product = Product::where('id', $id)->with('ProductDetail')->first();
     return view('admin.product.extraDetails', compact('id','product'));
    }
    public function extraDetailsStore(Request $request)
    {
     var_dump($request->id);
     $id = $request->id;
     $data = array(
        'title' => $request->title,
        'product_id' => $id,
        'total_items' => $request->total_items,
        'description' => $request->description,

     );
     $details = ProductDetail::updateOrCreate(
        ['product_id' => $id],
        $data);
        return redirect()->route('product.list');
    //  $id = $request->id;
    //  return view('admin.product.extraDetails');

    }
}
