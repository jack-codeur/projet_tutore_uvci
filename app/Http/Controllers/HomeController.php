<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function actualites()
    {
        return view('pages.admin.actualite');
    }

    public function utilisateurs()
    {
        return view('pages.admin.utilisateurs');
    }

    public function pharmacies()
    {
        return view('pages.admin.pharmacie');
    }

    public function hopitals()
    {
        return view('pages.admin.hopital');
    }

    public function associa_Commerçants()
    {
        return view('pages.admin.association_commerçants');
    }

    public function associa_jeunes()
    {
        return view('pages.admin.association_jeunes');
    }

    public function associa_ethnies()
    {
        return view('pages.admin.associa_ethnies');
    }

    public function associa_religieuses()
    {
        return view('pages.admin.association_religieuses');
    }

    public function messages()
    {
        return view('pages.admin.messages');
    }
}
