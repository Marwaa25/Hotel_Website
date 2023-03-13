<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->timestamps();
        });

        // Move existing images to storage
        $images = DB::table('old_images')->get();

        foreach ($images as $image) {
            $oldPath = '/path/to/old/images/' . $image->filename;
            $newPath = '/path/to/new/storage/' . $image->filename;

            Storage::move($oldPath, $newPath);

            DB::table('images')->insert([
                'filename' => $image->filename,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        Schema::drop('old_images');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('old_images', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->timestamps();
        });

        // Move images back to old location
        $images = DB::table('images')->get();

        foreach ($images as $image) {
            $oldPath = '/path/to/old/images/' . $image->filename;
            $newPath = '/path/to/new/storage/' . $image->filename;

            Storage::move($newPath, $oldPath);

            DB::table('old_images')->insert([
                'filename' => $image->filename,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        Schema::drop('images');
    }
};


