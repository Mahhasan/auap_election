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
    //$votes = Vote::whereIn('candidate_id',[$candidates])->count();
    //dd($votes);
    
    return PDF::loadView('result.candidate', compact('candidates'))->download('report.pdf');
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
