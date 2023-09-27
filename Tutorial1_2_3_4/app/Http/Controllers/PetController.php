<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Pets - Alcaldia de Sabaneta';
        $viewData['subtitle'] = 'Mascotas de la alcandia';
        // $viewData['products'] = Product::all();

        return view('pet.index')->with('viewData', $viewData);
    }


}