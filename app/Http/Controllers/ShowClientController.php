<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Groups;
use Illuminate\Http\Request;

class ShowClientController extends Controller
{
    public function index()
    {
        $clients = Clients::all();

        return view('dashboard.show-groups', compact('clients'));
    }

    public function showClient($id)
    {
        $client = Clients::find($id);

        if(Clients::whereNull('id_group')){
            $group = Groups::find($client->id_group);

            return view('dashboard.client', compact('client', 'group'));
        }

        return view('dashboard.client', compact('client'));
    }
}
