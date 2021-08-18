<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Groups;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.groups');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.register-group');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $values = [
            'name' => $request->name,
            'descricao' => $request->descricao
        ];
        
        Groups::create($values);

        return redirect()->route('groups-showing')->with('status-store', 'Novo grupo adicionado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Groups::find($id);

        $group->delete();

        return redirect()->route('groups-showing')->with('status-delete', 'Grupo deletado com sucesso!');
    }

}
