@extends('layouts.master')

@section('content')

<style>
    .candidates-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    }

    .candidates-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    }

    .candidate-card {
    border: 1px solid #ccc;
    padding: 20px;
    width: 300px;
    flex-basis: calc(50% - 10px); /* Adjust the width of each candidate card here */
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    transition: background-color 0.3s ease;
    }

    .candidate-info {
    margin-bottom: 10px;
    text-align: center;
    }

    button[type="submit"] {
    margin-top: 20px;
    }

    .candidate-card.selected {
    background-color: blue;
    color: white;
    border-color: blue;
    }
</style>



<div class="container">
    <div class="form-container">
        @if(session('success'))
        <p>You have already submitted your vote.</p>
        @elseif(isset($candidates))
            @if(!$check)
            <div class="candidates-wrapper">
                <form action="{{ route('vote.submit') }}" method="POST">
                    @csrf
                    <p>Select a candidate:</p>
                    <div class="candidates-container">
                        @foreach($candidates as $candidate)
                            <label class="candidate-card" onclick="selectCandidate(this)">
                                <input type="radio" name="candidate_id" value="{{ $candidate->id }}" class="candidate-radio" hidden>
                                <div class="candidate-info">
                                    <h3>{{ $candidate->first_name }} {{ $candidate->last_name }}</h3>
                                    <p>{{ $candidate->email }}</p>
                                    <!-- Add more candidate details here -->
                                </div>
                            </label>
                        @endforeach
                    </div>
                    <button type="submit">Submit Vote</button>
                </form>
            </div>
            @else
            test
            @endif
        @endif          

        <script>
        function selectCandidate(element) {
            const candidateCards = document.querySelectorAll('.candidate-card');
            candidateCards.forEach(card => {
                card.classList.remove('selected');
            });

            element.classList.add('selected');
        }
        </script>
    </div>
</div>


@endsection
