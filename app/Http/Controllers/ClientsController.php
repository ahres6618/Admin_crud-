<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\payments;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Client = Clients::all();
        return view('clients')->with([
            'clients'=> $Client
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientcreate') ;
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'full_name' => 'required',
        'country' => 'required',
        'city' => 'required',
        'password' => 'required']);

        Clients::create($request->except('_token'));
        
        return redirect()->route('clients.index')->with([
            'success' => 'Client added successfully'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $client = Clients::where('id',$id)->first();
            return view( 'clientshow' )->with([
            'client' => $client
            ]);

    }
    
    public function checkpayements(Request $req){
        $email = $req->email;
        $client =Clients::where('email',$email);
        $id= $client->id;
        $payments = payments::where('client_id',$id );
        return view( 'clientpayment' )->with([
            'payments' => $payments
            ]);


    }


   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


  

    public function edit($id)
    {
        //
        //
        $client = Clients::where('id',$id)->first();
        return view( 'clientupdate' )->with([
        'client' => $client
        ]);

    }

   
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        
        $client = Clients::where('id',$id)->first();
        
        $this->validate($request,[
            'full_name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'password' => 'required']);
    
           $client->update($request->except('_token','method'));
            
            return redirect()->route('clients.index')->with([
                'success' => 'Client updatedsuccessfully'
                ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $client= Clients::where('id',$id)->first();
        $client->delete();
        return redirect()->route('clients.index')->with([
        'success' => ' Employe deleted successfully'
        ]);
    }
}
