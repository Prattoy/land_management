<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableAsset extends Model
{
    protected $table = 'available_assets_mig_v1';

    protected $fillable = [
        'mouza',
        'asset',
        'asset_type',
        'dag_no',
        'acre',
        'sq_ft',
        'status',
    ];
}
