
@extends('adminlte::page')

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous"></script>
</head>

@section('content_header')
Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row my-5">
        <div class="col-md-4 ">
           
               
            <div class="small-box bg-info">
                <div class="inner">
<h3>{{\App\Models\Clients::count()}}</h3>
<p>العملاء</p>
</div>
<div class="icon">
    <i class="fas fa-users"></i>
</div>
<a href="{{url('clients')}}" class="small-box-footer">
More info  <i class="fas fa-arrow-circle-right"></i>
</a>



            </div>
        </div>

        
    </div>
</div>
<script src="((asset('js/main.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>

@endsection