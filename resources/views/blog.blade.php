@extends('layouts.app');
@section('content')

<div style="width: 90%; margin: 1rem auto;">
<a href="/list" style="width: 100px; text-align:center;padding:1rem 1rem; margin: auto; background:blue;color:azure; border-radius:19px ">View Posts</a>

</div>

<h1 style="width: 90%; text-align:center; margin:auto; background:blue;color:azure;">Donnex at Mhub assignment</h1>

<p style="width: 90%; text-align:center; margin:auto; background:blue;color:azure;"> inserting Data to database</p>

<div class="container">
  <form action="submit" method="POST">
  @csrf
  <div class="row"   >
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>	
    <div class="col-75">
      <input type="text" required id="fname" name="Heading" placeholder="Your name..">
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" required name="message" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>

  <p style="width: 90%; text-align:center; margin:auto; background:blue;color:azure;"> After upload click view button on top to see you post</p>

</div>

<p style="width: 90%;height:10vh; text-align:center; padding-top:1rem ; margin: auto; background:blue;color:azure;"> &copy;2021: Mhub <span>email: <a href="mailto:dthyolerak1.com@gmail.com">dthyolerak1.com@gmail.com</a></span></p>

@endsection
