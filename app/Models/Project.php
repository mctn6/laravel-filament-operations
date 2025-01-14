<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'client_id',
        'deadline',
        'status',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
