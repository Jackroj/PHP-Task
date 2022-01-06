@section('title')
    Task
@endsection
@extends('layouts.app')
@section('content')

<table class="table " id="table_id">
    <thead>
      <tr>
        <th scope="col">SI/No</th>
        <th scope="col">Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $item)
          
     
      <tr class="table-success">
        <th scope="row">{{$item->id}}</th>
        <td >{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.js"></script>
  <script>
  $(document).ready(function () {
      $('#table_id').DataTable({sorting: false});
  });
  </script>
@endsection