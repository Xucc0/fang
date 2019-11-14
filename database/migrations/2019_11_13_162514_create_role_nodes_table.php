<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('role_id')->default(0)->comment('角色ID');
            $table->unsignedBigInteger('node_id')->default(0)->comment('节点ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_nodes');
    }
}
