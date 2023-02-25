<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });
        
        $data =  array(
            [
                'name' => 'ROLE_ADMIN',
            ],
            [
                'name' => 'ROLE_OUTBOUND',
            ],
            [
                'name' => 'ROLE_INBOUND',
            ],
            [
                'name' => 'ROLE_NEED_APPROVAL',
            ],
        );
        foreach ($data as $datum){
            $category = new Role(); //The Category is the model for your migration
            $category->name =$datum['name'];
            $category->save();
        }
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
};
