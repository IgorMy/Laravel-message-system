<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    private string $table_name = 'messages';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();
            $table->string($this->table_name.'_description',2000);
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('services_id');
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table_name);
    }
};
