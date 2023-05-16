<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use PDF;
class ResultController extends Controller
{
    //
    
    public function downloadCandidateResult()
{
    $candidates = Candidate::all();
    $highestVoteCandidate = null;
    $highestVoteCount = 0;
    //$votes = Vote::whereIn('candidate_id',[$candidates])->count();
    //dd($votes);
    foreach ($candidates as $candidate) {
        $votes = Vote::where('candidate_id', $candidate->id)->count();

        if ($votes > $highestVoteCount) {
            $highestVoteCandidate = $candidate->first_name . ' ' . $candidate->last_name;
            $highestVoteCount = $votes;
        }
    }
    
    // return PDF::loadView('result.candidate', compact('candidates'))->download('report.pdf');
    return PDF::loadView('result.candidate', compact('candidates', 'highestVoteCandidate', 'highestVoteCount'))->download('report.pdf');
}

public function downloadOverallResult()
{
    $vote = Vote::all();


    $pdf = PDF::loadView('result.overall', compact('vote'));

    return $pdf->download('overall_result.pdf')->header('Content-Type', 'application/pdf');
}

}
