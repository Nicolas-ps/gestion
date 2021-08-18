<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->string('name');
            $table->string('cpf', 14);
            $table->string('cep', 14);
            $table->string('uf', 2);
            $table->text('cidade');
            $table->text('bairro');
            $table->text('logradouro');
            $table->text('numero');
            $table->text('complemento');
            $table->string('telefone', 45);
            $table->string('telefone_dois', 45);
            $table->string('nacionalidade', 45);
            $table->date('data_nascimento');
            $table->timestamps();

            //Chave estrangeira
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
