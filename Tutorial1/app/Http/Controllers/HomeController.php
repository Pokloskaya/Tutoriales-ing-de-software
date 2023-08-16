<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        
        return view('home.index')->with("viewData", $viewData);
    }
    
    public function about()
    {
        $data1 = "About us - Online Store";
        $data2 = "About us";
        $description = "This is an about page ...";
        $author = "Developed by: Julianskiy";
        
        return view('home.about')->with("title", $data1)
            ->with("subtitle", $data2)
            ->with("description", $description)
            ->with("author", $author);
    }

    public function contact()
    {
        $data1 = "Contact us - Online Store";
        $data2 = "Contact us - contact info";
        $email = "julian\$\$dev#1@gmail.com";
        $address = "Carrera 70a #69-13";
        $phone = "3154571212";
        
        return view('home.contact')
            ->with("title", $data1)
            ->with("subtitle", $data2)
            ->with("email", $email)
            ->with("address", $address)
            ->with("phone", $phone);
    }
}
