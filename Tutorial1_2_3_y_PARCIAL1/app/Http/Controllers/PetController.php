<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PetController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Pets - Alcaldia de Sabaneta';
        $viewData['subtitle'] = 'Mascotas de la alcaldia';
        // $viewData['products'] = Product::all();

        return view('pet.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Registra una mascota!';
        $viewData['subtitle'] = 'Registra tu mascota';
        return view('pet.create')->with('viewData', $viewData);
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $viewData = [];
        $viewData['title'] = 'Pets - Alcaldia de Sabaneta';
        $viewData['subtitle'] = 'Mascotas de la alcaldia';
        $viewData['name'] = $request['name'];
        $viewData['type'] = $request['type'];
        $viewData['rating'] = $request['rating'];

        Pet::create($request->only(['name', 'type', 'rating']));

        return back();
    }

    public function list(): View
    {
        try {
            
            $viewData['title'] = 'Pets - Alcaldia de Sabaneta';
            $viewData['subtitle'] = 'Mascotas de la alcaldia';
            $viewData['pets'] = Pet::all();
    
            return view('pet.list')->with('viewData', $viewData);
        } catch (\Throwable $e) {
            report($e);
    
            return back();
        }
    }    

    public function statistics(): View
    {
        $averageRating = Pet::avg('rating');

        $viewData['title'] = 'Pets - Alcaldia de Sabaneta';
        $viewData['subtitle'] = 'Mascotas de la alcaldia';
        $viewData['averageRating'] = $averageRating;

        return view('pet.statistics')->with('viewData', $viewData);
    }


}