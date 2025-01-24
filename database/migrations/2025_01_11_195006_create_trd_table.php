<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->string('name');
            $table->text('description')->nullable();

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->string('unique_code');
            $table->string('name');
            $table->text('description')->nullable();

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('dependency_series', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->foreignId('dependency_id')->constrained('dependencies')->onDelete('cascade');
            $table->foreignId('series_id')->constrained('series')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('subserie_supports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');
            
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('subserie_supports')->insert([
            ['id' => 1, 'brand_id' => '1', 'name' => 'FISICO'],
            ['id' => 2, 'brand_id' => '1', 'name' => 'ELECTRONICO'],
            ['id' => 3, 'brand_id' => '1', 'name' => 'FISICO-ELECTRONICO'],
        ]);

        Schema::create('subserie_final_dispositions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');
            
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('subserie_final_dispositions')->insert([
            ['id' => 1, 'brand_id' => '1', 'name' => 'CONSERVACION TOTAL'],
            ['id' => 2, 'brand_id' => '1', 'name' => 'ELIMINACION'],
            ['id' => 3, 'brand_id' => '1', 'name' => 'SELECTIVA'],
            ['id' => 4, 'brand_id' => '1', 'name' => 'MICROFILMACION/DIGITAL'],
        ]);

        Schema::create('subseries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->unsignedBigInteger('subserie_support_id')->nullable();
            $table->foreign('subserie_support_id')->references('id')->on('subserie_supports')->onDelete('cascade');

            $table->string('unique_code');
            $table->text('description')->nullable();

            $table->integer('management_file_time');
            $table->integer('central_file_time');

            $table->unsignedBigInteger('subserie_final_disposition_id')->nullable();
            $table->foreign('subserie_final_disposition_id')->references('id')->on('subserie_final_dispositions')->onDelete('restrict');
            
            $table->text('observations')->nullable();
            $table->boolean('active')->default('1');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('document_response_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('document_response_types')->insert([
            ['id' => 1, 'brand_id' => '1', 'name' => 'Horas'],
            ['id' => 2, 'brand_id' => '1', 'name' => 'Dias'],
            ['id' => 3, 'brand_id' => '1', 'name' => 'Semanas'],
            ['id' => 4, 'brand_id' => '1', 'name' => 'Meses'],
        ]);

        Schema::create('document_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->string('route');
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('priority', ['1', '2', '3', '4'])->default('1')->nullable();

            $table->unsignedBigInteger('document_response_types_id')->nullable();
            $table->foreign('document_response_types_id')->references('id')->on('document_response_types')->onDelete('restrict');

            $table->integer('time_response')->nullable();
            $table->boolean('allow_date_extension')->default(false);
            $table->boolean('active')->default('1');
            $table->boolean('physical_response')->default(true);
            $table->boolean('locked')->default(false);

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('document_series_subseries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->foreignId('document_type_id')->constrained('document_types')->onDelete('cascade');
            $table->foreignId('series_id')->nullable()->constrained('series')->onDelete('cascade');
            $table->foreignId('subseries_id')->nullable()->constrained('subseries')->onDelete('cascade');
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
        Schema::dropIfExists('document_series_subseries');
        Schema::dropIfExists('document_types');
        Schema::dropIfExists('document_response_types');
        Schema::dropIfExists('subseries');
        Schema::dropIfExists('subserie_final_dispositions');
        Schema::dropIfExists('subserie_supports');
        Schema::dropIfExists('dependency_series');
        Schema::dropIfExists('series');
        Schema::dropIfExists('dependencies');
    }
}
