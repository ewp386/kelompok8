<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $fillable = [
        'id_retail', 'pembayaran', 'total_harga', 'biaya_pengiriman', 'status',
    ];
    public function retail()
    {
      return $this->belongsTo(Retail::class, 'id_retail');
    }
}
