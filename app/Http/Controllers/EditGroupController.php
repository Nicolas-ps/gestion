<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;

class EditGroupController extends Controller
{
    public function edit ($id)
    {
        $group = Groups::find($id);
        return view('dashboard.edit-group', compact('group'));
    }

    public function update(Request $request, $id)
    {   
        $group = Groups::find($id);

        $group['name'] = $request->name;
        $group['descricao'] = $request->descricao;

        $group->save();

        return redirect()->route('group-showing', [$id])->with('status-update', 'Informações do grupo alteradas com sucesso!');
    }
}
