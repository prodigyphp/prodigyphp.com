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
            $table->foreignId('public_page_id')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('prodigy_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->json('content')->nullable();
            $table->boolean('is_global')->nullable();
            $table->string('global_title')->nullable();
            $table->timestamps();
        });

        Schema::create('prodigy_links', function (Blueprint $table) {
            $table->id();
            $table->integer('block_id');
            $table->morphs('prodigy_links');
            $table->integer('order')->default(1);
            $table->integer('column')->nullable();
            $table->timestamps();
        });

        Schema::create('prodigy_entries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('type')->index();
            $table->json('content')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('prodigy_taxonomies', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('title');
            $table->string('slug');
            $table->boolean('has_url')->nullable();
            $table->timestamps();
        });

        Schema::create('prodigy_entry_taxonomy', function (Blueprint $table) {
            $table->id();
            $table->integer('entry_id');
            $table->integer('taxonomy_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prodigy_pages');
        Schema::dropIfExists('prodigy_blocks');
        Schema::dropIfExists('prodigy_links');

        Schema::dropIfExists('prodigy_entries');
        Schema::dropIfExists('prodigy_taxonomy_type');
        Schema::dropIfExists('prodigy_entry_taxonomy');
    }
};
