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
                       <h4>Clients</h4> 
                    </div>
                </div>

                <div class="card-body">
                    <table id="mytable" class=" table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>product name</th>
                                <th>category</th>
                                <th>price</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $key => $Product)
                                <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$Product->product_name}}</td>
                                <td>{{$Product->category}}</td>
                                <td>{{$Product->cost_price}}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{route('clients.show', $Client->id)}}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i>
                                    </a>
                                
                               
                                    <a href="{{route('clients.edit', $Client->id)}}"
                                    class="btn btn-sm btn-warning mx-2">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                
                                <form action="{{route('clients.destroy', $Client->id )}}" method="post">

                                @method('DELETE')
                                @csrf
                                <button type="submit"
                                class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                                </button>
                                </form>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

