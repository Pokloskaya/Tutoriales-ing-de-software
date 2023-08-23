<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Taller01';
        $viewData['subtitle'] = 'Taller01 Home Page - Accesories';

        return view('home.index')->with('viewData', $viewData);
    }



}
