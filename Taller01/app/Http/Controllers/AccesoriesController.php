<?php

namespace App\Http\Controllers;

use App\Models\Accesory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AccesoriesController extends Controller
{

    public function getAccesories(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Accesories';
        $viewData['subtitle'] = 'Taller01 Accesories';
        $viewData['accesories'] = Accesory::all();

        return view('accesories.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create an accesory';
        $viewData['subtitle'] = 'Create a dron accesory';

        return view('accesories.create')->with('viewData', $viewData);
    }

    public function save(Request $request): View
    {
        $request->validate([
            'name' => 'required', 
            'price' => 'required|gt:0',
        ]);
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        
        $accesory = new Accesory();
        $accesory->setName($request['name']);
        $accesory->setBrand($request['brand']);  
        $accesory->setPrice($request['price']); 
        $accesory->setSize($request['size']); 
        $accesory->setDescription($request['description']); 
        $accesory->setImage($request['setImage']);
        $accesory->save();

        // $viewData['name'] = $request['name'];
        // $viewData['price'] = $request['price'];
        return view('accesories.index')->with('viewData', $viewData);
    }
    //$accesory-> setId()   //// $viewData["accesories"]
}
