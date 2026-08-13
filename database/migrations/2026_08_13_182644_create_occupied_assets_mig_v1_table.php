<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupiedAssetsMigV1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupied_assets_mig_v1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_code')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('client_name')->nullable();
            $table->string('mouza_name')->nullable();
            $table->string('asset_name')->nullable();
            $table->string('asset_type')->nullable();
            $table->string('rental_type')->nullable();
            $table->date('started_at')->nullable();
            $table->date('ended_at')->nullable();
            $table->string('khatian_no')->nullable();
            $table->string('dag_no')->nullable();
            $table->string('payment_term')->nullable();
            $table->string('periodical_term')->nullable();
            $table->text('remarks')->nullable();
            $table->decimal('unit_acr', 15, 4)->nullable();
            $table->decimal('unit_sft', 15, 4)->nullable();
            $table->string('rental_term')->nullable();
            $table->decimal('unit_rate_amount', 20, 4)->nullable();
            $table->decimal('fixed_rent_amount', 20, 4)->nullable();
            $table->decimal('onetime_fee', 20, 4)->nullable();
            $table->decimal('advance_received_amount', 20, 4)->nullable();
            $table->decimal('received_amount', 20, 4)->nullable();
            $table->decimal('due_amount', 20, 4)->nullable();
            $table->decimal('fine_amount', 20, 4)->nullable();
            $table->decimal('vat_percent', 20, 4)->nullable();
            $table->decimal('received_amount_vat', 20, 4)->nullable();
            $table->decimal('tax_percent', 20, 4)->nullable();
            $table->string('payment_method')->nullable();
            $table->string('challan_no')->nullable();
            $table->string('po_or_cheque_no')->nullable();
            $table->date('rate_active_from')->nullable();
            $table->date('rate_active_to')->nullable();
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
        Schema::dropIfExists('occupied_assets_mig_v1');
    }
}
