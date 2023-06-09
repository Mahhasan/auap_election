@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> -->
        <a href="{{ route('result.download.candidate') }}" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm"><i
                class="fas fa-download fa-md text-white-50"></i> Generate Election Result</a>
        <a href="{{ route('result.overall') }}" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm"><i
        class="fas fa-download fa-md text-white-50"></i> Generate Election Result with Details</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Candidates</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_candidate}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-id-card fa-2x text-gray-300" aria-hidden="true"></i>
                            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Voter</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_voter}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x text-gray-300"  aria-hidden="true"></i>
                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Casted Votes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$casted_votes}}</div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                            <i class="fas fa-vote-yea fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <!-- <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Casted Vote
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Pending Requests Card Example -->
        <!-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Remaining Votes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-md-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Indevidual Vote Progress</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold"><i class="fa fa-user"  aria-hidden="true"></i> Prof. Dr. Anoop Swarup <span
                            class="float-right">Total vote: {{$shwuopTotalVote}}</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{$shwuopTotalVote}}%"
                            aria-valuenow="{{$shwuopTotalVote}}%" aria-valuemin="0" aria-valuemax="{{$casted_votes}}"></div>
                    </div>
                    <h4 class="small font-weight-bold"><i class="fa fa-user"  aria-hidden="true"></i> Dr. Abdolmajid Eskandari<span
                            class="float-right">Total vote: {{$eskendaryTotalVote}}</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{$eskendaryTotalVote}}%"
                            aria-valuenow="{{$eskendaryTotalVote}}" aria-valuemin="0" aria-valuemax="{{$casted_votes}}"></div>
                    </div>
                    <!-- <h4 class="small font-weight-bold"><i class="fa fa-user"  aria-hidden="true"></i> Prof. Dr. A.K.M. Fazlul Haque<span
                            class="float-right">Total vote: {{$akmTotalVote}}</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: {{$akmTotalVote}}%"
                            aria-valuenow="{{$akmTotalVote}}" aria-valuemin="0" aria-valuemax="{{$casted_votes}}"></div>
                    </div> -->
                    <h4 class="small font-weight-bold"><i class="fa fa-user"  aria-hidden="true"></i> Prof. Ujjwal K Chowdhury<span
                            class="float-right">Total vote: {{$anuTotalVote}}</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: {{$anuTotalVote}}%"
                            aria-valuenow="{{$anuTotalVote}}" aria-valuemin="0" aria-valuemax="{{$casted_votes}}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
