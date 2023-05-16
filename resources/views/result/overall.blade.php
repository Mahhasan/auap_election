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
<h4 class="mb-3">AUAP Election Result Sheet (Details Result)</h4>
</div>
  <table border="1" class="table">
    <thead>
      <tr>
        <th>SL.</th>
        <th>Voter Name</th>
        <th>Voted Candidate</th>
        <th>Vote Time</th>
      </tr>
    </thead>
    <tbody>
      @foreach($vote as $index => $vt)
      <tr>
        <td>{{++$index}}</td>
        <td>{{$vt->voter->first_name}} {{$vt->voter->last_name}}</td>
        <td>{{$vt->candidate->first_name}} {{$vt->candidate->last_name}}</td>
        <td>{{$vt->created_at}}</td>
      </tr>
      @endforeach
    </tbody> 
  </table>



</body>
</html>