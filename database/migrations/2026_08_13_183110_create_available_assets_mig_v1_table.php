<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableAssetsMigV1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_assets_mig_v1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mouza')->nullable();
            $table->text('asset')->nullable();
            $table->string('asset_type')->nullable();
            $table->string('dag_no')->nullable();
            $table->decimal('acre', 15, 4)->nullable();
            $table->decimal('sq_ft', 15, 4)->nullable();
            $table->char('status', 1)->default('A');
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
        Schema::dropIfExists('available_assets_mig_v1');
    }
}
