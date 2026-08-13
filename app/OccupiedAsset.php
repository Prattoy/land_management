<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OccupiedAsset extends Model
{
    protected $table = 'occupied_assets_mig_v1';

    protected $fillable = [
        'employee_code',
        'employee_name',
        'client_name',
        'mouza_name',
        'asset_name',
        'asset_type',
        'rental_type',
        'started_at',
        'ended_at',
        'khatian_no',
        'dag_no',
        'payment_term',
        'periodical_term',
        'remarks',
        'unit_acr',
        'unit_sft',
        'rental_term',
        'unit_rate_amount',
        'fixed_rent_amount',
        'onetime_fee',
        'advance_received_amount',
        'received_amount',
        'due_amount',
        'fine_amount',
        'vat_percent',
        'received_amount_vat',
        'tax_percent',
        'payment_method',
        'challan_no',
        'po_or_cheque_no',
        'rate_active_from',
        'rate_active_to',
        'status',
    ];
}
