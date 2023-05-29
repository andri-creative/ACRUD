<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Andri extends Model
{
    use HasFactory;

    protected $table = 'andri';
    protected $fillable = [
        'nama', 'kelas', 'alamat', 'nbi'
    ];
}
