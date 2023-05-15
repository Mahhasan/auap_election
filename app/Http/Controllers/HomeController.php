<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\Vote;
use App\Models\User;
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
        $total_candidate = Candidate::count();
        $total_voter = User::where('role', 'voter')->count();
        $casted_votes = Vote::count();
        $shwuopTotalVote = Vote::where('candidate_id', '1')->count();
        $eskendaryTotalVote = Vote::where('candidate_id', '2')->count();
        $akmTotalVote = Vote::where('candidate_id', '3')->count();
        $anuTotalVote = Vote::where('candidate_id', '4')->count();

        return view('home', compact('total_candidate', 'total_voter', 'casted_votes', 'shwuopTotalVote', 'eskendaryTotalVote', 'akmTotalVote', 'anuTotalVote'));
    }

    // public function candidateInfo() {
    //     $candidates = Candidate::all();
    //     return view('welcome', compact('candidates'));
    // }


}
