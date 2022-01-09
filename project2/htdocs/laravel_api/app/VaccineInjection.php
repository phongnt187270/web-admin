<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaccineInjection extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'vaccine_injection_id', 'manufacturer', 'dose', 'injected_location', 'injected_date', 'cargo_number'
    ];
    protected $primaryKey = 'vaccine_injection_id';
    protected $table = 'vaccine';
}
