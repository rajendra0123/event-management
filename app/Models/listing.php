<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class listing extends Model
{
    //
    protected $table = 'table_event';
    protected $fillable = ['event_name', 'description', 'contact', 'image'];
}
