@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white"> enter your information</div>

                <div class="card-body">
                    <form method="POST" action="{{url('clients.checkpayements')}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">email</label>

                            <div class="col-md-6">
                                <input id="email" type="email"   name="email" required autocomplete="email" autofocus>

                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password"  @name="password" required autocomplete="current-password">

                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   check
                                </button>

                              
                            </div>
                        </div>
                       
                       
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection