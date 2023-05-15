<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
class VoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showForm()
    {
        if(Auth()->user()->role !="voter"){
            return redirect()->to('/home');
        }

        $candidates = Candidate::all();
        $check = Vote::where('voter_id', Auth::user()->id)->count();
        return view('vote.form', compact('candidates','check'));
    }


    public function submitVote(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required|exists:candidates,id',
        ]);

        $voter = Auth::user();
        if ($voter->votes()->exists()) {
            return redirect()->route('vote.submit')->with('error', 'You have already voted!');
        }

        $vote = new Vote();
        $vote->candidate_id = $request->input('candidate_id');
        $vote->voter_id = $voter->id;
        $vote->save();

        return redirect()->route('vote.submit')->with('success', 'Vote submitted successfully!');
    }
    public function showResults()
    {
        if(Auth()->user()->role!="admin"){
            return redirect()->to('/home');
        }
        $candidates = Candidate::withCount('votes')->get();
        return view('vote.results', compact('candidates'));
    }
}
