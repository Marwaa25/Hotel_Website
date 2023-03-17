<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

return new class extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('alt');
            $table->unsignedBigInteger('chambre_id');
            $table->timestamps();

            $table->foreign('chambre_id')
                  ->references('id')
                  ->on('chambre')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::table('images', function (Blueprint $table) {
    //         $table->string('url');
    //     });
    //     Schema::create('images', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('filename');
    //         $table->string('path');
    //         $table->timestamps();
    //     });

    //     $path = 'images/1678707929132.jpg';
    //     $filename = basename($path);

    //     Storage::move($path, 'public/' . $filename);

    //     DB::table('images')->insert([
    //         'filename' => $filename,
    //         'path' => 'public/' . $filename,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     $image = DB::table('images')->where('filename', '1678707929132.jpg')->first();

    //     Storage::delete($image->path);

    //     DB::table('images')->where('filename', $image->filename)->delete();

    //     Schema::drop('images');
    // }
};


