<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\JenisMbkm;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_mbkms', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->timestamps();
        });

        $data =  array(
            ['jenis' => 'Asistensi Mengajar di Satuan Pendidikan (Kampus Merdeka)',],
            ['jenis' => 'Kegiatan Wirausaha (Kampus Merdeka)',],
            ['jenis' => 'Magang/Praktik Kerja (Kampus Merdeka)',],
            ['jenis' => 'Membangun Desa/Kuliah Kerja Nyata Tematik (Kampus Merdeka)',],
            ['jenis' => 'Penelitian/Riset (Kampus Merdeka)',],
            ['jenis' => 'Pertukaran Pelajar (Dalam Negeri)',],
            ['jenis' => 'Pertukaran Pelajar (Luar Negeri)',],
            ['jenis' => 'Proyek Kemanusiaan (Kampus Merdeka)',],
            ['jenis' => 'Studi/Proyek Independen (Kampus Merdeka)',],
        );
        foreach ($data as $datum){
            $category = new JenisMbkm(); //The Category is the model for your migration
            $category->jenis =$datum['jenis'];
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
        Schema::dropIfExists('jenis_mbkms');
    }
};
