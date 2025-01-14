<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'company'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
