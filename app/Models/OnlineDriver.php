<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineDriver extends Model
{
    use HasFactory;
    protected $table = 'online_drivers';
    
    protected $guarded = [];
}
