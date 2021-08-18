<?php

namespace App\Http\Controllers;
use App\Models\Clients;

use Illuminate\Http\Request;

class EditClientController extends Controller
{
        public function edit ($id)
    {
        $client = Clients::find($id);
        return view('dashboard.edit-client', compact('client'));
    }

    public function update(Request $request, $id)
    {   
        $client = Clients::find($id);

        $client['name'] = $request->name;
        $client['cpf'] = $request->cpf;
        $client['cep'] = $request->cep;
        $client['cidade'] = $request->cidade;
        $client['bairro'] = $request->bairro;
        $client['logradouro'] = $request->logradouro;
        $client['numero'] = $request->numero;
        $client['complemento'] = $request->complemento;
        $client['telefone'] = $request->telefone;
        $client['telefone_dois'] = $request->telefone_dois;
        $client['nacionalidade'] = $request->nacionalidade;
        $client['data_nascimento'] = $request->data_nascimento;
        $client['uf'] = $request->uf;

        $client->save();

        return redirect()->route('client-showing', [$id])->with('status-update', 'Informações do participante alteradas com sucesso!');
    }
}
