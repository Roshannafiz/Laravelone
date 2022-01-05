<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        $products = Product::all();
        return view('admin.product.create', compact('categories', 'subcategories', 'brands', 'units', 'sizes', 'colors', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $qty = !empty($request->quantity) ? $request->quantity : 100;

        $product->cat_id = $request->category;
        $product->subcat_id = $request->subcategory;
        $product->brand_id = $request->brand;
        $product->unit_id = $request->unit;
        $product->size_id = $request->size;
        $product->color_id = $request->color;
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->quantity = $qty;
        $product->stock_status = $request->stock_status;
        $product->featured = $request->featured;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->seal_price = $request->seal_price;

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/upload-product', $filename);
            $product->product_image = $filename;
        }

        $images = array();
        if ($files = $request->file('gallery_image')) {
            $i = 0;
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $fileNameExtract = explode('.', $name);
                $fileName = $fileNameExtract[0];
                $fileName .= time();
                $fileName .= $i;
                $fileName .= '.';
                $fileName .= $fileNameExtract[1];

                $file->move('admin/upload-product/gallery', $fileName);
                $images[] = $fileName;
                $i++;
            }
            $product['gallery_image'] = implode("|", $images);
            $product->save();
            return redirect('/products')->with('message', 'New Products added Succesfully!');
        }
    }


    // Automatick Add Slug Wheen Type Name Flied
    public function checkSlug(Request $request)
    {
        $name =  $request->name;
        return response(['slug' => $this->slugify($name)]);
    }


    // Automatick Add Slug When Type Name Flied
    public  function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            //return 'n-a';
            return '';
        }

        return $text;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //___________ Change Ststus Usign Ajax ___________//
    public function change_status(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->status = $request->status;
        $product->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('admin.product.edit', compact('categories', 'subcategories', 'brands', 'units', 'sizes', 'colors', 'product'));
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
        $product = Product::all();

        $qty = !empty($request->quantity) ? $request->quantity : 100;
        $size =  $request->size;
        $color = $request->color;

        $product = Product::find($id);
        $product->cat_id = $request->category;
        $product->subcat_id = $request->subcategory;
        $product->brand_id = $request->brand;
        $product->unit_id = $request->unit;
        $product->size_id = $size;
        $product->color_id = $color;

        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->slug = $request->slug;

        $product->regular_price = $request->regular_price;
        $product->seal_price = $request->seal_price;
        $product->quantity = $qty;


        $product->featured = $request->featured;
        $product->short_description  = $request->short_description;
        $product->description = $request->description;


        if ($request->hasFile('product_image')) {
            $path = 'admin/upload-product/' . $product->product_image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/upload-product', $filename);
            $product->product_image = $filename;
        }


        $product->update();
        return redirect('/products')->with('message', "Product Updated Successfully!", compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $delete = $product->delete();
        if ($delete) {
            return redirect()->back()->with('message', "Product Deleted Successfully");
        }
    }
}
