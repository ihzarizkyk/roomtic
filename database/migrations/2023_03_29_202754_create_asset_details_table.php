<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("asset_id")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->text("img")->nullable();
            $table->text("desc")->nullable();
            $table->enum("approval",["pending","proccess","approve"]);
            $table->dateTime("startBook")->nullable();
            $table->dateTime("endBook")->nullable();
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
        Schema::dropIfExists('asset_details');
    }
}