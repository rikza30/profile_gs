<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    protected $fillable = [
        'Name', 'Email', 'NoHP', 'Pesan'
    ];
}
