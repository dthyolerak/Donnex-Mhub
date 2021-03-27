@extends('layouts.app');
@section('content')


<h1 style="width: 70%; text-align:center; margin:auto; background:blue;color:azure;">Donnex at Mhub assignment</h1>

<table border="1" width="70%" height="80vh" align="center">
    <tr>
        <td>id</td>
        <td>Heading</td>
        <td>Message</td>
        <td>Date posted</td>
        <td>date Updated</td>
    </tr>

    @foreach($newsPosted as $new)
    <tr>
        <td>{{$new ['id']}}</td>
        <td>{{$new ['Heading']}}</td>
        <td>{{$new ['message']}}</td>
        <td>{{$new ['created_at']}}</td>
        <td>{{$new ['updated_at']}}</td>
    </tr> 
    @endforeach
</table>
<p style="width: 70%; text-align:center; margin:auto; background:blue;color:azure;">displaying data from database</p>


<p style="width: 85%;height:10vh; text-align:center; padding-top:1rem ; margin: 1rem auto; background:blue;color:azure;"> &copy;2021: Mhub <span>email: <a href="mailto:dthyolerak1.com@gmail.com">dthyolerak1.com@gmail.com</a></span></p>
@endsection