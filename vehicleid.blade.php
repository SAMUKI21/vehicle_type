<!DOCTYPE html>
@extends('layouts.mainlayout')

@section('title','vehicle type')

@section('content')
<div class="container">
  <div class="row">

    <div class="container">
<br><br><br><br><br><br>
    <h1>Vehicle type Details</h1>
        <div class="row">
                <div class="col-md-12">
               
                <form action="" method="POST"> 
               @csrf
                <div class="form-group form-row">
                <label class="col-sm-3" for="input-vhtype">Vehicle type</label>
                <div class="col-sm-9">
        
        <input value="" class="form-control" type="text" name="vehicle_type" placeholder="Enter Vehicle type" required="required" id="">

        
        
              </div>
              </div>              
             
            </br>
            <input type="submit" class="btn btn-primary" value="SAVE">
            <input type="button" class="btn btn-warning" value="CLEAR">
            </br> </br>     
            </form>
            <table class="table table-dark" border="1">
              <tr>
            <th>ID</th> 
            <th> vehicle_type</th>
            <th>Action</th>
             
            
</tr>

        
            @foreach($vdetails as $vehicle_type)


            <tr>

   <td >   {{  $loop->iteration  }}
</td>

           
            <td>  {{$vehicle_type->vehicle_type}} </td>
         <td>
 
<a href="/Vehicle/public/deletevehicleid/{{$vehicle_type->id}}" class="btn btn-danger">Delete</a>
<a href="/Vehicle/public/updatevehicleid/{{$vehicle_type->id}}" class="btn btn-warning">Update</a>
</td>
            </tr>

            @endforeach  
          </table>
            </div>
    </div>




 </div>

</div>

</div>

