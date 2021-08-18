@extends('top')
@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <form method="post" action="{{ route('client-update', ['id' => $client->id]) }}" class="grid lg:grid-cols-2 gap-6">
        @csrf
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="name" class="bg-white text-gray-600 px-1">Nome *</label>
                </p>
            </div>
            <p>
                <input id="name" name="name" value="{{ $client->name }}" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="cpf" class="bg-white text-gray-600 px-1">CPF *</label>
                </p>
            </div>
            <p>
                <input id="cpf" name="cpf" value="{{ $client->cpf }}" autocomplete="false" tabindex="0" type="text" value="{{ old('cpf') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="cep" class="bg-white text-gray-600 px-1">CEP *</label>
                </p>
            </div>
            <p>
                <input id="cep" name="cep" value="{{ $client->cep }}" autocomplete="false" tabindex="0" type="text" value="{{ old('cep') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="cidade" class="bg-white text-gray-600 px-1">Cidade *</label>
                </p>
            </div>
            <p>
                <input id="cidade" name="cidade" value="{{ $client->cidade }}" autocomplete="false" tabindex="0" type="text" value="{{ old('cidade') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="bairro" class="bg-white text-gray-600 px-1">Bairro *</label>
                </p>
            </div>
            <p>
                <input id="bairro" name="bairro" value="{{ $client->bairro }}" autocomplete="false" tabindex="0" type="text" value="{{ old('bairro') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="logradouro" class="bg-white text-gray-600 px-1">Logradouro *</label>
                </p>
            </div>
            <p>
                <input id="logradouro" name="logradouro" value="{{ $client->logradouro }}" autocomplete="false" tabindex="0" type="text" value="{{ old('logradouro') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="numero" class="bg-white text-gray-600 px-1">Número *</label>
                </p>
            </div>
            <p>
                <input id="numero" name="numero" value="{{ $client->numero }}" autocomplete="false" tabindex="0" type="text" value="{{ old('numero') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="complemento" class="bg-white text-gray-600 px-1">Complemento *</label>
                </p>
            </div>
            <p>
                <input id="complemento" name="complemento" value="{{ $client->complemento }}" autocomplete="false" tabindex="0" type="text" value="{{ old('complemento') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="telefone" class="bg-white text-gray-600 px-1">Telefone *</label>
                </p>
            </div>
            <p>
                <input id="telefone" name="telefone" value="{{ $client->telefone }}" autocomplete="false" tabindex="0" type="text" value="{{ old('telefone') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="telefone_dois" class="bg-white text-gray-600 px-1">Telefone Dois *</label>
                </p>
            </div>
            <p>
                <input id="telefone_dois" name="telefone_dois" value="{{ $client->telefone_dois }}" autocomplete="false" tabindex="0" type="text" value="{{ old('telefone_dois') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="nacionalidade" class="bg-white text-gray-600 px-1">Nacionalidade *</label>
                </p>
            </div>
            <p>
                <input id="nacionalidade" name="nacionalidade" value="{{ $client->nacionalidade }}" autocomplete="false" tabindex="0" type="text" value="{{ old('nacionalidade') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="data_nascimento" class="bg-white text-gray-600 px-1">Data de nascimento *</label>
                </p>
            </div>
            <p>
                <input id="data_nascimento" name="data_nascimento" value="{{ $client->data_nascimento }}" autocomplete="false" tabindex="0" type="date" value="{{ old('data_nascimento') }}" class="py-1 px-1 outline-none block h-full w-full">
            </p>
        </div>

        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="absolute tracking-wider uppercase text-xs">
                <p>
                    <label for="uf" class="bg-white text-gray-600">UF *</label>
                </p>
            </div>
            <p>
                <select name="uf" value="{{ $client->uf }}" class="outline-none block h-full w-full">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </p>
        </div>
        <br>
        <div class="border-t ">
            <button class="rounded px-3 text-gray-100 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                Salvar
            </button>
        </div>
    </form>


    <script type="text/javascript" src="http://localhost:8000/js/masks.js"></script>
</div>
@endsection