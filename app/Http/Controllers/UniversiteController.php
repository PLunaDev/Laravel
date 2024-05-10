<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universite;

class UniversiteController extends Controller
{
    public function show($id)
    {
        $universite = Universite::findOrFail($id);
        return view('universite.show', compact('universite'));
    }
}
