<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.clients');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.register-client');
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
            'cpf' => $request->cpf,
            'cep' => $request->cep,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'telefone' => $request->telefone,
            'telefone_dois' => $request->telefone_dois,
            'nacionalidade' => $request->nacionalidade,
            'data_nascimento' => $request->data_nascimento,
            'uf' => $request->uf,
        ];
        
        Clients::create($values);

        return redirect()->route('clients-showing')->with('status-store', 'Novo cliente adicionado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $clients = Clients::all();
        return view('dashboard.show-clients', compact('clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Clients::find($id);

        $client->delete();

        return redirect()->route('clients-showing')->with('status-delete', 'Participante excluído com sucesso!');
    }
}
