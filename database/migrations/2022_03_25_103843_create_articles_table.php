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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();            
            $table->string('title');
            $table->string('authors');
            $table->text('abstract_mn');
            $table->text('abstract_en');
            $table->string('keywords', 1000);
            $table->text('full_article_link');
            $table->timestamp('received');
            $table->timestamp('review')->nullable()->default(null);
            $table->timestamp('approved')->nullable()->default(null);
            $table->integer('review_u_id')->nullable()->unsigned();
            $table->boolean('public_publish')->default(0);
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
        Schema::dropIfExists('articles');
    }
};
