@extends('layouts.app')

@section('content')

<div class="btn-group-vertical">
<div class="container"> 
<form method="post" action="{{route('comment')}} " enctype="multipart/form-data" >
@csrf


<h2>upload your problem</h2>

<p>we <strong>send to you</strong> solutions and roads:</p>


  <label for="fname">photo</label><br>
  <input type="file" id="fname" name="photo" ><br>
  <label for="lname">Name</label><br>
  <input type="text" id="lname" name="name" ><br><br>
  <label for="lname">Email</label><br>
  <input type="email" id="lname" name="price" ><br><br>
  <label for="lname">your problems</label><br>
  <input type="text" id="lname" name="adress" ><br><br>
  <input type="submit" value="Submit" href="edit">
 

<p>we will help you .dont worry </p>

</body>


@endsection
