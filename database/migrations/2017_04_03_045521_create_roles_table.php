<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string("role_name_th");
            $table->string("role_name_eng");
            $table->string("role_desc");
            $table->jsonb("role_actions")->nullable();
            $table->boolean("is_active");
            $table->softDeletes();
            $table->timestamps();
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
