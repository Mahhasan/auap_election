@extends('layouts.master')

@section('content')
<h1>Voting Results</h1>
@foreach($candidates as $candidate)
    <p>{{ $candidate->first_name }} {{ $candidate->last_name }}: {{ $candidate->votes_count }}</p>
    <p><a href="/candidate_cv/{{ $candidate->cv }}" target="_blank">CV</a></p>
    <p><a href="{{ $candidate->video }}" target="_blank">Video</a></p>


@endforeach
<a href="{{ route('result.download.candidate',$candidate->id) }}" class="btn btn-primary">Download Result</a>

@endsection
