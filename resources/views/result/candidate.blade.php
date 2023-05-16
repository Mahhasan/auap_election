<!DOCTYPE html>
<html lang="en">
<head>
  <title>AUAP Election</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container">
  <h5 class="mb-3">AUAP Election Result Sheet (Candidate wise Result)</h5>
  <table border="1" class="table">
    <thead>
      <tr>
        <th>SL.</th>
        <th>Name</th>
        <th>Designation with institute</th>
        <th>Total Vote</th>
      </tr>
    </thead>
    <tbody>
      @foreach($candidates as $index => $candidate)
      <tr>
        <td>{{++$index}}</td>
        <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
        <td>{{$candidate->designation}}</td>
        <td>
          {{
          \App\Models\Vote::where('candidate_id', $candidate->id)->count();
          }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<div class="row">
  <div class="col-sm-12">
    <h6>Winner is {{$highestVoteCandidate}} by getting highest <b>({{$highestVoteCount}})</b> number of vote.</h6> 
  </div>
</div>
</div>

</body>
</html>