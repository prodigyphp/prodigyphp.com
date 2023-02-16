<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use ProdigyPHP\Prodigy\Models\Block;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prodigy_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->foreignId('public_page_id')->nullable()->constrained('prodigy_pages')->cascadeOnDelete();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('prodigy_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->json('content')->nullable();
            $table->json('meta')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('prodigy_blocks')->cascadeOnDelete();
            $table->boolean('is_global')->nullable();
            $table->string('global_title')->nullable();
            $table->timestamps();
        });

        Schema::create('prodigy_block_page', function (Blueprint $table) {
            $table->id();
            $table->integer('block_id');
            $table->integer('page_id');
            $table->integer('order')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prodigy_pages');
        Schema::dropIfExists('prodigy_blocks');
    }
};
