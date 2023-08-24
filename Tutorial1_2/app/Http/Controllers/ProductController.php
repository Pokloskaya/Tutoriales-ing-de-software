<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductController extends Controller
{
    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|gt:0',
        ]);
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['name'] = $request['name'];
        $viewData['price'] = $request['price'];
        // return view('product.created')->with('viewData', $viewData);

        Product::create($request->only(['name', 'price']));

        return back();
    }

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View|RedirectResponse
    {
        try {
            $product = Product::findOrFail($id);
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
