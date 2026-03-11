<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // ganti dengan nama tabel level
    protected $primaryKey = 'level_id';
    protected $fillable = ['level_name']; // sesuaikan kolom tabel
}