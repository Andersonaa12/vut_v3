<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function(Blueprint $table){
            $table->id();

            $table->char('name', 150);
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->char('ip', 20);
            $table->char('public_url', 150);

            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('brands')->insert([
            ['id' => 1, 'name' => 'prueba sistemas', 'description' => 'Plataforma de prueba', 'ip' => '127.0.0.1', 'public_url' => 'http://127.0.0.1:8000/'],
          ]);

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(1);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');

            $table->string('license')->unique();

            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('first_surname')->nullable();
            $table->string('second_surname')->nullable();
            $table->date('date_of_birth');
            $table->string('phone_number', 20)->nullable();
            $table->string('telephone_extension', 5)->nullable();
            $table->string('cell_number', 20)->nullable();

            $table->string('profile_photo')->nullable();
            $table->string('signature_file')->nullable(); 
            
            $table->string('web_site')->nullable();

            $table->boolean('active')->default(1);
            $table->string('email')->unique();
            $table->string('email_alternative')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_name')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('brands');
    }
}
