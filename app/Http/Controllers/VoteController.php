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
        $voted = Vote::where('voter_id', Auth::user()->id)->select('candidate_id')->first();
        return view('vote.form', compact('candidates','check','voted'));
    }


    public function submitVote(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required|exists:candidates,id',
        ]);

        $voter = Auth::user();
        if ($voter->votes()->exists()) {
            return redirect('/')->with('warning', "You have already voted. Once you vote, you can edit or withdraw. Thank you.");
        }
        try{
            if(Auth()->user()->role =="voter"){
            $vote = new Vote();
            $vote->candidate_id = $request->input('candidate_id');
            $vote->voter_id = $voter->id;
            $vote->save();
            return redirect('/')->with('success', "Congratulations! Your vote has been submitted successfully");
            // return redirect()->route('vote.submit')->with('success', 'Vote submitted successfully!');
            }
            return redirect('/')->with('error', "You can not vote until you are a member of AUAP.");

        }
        catch(\Exception $e) {
            // $msg = $e->getMessage();
            return redirect('/')->with('fail', "Vote submission Failed! Please try again"); 
          }

        
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
