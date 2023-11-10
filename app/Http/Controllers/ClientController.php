<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index($id)
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Client created successfully.');
    }

    public function show($id)
    {
        return view('clients.show', compact('client'));
    }

    public function edit($id)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $request->validate();
        $clients = Client::findOrFail($id);
        ([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email,' ,
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        $clients->update($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Client updated successfully.');
    }

    public function destroy($id)
    {
      //  you just use variables which are nt decrared
      $client=Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Client deleted successfully.');
    }
}