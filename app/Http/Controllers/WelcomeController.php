<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        return view('welcome', compact('candidates'));
    }
}