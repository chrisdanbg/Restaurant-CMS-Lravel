<?php

namespace App\Http\Controllers;

use App\Category;
use App\HomeItem;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //  Returns to Admin - Index 
    public function index()
    {
        return view ('admin/index');
    }

    //  Returns to Admin - Menu Option
    public function getMenu()
    {
        $products = Product::all();

        return view ('admin/menu')->with('products', $products);
    }

    //  Returns to Admin - Create New Category View
    public function createCategory()
    {
        return view ('admin/category');
    }

    // POST Request Admin - Create New Category
    public function createNewCategory(Request $request)
    {
        $category =  new Category;
        $category->title = $request->title;

        $category->save();

        return redirect()->route('adminMenu');
    }


    //  Returns to Admin - Create New Product View
    public function createProduct()
    {
        $categories = Category::all();
        return view ('admin/create')->with('categories', $categories);
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view ('admin/edit')->with('product', $product)
                                  ->with('categories', $categories);
    }

    public function updateProduct(Request $request, $id)
    {
        // Substring Filepath from the request so it's compatible
        

        $product = Product::find($id);

        $product->title = $request->title;

        if (!empty($request->filepond))
        {
            $url = substr($request->filepond, 6);
            $product->photoUrl = $url;
        }
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;

        $product->save();
        return redirect()->route('adminMenu');
    }

    public function uploadProductPhoto(Request $request){
        $file = $request->file('filepond');
    	return Storage::put('public', $file);
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id)->delete();
        
        return redirect()->back();
    }

    // POST Request Admin - Create New Product
    public function createNewProduct(Request $request)
    {
        // Substring Filepath from the request so it's compatible
        $url = substr($request->filepond, 6);

        $product = new Product;
        
        $product->photoUrl = $url;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;

        $product->save();

        return redirect()->route('adminMenu');
    }

    //  Returns to Admin - Homepage View
    public function getSettings()
    {
        $item = HomeItem::first();

        return view ('admin/homepage')
                    ->with('title', $item->title)
                    ->with('subtitle', $item->subtitle)
                    ->with('itemOneName', $item->itemOneName)
                    ->with('itemOneDescription', $item->itemOneDescription)
                    ->with('itemOnePrice', $item->itemOnePrice)
                    ->with('itemTwoName', $item->itemTwoName)
                    ->with('itemTwoDescription', $item->itemTwoDescription)
                    ->with('itemTwoPrice', $item->itemTwoPrice)
                    ->with('itemThreeName', $item->itemThreeName)
                    ->with('itemThreeDescription', $item->itemThreeDescription)
                    ->with('itemThreePrice', $item->itemThreePrice);
    }
    
    // POST Request Admin - Homepage Update Site Name
    public function updateSiteName(Request $request)
    {
        $title = $request->title;
        $subtitle = $request->subtitle;
        
        $homeItem = HomeItem::first();

        $homeItem->title = $title;
        $homeItem->subtitle = $subtitle;

        $homeItem->save();

        return redirect()->back();
    }

    // POST Request Admin - Homepage Update Product One
    public function productOneUpdate(Request $request)
    {
        $name = $request->itemOneName;
        $description = $request->itemOneDescription;
        $price = $request->itemOnePrice;

        $homeItem = HomeItem::first();
        $homeItem->itemOneName = $name;
        $homeItem->itemOneDescription = $description;
        $homeItem->itemOnePrice = $price;

        $homeItem->save();
        
        return redirect()->back();
    }

    // POST Request Admin - Homepage Update Product Two
    public function productTwoUpdate(Request $request)
    {
        $homeItem = HomeItem::first();
        $homeItem->itemTwoName = $request->itemТwoName;
        $homeItem->itemTwoDescription = $request->itemTwoDescription;
        $homeItem->itemTwoPrice = $request->itemТwoPrice;

        $homeItem->save();
        
        return redirect()->back();
    }

    // POST Request Admin - Homepage Update Product Three
    public function productThreeUpdate(Request $request)
    {
        $homeItem = HomeItem::first();
        $homeItem->itemThreeName = $request->itemThreeName;
        $homeItem->itemThreeDescription = $request->itemThreeDescription;
        $homeItem->itemThreePrice = $request->itemThreePrice;

        $homeItem->save();
        
        return redirect()->back();
    }
}
