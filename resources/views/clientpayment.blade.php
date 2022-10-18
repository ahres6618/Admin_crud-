@extends('layouts.app')
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
                                <th>full name</th>
                                <th>country</th>
                                <th>city </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($payements as $key => $Payment)
                                <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$Payment->payment_date}}</td>
                
                               
                                <td>{{$Payment->payement_amount }}</td>
                              
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>