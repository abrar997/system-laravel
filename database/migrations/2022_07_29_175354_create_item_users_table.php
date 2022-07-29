<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); #make relation with categ table
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade'); #if u delete categoriy item already will delete
            $table->unsignedBigInteger('item_id')->nullable(); #make relation with categ table
            $table->foreign('item_id')->references('id')->on('items')
                ->onDelete('cascade')->onUpdate('cascade'); #if u delete categoriy item already will delete
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
        Schema::dropIfExists('item_users');
    }
}
