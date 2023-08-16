<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"TV 4K", "description"=>"Esta es la descripcion de tv", "price"=> "2.000.000" ],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=> "8.000.000"],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=> "300.000"],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=> "10"]
    ];

        public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => 'required|gt:0'
        ]);
    
        // Assuming you have an Eloquent model called Product
        $product = new Product([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);
    
        $product->save();
    
        return redirect()->route('product.productCreated', ['product' => $product]);
    }
    

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View
    {
        try {
            $product = ProductController::$products[$id - 1];
            $viewData = [
                "title" => $product["name"] . " - Online Store",
                "subtitle" => $product["name"] . " - Product information",
                "product" => $product,
            ];
            
            return view('product.show')->with("viewData", $viewData);
        } catch (ValidationException $e) {
            return redirect()->route("home.index");
        }
    }
}
