<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'first_name',
        'last_name',
        'sur_name',
        'telephone',
        'telephone2',
        'email',
        'address1',
        'address2',
        'address3',
        'town',
        'postcode',
        'preferred_appointment_time',
        'source_type',
        'source_name',
        'windows',
        'doors',
        'conservatory',
        'porch',
        'fsg_sides',
        'other',
        'product_notes',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function leadNotes()
    {
        return $this->hasMany(LeadNote::class);
    }

    
}
