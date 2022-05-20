<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('layouts.head')
<body>


<table class="table">
  <thead class="thead-dark">
    <tr>
    <th>Sl</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
    <th>Doctor Name</th>
    <th>Phone</th>
    <th>Status</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($appoin as $value)
                
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->time}}</td>
                <td>{{$value->doctor_name}}</td>
                <td>{{$value->number}}</td>
                <td><a type="button" class="btn btn-warning disabled">{{$value->status}}</td>
            
              </tr>
               
            @endforeach
    
    
  </tbody>
</table>


</body>
</html>