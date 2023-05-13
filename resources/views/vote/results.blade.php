@extends('layouts.master')

@section('content')
<h1>Voting Results</h1>
@foreach($candidates as $candidate)
    <p>{{ $candidate->first_name }} {{ $candidate->last_name }}: {{ $candidate->votes_count }}</p>
@endforeach
@endsection
