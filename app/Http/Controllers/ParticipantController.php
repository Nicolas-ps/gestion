<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ParticipantController extends Controller
{
    public function create ($id)
    {
        $clients = Clients::whereNull('id_group')->get();
        $idGroup = $id;

        return view('dashboard.add-participant', compact('clients', 'idGroup'));
    }

    public function store($id, $id_participant)
    {
        $client = Clients::find($id_participant);
        $group = Groups::find($id);

        $client->id_group = $group->id;
        $client->save();


        return redirect()->route('group-showing', ['id' => $id])
                                 ->with('status-add', 'Participante adicionado com sucesso!');
    }

    
    public function destroy($id, $id_participant)
    {
        $client = Clients::find($id_participant);

        $client->id_group = null;
        $client->save();

        return redirect()->route('group-showing', ['id' => $id])
        ->with('status-delete', 'Participante removido com sucesso!');
    }
}
