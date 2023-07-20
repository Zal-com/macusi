<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class CsvData extends Model
{
    use CrudTrait;
    protected $table = 'csv_data';
    protected $fillable = ['csv_filename', 'csv_data'];
}
