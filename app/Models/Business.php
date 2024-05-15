<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slogan',
        'subcategory_id',
        'image',
        'logo',
        'location',
        'opening_time',
        'working_days',
        'contact',
        'description',
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    static function findOrFail($id){
        return self::find($id);
    }
}

