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
            $table->dateTime('received');
            $table->dateTime('revised');
            $table->dateTime('approved');
            $table->integer('revised_u_id');
            $table->integer('u_id');
            $table->boolean('public_publish');
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
