@extends('layouts.mastertwo')

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
        padding: 10px 10px 0px 10px;
        width: 300px;
        flex-basis: calc(50% - 10px); /* Adjust the width of each candidate card here */
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .candidate-info {
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

    /* Popup Styles */
    .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        z-index: 9999;
        display: none;
    }

    .popup p {
        margin: 0;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9998;
        display: none;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
</style>

<div class="container">
    <div class="form-container">
        @if(session('success'))
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Congratulations!!!</h2>
                <h3>You have voted for {{$voted->candidate->first_name}} {{$voted->candidate->last_name}}</h3>
                <h3>Keep patience, you will get the election result right after the result publish.</h3>
                <a href="/"><b><i class="fa fa-arrow-left"></i> Back to Home</b></a>
            </div>
        </div>
        @elseif(isset($candidates))
            @if(!$check)
            <div class="candidates-wrapper">
                <form action="{{ route('vote.submit') }}" id="myForm" method="POST">
                    @csrf
                    <div class="text-center mb-3">
                        <h2>Vote for your favorite candidate by selecting a Card</h2>
                        <small class="text-danger"><b>***Once you vote, you cannot edit your vote or participate again!!!</b></small>
                    </div>
                    <div class="candidates-container">
                        @foreach($candidates as $candidate)
                        <label class="candidate-card" onclick="selectCandidate(this)">
                            <input type="radio" name="candidate_id" value="{{ $candidate->id }}" class="candidate-radio" hidden>
                            <div class="candidate-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="/frontend/assets/img/candidates/{{ $candidate->profile_pic }}" alt="" height="75%" width="70%" style="border-radius: 10px;">
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <b>{{ $candidate->first_name }} {{ $candidate->last_name }}</b><br>
                                        <small>{{ $candidate->designation }}</small><br>
                                        <small>{{ $candidate->organization }}</small><br>
                                        <div class="row" style="padding-top: 24px;">
                                            <div class="col-sm-12" style="display: flex; justify-content: space-around;">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$candidate->id}}" class="btn-sm " style="flex-grow: 1; margin-right: 5px;"><i class="fa fa-file" aria-hidden="true"></i> Video</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleCV{{$candidate->id}}" class="btn-sm" style="flex-grow: 1; margin-left: 5px;"><i class="fa fa-video-camera" aria-hidden="true"></i> CV</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        @endforeach
                    </div>
                    <div class="col-sm-12" style="display: flex; justify-content: space-between;">
                        <button class="btn btn-success" type="submit"><a href="/" style="text-decoration: none; color: #ffffff;"><i class="fa fa-arrow-left"></i> Back to Home</a></button>
                        <button class="btn btn-primary" type="submit"><i class='fas fa-vote-yea'></i> Submit your Vote</button>
                    </div>
                </form>
            </div>
            @else
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Congratulations!!!</h2>
                    <h3>You have voted for {{$voted->candidate->first_name}} {{$voted->candidate->last_name}}</h3>
                    <h3>Keep patience, you will get the election result right after the result publish.</h3>
                    <a href="/"><b><i class="fa fa-arrow-left"></i> Back to Home</b></a>
                </div>
            </div>
            @endif
        @endif

        <!-- Popup HTML -->
        <div class="popup" id="popup">
            <span class="close" onclick="closePopup()">&times;</span>
            <p>Please select a candidate before submitting your vote.</p>
        </div>

        <!-- Overlay -->
        <div class="overlay" id="overlay"></div>

        <script>
            function selectCandidate(element) {
                const candidateCards = document.querySelectorAll('.candidate-card');
                candidateCards.forEach(card => {
                    card.classList.remove('selected');
                });

                element.classList.add('selected');
            }

            function validateForm() {
                var selectedOption = document.querySelector('input[name="candidate_id"]:checked');

                if (!selectedOption) {
                    showPopup();
                    return false;
                }
                return true;
            }

            function showPopup() {
                var popup = document.getElementById("popup");
                var overlay = document.getElementById("overlay");

                popup.style.display = "block";
                overlay.style.display = "block";
            }

            function closePopup() {
                var popup = document.getElementById("popup");
                var overlay = document.getElementById("overlay");

                popup.style.display = "none";
                overlay.style.display = "none";
            }

            document.getElementById("myForm").addEventListener("submit", function(event) {
                if (!validateForm()) {
                    event.preventDefault();
                }
            });
        </script>
    </div>
</div>

@endsection