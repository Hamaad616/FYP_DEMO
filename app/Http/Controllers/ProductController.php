<?php

namespace App\Http\Controllers;

use App\Product;
use App\ImageModel;
use App\ProductVariant;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all(); /*$sign means varibale */
        return view('admin.product_view', ['product'=>$products]);
    }
     /* Show the form for creating a new resource.

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variants = \App\Variant::all();
        $values = \App\VariantValue::all();
        $categories = \App\Category::all();
        return view ('admin.product_add',compact(['categories','variants','values']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pro = new Product();  /*object of product model*/

        /*$request->validate([
            'product_name'   => 'required',
            'category'       => 'required',
            'price'          => 'required',
            'discount'       => 'required',
            'description'    => 'required'

       ]);*/


        $pro->product_name = request('product_name');
        $pro->category     = request('category');   /*(roll,name,address sub form ka varibales hain)*/
        $pro->status       = request('publish');
        $pro->new          = request('new');
        $pro->feature = request('feature');
        $pro->sale = request('sale');
        $pro->price = request('price');
        $pro->description = request('description');

        $file = $request->file('filename');
        $slug = SlugService::createSlug(Product::class, 'slug', $pro->product_name);
         $file_path = 'uploads/'.$slug.'/';
        if(isset($file))
        {
            $file_name = $file->getClientOriginalName();

            //File::makeDirectory($file_path, $mode = 0777, true, true);

            $file->move($file_path, $file_name);

            $pro->product_image = $file_name;

        }
            $pro->save();

        $files = $request->file('images');
        if(isset($files)){
            foreach ($files as $key => $file) {
                $image = new \App\Image;
                $image->product_id = $pro->id;
                $file_name = $file->getClientOriginalName();

                //$file_path = 'uploads/'.$pro->slug.'/';

                $file->move($file_path, $file_name);

                $image->filename = $file_name;

                $image->save();
            }
        }

       /**/
             $variants = $request->input('variants');

       foreach ($variants as $key => $variant) {
        $variant = explode('-', $variant);
           $values = $request->input($variant[1]);
           // $product_variant = new \App\ProductVariant;
           //     $product_variant->product_id = $pro->id;
           //     $product_variant->variant_id = $variant[0];
           //     $product_variant->save();
               if(isset($values))
               {

           foreach ($values as $key => $value) {

               $product_variant_value = new \App\ProductVariantValue;
               $product_variant_value->variant_id =  $variant[0];
               $product_variant_value->value_id = $value;
               $product_variant_value->product_id = $pro->id;
               $product_variant_value->save();
           }
        }

       }

        return redirect('product')->with('success', 'PRODUCT RECORD SAVED SUCCESSFULLY...!' );

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
         $variants = \App\Variant::all();
        $values = \App\VariantValue::all();
        $categories = \App\Category::all();

        /*return view('admin.product_edit', ['products'=>$product]);*/
        return view ('admin.product_edit',compact(['product','categories','variants','values']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

//       dd($request->all());
        $product->product_name = $request->product_name;
        $product->category = $request->category;
        $product->status = $request->publish;
        $product->new = $request->new;
        $product->feature = $request->feature;
        $product->sale = $request->sale;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        if ($request->hasFile('filename')) {

            $file = $request->file('filename');

            $file_name = $file->getClientOriginalName();

            $file_path = 'uploads/';

            $file->move($file_path, $file_name);

            $pro->product_image = $file_name;

            $pro->save();
            $files = $request->file('images');
            foreach ($files as $key => $file) {
                $image = new \App\Image;
                $image->product_id = $pro->id;
                $file_name = $file->getClientOriginalName();

                $file_path = 'uploads/'.$pro->slug.'/';

                $file->move($file_path, $file_name);

                $image->filename = $file_name;

                $image->save();
            }
        }

        if ($request->input('variants')) {

             $variants = $request->input('variants');

               foreach ($variants as $key => $variant) {
                $variant = explode('-', $variant);
                   $values = $request->input($variant[1]);

//                   foreach ($values as $key => $value) {
//
//                       $product_variant = new ProductVariant;
//                       $product_variant->product_id = $product->id;
//                       $product_variant->variant_id = $variant[0];
//                       $product_variant->variant_value_id = $value;
//                       $product_variant->save();
//                   }
                   if (is_array($values) || is_object($values))
                   {
                       foreach ($values as $key => $value)
                       {
                           $product_variant = new ProductVariant;
                           $product_variant->product_id = $product->id;
                           $product_variant->variant_id = $variant[0];
                           $product_variant->variant_value_id = $value;
                           $product_variant->save();
                       }
                   }

               }
        }

        if($product->save()){
            return redirect('product')->with('success', 'Product Has Been Updated SUCCESSFULLY...!');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
         $file_path = '/uploads/' . $product->slug ;
        if (File::exists(public_path($file_path)))
        {
              File::deleteDirectory(public_path($file_path));
        }
        if ($product->delete())
        {

            return redirect('product')->with('success', 'Product Has Been Deleted...!');
        }


    }
}
