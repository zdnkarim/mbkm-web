<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ProgramMbkm;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_mbkms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jenis_id')->unsigned()->index()->nullable();
            $table->foreign('jenis_id')->references('id')->on('jenis_mbkms')->onDelete('cascade');
            $table->string('program');
            $table->string('id_program');
            $table->string('sks');
            $table->string('desc');
            $table->timestamps();
            
        });

        $data =  array(
            [
                'jenis_id' => '1',
                'program' => 'Asistensi Mengajar di Satuan Pendidikan (Kampus Merdeka)',
                'id_program' => '5',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '2',
                'program' => 'Program Kewirausahaan Mahasiswa Indonesia (PKMI)',
                'id_program' => '4',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '2',
                'program' => 'Program Wirausaha Mahasiswa Vokasi (PWMV)',
                'id_program' => '28',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '2',
                'program' => 'Kegiatan Wirausaha',
                'id_program' => '3',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '3',
                'program' => 'Magang Bersertifikat (MSIB Kemendikbudristek)',
                'id_program' => '13',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '3',
                'program' => 'Magang Bersertifikat',
                'id_program' => '40',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '3',
                'program' => 'Magang Kementerian',
                'id_program' => '15',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '3',
                'program' => 'Magang Penelitian',
                'id_program' => '39',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '3',
                'program' => 'Magang Wirausaha',
                'id_program' => '38',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '3',
                'program' => 'Magang Industri',
                'id_program' => '36',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '3',
                'program' => 'Magang Rumah Sakit',
                'id_program' => '33',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '3',
                'program' => 'Magang Profesi',
                'id_program' => '41',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '4',
                'program' => 'Program Holistik Pembinaan Dan Pemberdayaan Desa (PHP2D)',
                'id_program' => '24',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '4',
                'program' => 'Proyek di desa',
                'id_program' => '8',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '5',
                'program' => 'Penelitian / riset',
                'id_program' => '6',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '6',
                'program' => 'Pertukaran Mahasiswa Merdeka Dalam Negeri (Skema 1)',
                'id_program' => '2',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '6',
                'program' => 'Pertukaran Mahasiswa Merdeka Dalam Negeri (Skema 2 8 SKS)',
                'id_program' => '19',
                'sks' => '8',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '6',
                'program' => 'Pertukaran Mahasiswa Merdeka Dalam Negeri (Skema 3)',
                'id_program' => '20',
                'sks' => '8',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '6',
                'program' => 'Pertukaran Mahasiswa Merdeka Dalam Negeri (Skema 2 16 SKS)',
                'id_program' => '44',
                'sks' => '16',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '6',
                'program' => 'SASRABAHU',
                'id_program' => '11',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '6',
                'program' => 'Permata Merdeka',
                'id_program' => '12',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '6',
                'program' => 'Merdeka Belajar untuk Semua (MBUS)',
                'id_program' => '42',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '6',
                'program' => 'Kredensial Mikro Mahasiswa Indonesia (KMMI)',
                'id_program' => '18',
                'sks' => '3',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '6',
                'program' => 'Pertukaran Mahasiswa (Kerjasama Program Studi)',
                'id_program' => '7',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '7',
                'program' => 'Indonesian International Student Mobility Awards (IISMA)',
                'id_program' => '16',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '7',
                'program' => 'AMERTA',
                'id_program' => '21',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '7',
                'program' => 'LINGUA',
                'id_program' => '22',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '7',
                'program' => 'Double / Joint Degree',
                'id_program' => '23',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '7',
                'program' => 'Kerjasama Program Studi',
                'id_program' => '43',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '7',
                'program' => 'Student Exchange',
                'id_program' => '25',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '8',
                'program' => 'Airlangga Inclusive Learning (AIL)',
                'id_program' => '30',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '8',
                'program' => 'Gerakan Ibu Hamil dan Anak Sehat (GELIAT)',
                'id_program' => '31',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '8',
                'program' => 'Gugus Tugas Covid-19',
                'id_program' => '32',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '8',
                'program' => 'Mercy Corps',
                'id_program' => '34',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '8',
                'program' => 'Palang Merah Indonesia',
                'id_program' => '35',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '8',
                'program' => 'Relawan Covid-19',
                'id_program' => '37',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '8',
                'program' => 'Proyek Kemanusiaan',
                'id_program' => '9',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '9',
                'program' => 'Studi Independen Bersertifikat (MSIB Kemendikbudristek)',
                'id_program' => '10',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '9',
                'program' => 'Program Bangkit (Kemdikbudristek - StartUp)',
                'id_program' => '27',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '9',
                'program' => 'Gerakan Inisiatif Listrik Tenaga Surya (GERILYA)',
                'id_program' => '29',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
            [
                'jenis_id' => '9',
                'program' => 'Studi / Proyek Independen',
                'id_program' => '26',
                'sks' => '20',
                'desc' => 'Outbound',
            ],
        );
        foreach ($data as $datum){
            $category = new ProgramMbkm(); //The Category is the model for your migration
            $category->jenis_id =$datum['jenis_id'];
            $category->program =$datum['program'];
            $category->id_program =$datum['id_program'];
            $category->sks =$datum['sks'];
            $category->desc =$datum['desc'];
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
        Schema::dropIfExists('program_mbkms');
    }
};
