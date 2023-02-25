<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outbounds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nim')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('fak')->nullable();
            $table->string('prodi')->nullable();
            $table->string('semester')->nullable();
            $table->bigInteger('program_id')->unsigned()->index()->nullable();
            $table->foreign('program_id')->references('id')->on('program_mbkms')->onDelete('cascade');
            $table->string('rekom_file')->nullable();
            $table->string('proposal_file')->nullable();
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
        Schema::dropIfExists('outbounds');
    }
};
