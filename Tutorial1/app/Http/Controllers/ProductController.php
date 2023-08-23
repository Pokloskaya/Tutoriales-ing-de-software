<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductController extends Controller
{
    public static $products = [
        ['id' => '1', 'name' => 'TV 4K', 'description' => 'Esta es la descripcion de tv', 'price' => '2.000.000'],
        ['id' => '2', 'name' => 'iPhone', 'description' => 'Best iPhone', 'price' => '8.000.000'],
        ['id' => '3', 'name' => 'Chromecast', 'description' => 'Best Chromecast', 'price' => '300.000'],
        ['id' => '4', 'name' => 'Glasses', 'description' => 'Best Glasses', 'price' => '10'],
    ];

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): View
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|gt:0',
        ]);
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['name'] = $request['name'];
        $viewData['price'] = $request['price'];
        return view('product.created')->with('viewData', $viewData);
    }

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = ProductController::$products;

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View | RedirectResponse
    {
        try {
            $product = ProductController::$products[$id - 1];
            $viewData = [
                'title' => $product['name'].' - Online Store',
                'subtitle' => $product['name'].' - Product information',
                'product' => $product,
            ];

            return view('product.show')->with('viewData', $viewData);
        } catch (\Throwable $e) {
            report($e);

            return redirect()->route('home.index');
        }
    }
}
