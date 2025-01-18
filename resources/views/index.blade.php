<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Index</h1>
    <a href="{{URL::to('/contact')}}">Contact Us</a>
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contact as $con)
    <tr>
      <th scope="row">{{$con->id}}</th>
      <td>{{$con->name}}</td>
      <td>{{$con->email}}</td>
      <td>{{$con->message}}</td>
      <td><img src="images/{{$con->image}}" height="80px" width="80px"> </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>