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
        Schema::create('master_entrie_type_baseds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->char('name', 150);
            $table->string('description')->nullable();
            $table->timestamps();
        });
        DB::table('master_entrie_type_baseds')->insert([
            ['id' => 1, 'name' => 'Interna', 'description' => 'Entrada radicada por personal interno'],
            ['id' => 2, 'name' => 'Externa', 'description' => 'Entrada radicada por ciudadan ó personal externo'],
            ['id' => 3, 'name' => 'Anonima', 'description' => 'Entrada radicada por ciudadano anonimo'],
        ]);

        Schema::create('master_entrie_status', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

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
        Schema::create('master_type_outputs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('active')->default('1');

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
        });
        DB::table('master_type_outputs')->insert([
            ['id' => 1, 'name' => 'Personal', 'description' => 'Personalmente, por escrito o verbalmente en los espacios físicos destinados para el recibo de la solicitud'],
            ['id' => 2, 'name' => 'Correo', 'description' => 'Correo electrónico institucional destinado para el recibo de la solicitud'],
            ['id' => 3, 'name' => 'Telefonica', 'description' => 'Vía telefónica al número destinado para la atención de la solicitud'],
        ]);
        Schema::create('master_consecutive', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->unsignedBigInteger('master_entrie_type_based_id');
            $table->foreign('master_entrie_type_based_id')->references('id')->on('master_entrie_type_baseds')->onDelete('restrict');

            $table->integer('consecutive');
            $table->string('prefix', 30)->nullable();
            $table->string('year', 4)->nullable();

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            
        });

        Schema::create('master_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->unsignedBigInteger('master_entrie_type_based_id');
            $table->foreign('master_entrie_type_based_id')->references('id')->on('master_entrie_type_baseds')->onDelete('restrict');

            $table->unsignedBigInteger('master_entrie_status_id')->default(1);
            $table->foreign('master_entrie_status_id')->references('id')->on('master_entrie_status')->onDelete('restrict');

            $table->unsignedBigInteger('master_type_outputs_id');
            $table->foreign('master_type_outputs_id')->references('id')->on('master_type_outputs')->onDelete('restrict');

            $table->unsignedBigInteger('serie_id')->nullable();
            $table->foreign('serie_id')->references('id')->on('series')->onDelete('restrict');

            $table->unsignedBigInteger('subserie_id')->nullable();
            $table->foreign('subserie_id')->references('id')->on('subseries')->onDelete('restrict');

            $table->unsignedBigInteger('document_types_id')->nullable();
            $table->foreign('document_types_id')->references('id')->on('document_types')->onDelete('restrict');

            $table->boolean('active')->default('1');
            $table->string('code_unique', 12);
            $table->date('response_date')->nullable();
            $table->date('check_date')->nullable();
            $table->date('approve_date')->nullable();
            $table->text('description')->nullable();
            $table->integer('leaf')->nullable();
            $table->integer('annex')->nullable();

            $table->boolean('view')->default('0');
            $table->boolean('signed')->default('0');
            $table->boolean('authorizes')->default('0');

            $table->date('notification_date')->nullable();

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('master_entrie_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->unsignedBigInteger('master_entrie_id');
            $table->foreign('master_entrie_id')->references('id')->on('master_entries')->onDelete('cascade');

            $table->boolean('active')->default('1');

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('master_entrie_assigned_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->unsignedBigInteger('master_entrie_id');
            $table->foreign('master_entrie_id')->references('id')->on('master_entries')->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->boolean('active')->default('1');

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('master_entries_documents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->string('name');
            $table->text('description')->nullable();
            $table->string('path');
            $table->string('type');
            $table->unsignedBigInteger('size');
            $table->boolean('active')->default('1');

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('document_master_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->unsignedBigInteger('master_entrie_id');
            $table->foreign('master_entrie_id')->references('id')->on('master_entries')->onDelete('cascade');

            $table->unsignedBigInteger('master_entries_documents_id');
            $table->foreign('master_entries_documents_id')->references('id')->on('master_entries_documents')->onDelete('cascade');

            $table->timestamps();
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
        Schema::dropIfExists('document_master_entries');
        Schema::dropIfExists('master_entries_documents');
        Schema::dropIfExists('master_entrie_assigned_users');
        Schema::dropIfExists('master_entrie_details');
        Schema::dropIfExists('master_entries');
        Schema::dropIfExists('master_consecutive');
        Schema::dropIfExists('master_type_outputs');
        Schema::dropIfExists('master_entrie_status');
        Schema::dropIfExists('master_entrie_type_baseds');
    }
}
