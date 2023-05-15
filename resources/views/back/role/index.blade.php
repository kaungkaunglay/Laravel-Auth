<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
@extends('back.master')
@section('content')
<div class="container mt-4">
    <h5>Roles</h5>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                       
                    </tr>
                </thead>
                <tbody>
                 @foreach($roles as $role)
                 <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                 </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
</body>
</html>