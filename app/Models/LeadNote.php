<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadNote extends Model
{

    protected $table = 'lead_notes';
   
    protected $fillable = ['id', 'user_id', 'lead_id', 'note'];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
    
    // public function leadUser()
    // {
    //     return $this->hasManyThrough('App\Models\LeadNote' , 'App\Models\User');
    // }
    
}
