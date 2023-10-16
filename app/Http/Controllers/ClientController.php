<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){

        $clients = Client::orderBy('last_name', 'asc')->get();
        return inertia('Client/Index', [
            'clients' => $clients
        ]);

    }

    public function create(){
        return inertia('Client/Create');
    }

    public function store(Request $request) {
        $fields = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'address' => 'required',
            'phone' => 'required',
            'credit_limit' => 'required',
        ]);

        Client::create($fields);

        return redirect('/clients')->with('message', 'Client successfully created');
    }

    public function edit(Client $client){

        return inertia('Client/Edit', ['client' => $client]);
    }

    public function show(Client $client)
    {
        $client->load('sales');
        $client->sales->each(function ($sale) {
            $totalAmount = $sale->soldItems->sum('amount');
            $sale->total = number_format($totalAmount, 2);
        });
        return inertia('Client/Show',[
            'client'=>$client
        ]);
    }

    public function destroy(Client $client) {
        $client->delete();

        return redirect('/clients')->with('message', 'Client successfully deleted');;
    }
}
