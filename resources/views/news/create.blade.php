@extends('layouts.app');
@section('content')

<h2>Responsive Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

<div class="container">
  <form action="submit" method="POST">
  @csrf
  <div class="row"   >
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>	
    <div class="col-75">
      <input type="text" id="fname" name="Heading" placeholder="Heading..">
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
@endsection