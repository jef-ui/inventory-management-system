<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [

    'article',
    'description',
    'property_number',
    'serial_number',
    'model_number',
    'unit_of_measure',
    'qty_property_card',
    'qty_physical_count',
    'acquisition_date',
    'unit_value',
    'person_accountable',
    'shortage',
    'category',
    'remarks',
    'file_path',
    'file_path1',
    'file_path2',
    'file_path3',
    'file_path4',
        

    ];

}
