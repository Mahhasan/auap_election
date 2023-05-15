<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
//     public function __construct()
// {
//     $this->middleware('auth');
// }
    public function index()
    {
        $candidates = Candidate::all();
        return view('welcome', compact('candidates'));
    }
}