@extends('layouts.master')

@section('content')
<!-- <form action="{{ route('vote.submit') }}" method="POST">
    @csrf
    <label for="candidate_id">Select a candidate:</label>
    <select name="candidate_id" id="candidate_id">
        @foreach($candidates as $candidate)
            <option value="{{ $candidate->id }}">{{ $candidate->first_name }} {{ $candidate->last_name }}</option>
        @endforeach
    </select>
    <button type="submit">Submit Vote</button>
</form> -->
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@if(isset($candidates))
    <form action="{{ route('vote.submit') }}" method="POST">
        @csrf
        <p>Select a candidate:</p>
        @foreach($candidates as $candidate)
            <label>
                <input type="radio" name="candidate_id" value="{{ $candidate->id }}">
                {{ $candidate->first_name }} {{ $candidate->last_name }}
            </label>
            <br>
        @endforeach
        <button type="submit">Submit Vote</button>
    </form>
@endif

@endsection
