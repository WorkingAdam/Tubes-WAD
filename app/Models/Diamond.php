<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diamond extends Model
{
    use HasFactory;
    protected $table = 'diamond';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'jumlah',
        'harga',
    ];
}
