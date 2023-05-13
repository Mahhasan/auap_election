<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
class VoteController extends Controller
{
    public function showForm()
    {
        $candidates = Candidate::all();
        return view('vote.form', compact('candidates'));
    }

    // public function submitVote(Request $request)
    // {
        
    //     $vote = new Vote();
    //     $vote->candidate_id = $request->input('candidate_id');
    //     $vote->voter_id = auth()->user()->id;
    //     $vote->save();

    //     return redirect()->route('vote.form')->with('success', 'Vote submitted successfully!');
    // }

    // public function showResults()
    // {
    //     $candidates = Candidate::withCount('votes')->get();
    //     return view('vote.results', compact('candidates'));
    // }

    public function submitVote(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required|exists:candidates,id',
        ]);

        $voter = Auth::user();
        if ($voter->votes()->exists()) {
            return redirect()->route('vote.form')->with('error', 'You have already voted!');
        }

        $vote = new Vote();
        $vote->candidate_id = $request->input('candidate_id');
        $vote->voter_id = $voter->id;
        $vote->save();

        return redirect()->route('vote.form')->with('success', 'Vote submitted successfully!');
    }
    public function showResults()
    {
        $candidates = Candidate::withCount('votes')->get();
        return view('vote.results', compact('candidates'));
    }
}
