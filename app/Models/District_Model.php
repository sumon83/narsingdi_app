<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class District_Model extends Model
{
    /**
     * Table name for inserting Districts
     */
    protected $table = "nar_districts";

    /**
     * 
     */
    public function getCreatedAtAttribute($date)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    /**
     * 
     */
    public function getUpdatedAtAttribute($date)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }
}
