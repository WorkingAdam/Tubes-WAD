<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'code',
        'id_user',
        'id_layanan',
        'harga_order',
        'diamond',
        'nickname',
        'status_order',
        'keterangan',
    ];
}
