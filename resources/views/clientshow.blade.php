@extends('adminlte::page')

@section('plugins.Datatables' ,true)

@section('title')

@endsection

@section('content_header')
Clients list
@endsection

@section('content')

<div class="container">
    <div class="row my">
        <div class="col-md-6 mx-auto ">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center text-uppercase">
                       <h4>{{$client->full_name}}</h4> 
                    </div>
                </div>

                <div class="card-body">
                
                <div class="form-group mb-3">
                    <label for="fullname">FullName</label>
                    <input type="text" class="form-control" name="full_name" placeholder="Full name" value="{{$client->full_name}}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="country">FullName</label>
                    <input type="text" class="form-control" name="country" placeholder="country" value="{{$client->country}}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="city">FullName</label>
                    <input type="text" class="form-control" name="city" placeholder="city" value="{{$client->city}}" disabled>
                </div>
               
               

              
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

