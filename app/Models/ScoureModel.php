<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoureModel extends Model
{
    use HasFactory;
    protected $table = "scoure_models";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'scoure', 'created_at', 'updated_at'
    ];
}