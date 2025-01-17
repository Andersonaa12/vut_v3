<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_entrie_types', function (Blueprint $table) {
            $table->id();
            $table->char('name', 150);
            $table->string('description')->nullable();
            $table->timestamps();
        });
        DB::table('master_entrie_types')->insert([
            ['id' => 1, 'name' => 'Interna', 'description' => 'Entrada radicada por personal interno'],
            ['id' => 2, 'name' => 'Externa', 'description' => 'Entrada radicada por ciudadan ó personal externo'],
            ['id' => 3, 'name' => 'Anonima', 'description' => 'Entrada radicada por ciudadano anonimo'],
        ]);

        Schema::create('master_entrie_status', function (Blueprint $table) {
            $table->id();
            $table->char('name', 150);
            $table->string('description')->nullable();
            $table->timestamps();
        });
        DB::table('master_entrie_status')->insert([
            ['id' => 1, 'name' => 'Proceso', 'description' => 'La entrada está actualmente en proceso de revisión o gestión.'],
            ['id' => 2, 'name' => 'Por Aprobar', 'description' => 'La entrada ha sido registrada y está pendiente de aprobación.'],
            ['id' => 3, 'name' => 'Por Firmar', 'description' => 'La entrada está lista y espera ser firmada.'],
            ['id' => 4, 'name' => 'Respondido', 'description' => 'Se ha emitido una respuesta a la entrada.'],
            ['id' => 5, 'name' => 'Salida', 'description' => 'La entrada se ha convertido en una salida o despacho.'],
            ['id' => 6, 'name' => 'Finalizado', 'description' => 'El proceso relacionado con esta entrada ha concluido.'],
        ]);
        
        Schema::create('master_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('master_entrie_type_id');
            $table->foreign('master_entrie_type_id')->references('id')->on('master_entrie_types')->onDelete('restrict');
            $table->unsignedBigInteger('master_entrie_status_id')->default(1);
            $table->foreign('master_entrie_status_id')->references('id')->on('master_entrie_status')->onDelete('restrict');
            
            
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->softDeletes();
        });
        Schema::create('master_entrie_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('master_entrie_id');
            $table->foreign('master_entrie_id')->references('id')->on('master_entries')->onDelete('cascade');

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->softDeletes();
        });
        Schema::create('master_entrie_assigned_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('master_entrie_id');
            $table->foreign('master_entrie_id')->references('id')->on('master_entries')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->softDeletes();
        });
        Schema::create('master_entries_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('master_entrie_id');
            $table->foreign('master_entrie_id')->references('id')->on('master_entries')->onDelete('cascade');


            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_entries_documents');
        Schema::dropIfExists('master_entrie_assigned_users');
        Schema::dropIfExists('master_entrie_details');
        Schema::dropIfExists('master_entries');
        Schema::dropIfExists('master_entrie_status');
        Schema::dropIfExists('master_entrie_types');
    }
}
