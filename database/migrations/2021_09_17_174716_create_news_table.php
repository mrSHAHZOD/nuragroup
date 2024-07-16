<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('title_ens')->nullable();
            $table->string('title_rus')->nullable();
            $table->string('title_uzs')->nullable();
            $table->text('content_ens')->nullable();
            $table->text('content_rus')->nullable();
            $table->text('content_uzs')->nullable();
            $table->text('body_ens')->nullable();
            $table->text('body_rus')->nullable();
            $table->text('body_uzs')->nullable();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
