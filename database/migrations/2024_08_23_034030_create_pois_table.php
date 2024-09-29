<?php
use App\Models\Poi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pois', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        $palsu = \Faker\Factory::create('id-ID');

        $jenis = ['spesial spot', 'tempat makan', 'ATM', 'SPBU'];

        for($i=0; $i<=20;$i++){
            Poi::create([
                "nama"=>$palsu->name,
                "jenis"=>$jenis[rand(0,3)],
                "deskripsi"=>$palsu->sentences(5,true)
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pois');
    }
};
