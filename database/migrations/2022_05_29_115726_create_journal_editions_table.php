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
        Schema::create('journal_editions', function (Blueprint $table) {
            $table->id();
            $table->string('edition', 6);
            $table->string('number', 6);
            $table->boolean('status')->default(0);
            $table->string('url');
            $table->string('coverUrl');
            $table->text('content')->nullable();
            $table->integer('u_id');
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
        Schema::dropIfExists('journal_editions');
    }
};
