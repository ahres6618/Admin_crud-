@extends('layouts.app')

@section('title')

@endsection

@section('content')

<div class="container">
    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="p-2">welcome back</h3>
                </div>
                <div class="card-body">
                    @guest
                    <a href="{{url('/login')}}" class="btn btn-outline-primary">
                        Login
                    </a>
                    @endguest

                    @auth
                    <a href="#" class="btn btn-outline-primary">
                        home
                    </a>
                    @endauth
                </div>

            </div>
            <div class="card">
                
                <div class="card-body">
                    @guest
                    <a href="/payc" class="btn btn-outline-primary">
                        check your payments
                    </a>
                    @endguest

                   
                </div>

            </div>
        </div>
    </div>
</div>

@endsection