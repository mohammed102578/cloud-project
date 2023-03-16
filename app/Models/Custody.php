<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custody extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'custody_type','serial_number','received_date','date_of_eviction',
        'status','description'
    ];
    

}