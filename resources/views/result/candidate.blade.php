
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table border="1">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Total Vote</th>
      </tr>
    </thead>
    <tbody>
        @foreach($candidates as $candidate)
      <tr>
        <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
        <td>{{$candidate->email}}</td>
        <td>
          {{
          \App\Models\Vote::where('candidate_id',$candidate->id)->count();
          }}
        </td>
      </tr>
      @endforeach
      
      
    </tbody>
  </table>
</div>

</body>
</html>
