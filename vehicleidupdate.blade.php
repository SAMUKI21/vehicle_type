<!DOCTYPE html>
@extends('layouts.mainlayout')
 


@section('content')
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">

    <div class="col-md-10">
    <br> <br> <br> <br> <br> <br>
    @include('layouts.nav')
                <form  method="POST" action="/Vehicle/public/vehicleidupdate">
                   @csrf
                
                    <div class="form-group">
                          <input type="hidden" class="form-control" id="id" placeholder="Edit Agent ID" name="id" value="{{$data->id}}">
                  
                    <label for="vehicle_tpe">vehicle_type</label>
                          <input type="text" class="form-control" id="vhtype" placeholder="Edit Agent ID" name="vehicle_type" value="{{$data->vehicle_type}}">
                  

                      <button type="submit" class="btn btn-primary">Update</button>
                
                </form>
    <br><br><br><br>
    
    </div>

   
  </div>
  </div>
    
</body>
</html>