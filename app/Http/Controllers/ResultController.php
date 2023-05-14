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
    
    public function downloadCandidateResult($candidateId)
{
    $candidate = Candidate::findOrFail($candidateId);
    $votes = Vote::where('candidate_id', $candidateId)->count();
    
    $data = [
        'title' => 'Welcome to ItSolutionStuff.com',
    ];
    
    $pdf = PDF::loadView('result.candidate', $data);
    //dd($pdf);
    
    return $pdf->download('itsolutionstuff.pdf');
}

public function downloadOverallResult()
{
    $candidates = Candidate::all();
    $resultData = [];
    
    foreach ($candidates as $candidate) {
        $votes = Vote::where('candidate_id', $candidate->id)->count();
        $resultData[] = [
            'candidate' => $candidate,
            'votes' => $votes
        ];
    }
    
    $pdf = PDF::loadView('result.overall', ['resultData' => $resultData]);
    
    return $pdf->download('overall_result.pdf');
}

}
