<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'table_logs';
    protected $fillable = ['user_id', 'url', 'body']; 
}
