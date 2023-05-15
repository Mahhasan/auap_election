<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth()->user()->role!="admin"){
            return redirect()->to('/');
        }
        return view('home');
    }

    public function candidateInfo() {
        $candidates = Candidate::all();
        return view('welcome', compact('candidates'));
    }


}
