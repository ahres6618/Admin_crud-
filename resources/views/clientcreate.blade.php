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
                       <h4>Add new client</h4> 
                    </div>
                </div>

                <div class="card-body">
                <form action="{{route('clients.store')}}" method="POST" class="mt-3">
                @csrf
                <div class="form-group mb-3">
                    <label for="fullname">FullName</label>
                    <input type="text" class="form-control" name="full_name" placeholder="Full name">
                </div>
                <div class="form-group mb-3">
                    <label for="country">FullName</label>
                    <input type="text" class="form-control" name="country" placeholder="country">
                </div>
                <div class="form-group mb-3">
                    <label for="city">FullName</label>
                    <input type="text" class="form-control" name="city" placeholder="city">
                </div>
                <div class="form-group mb-3">
                    <label for="password">FullName</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                    Submit
                    </button>
                </div>

                </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

