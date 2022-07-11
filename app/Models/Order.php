<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'id_supplier', 'tanggal', 'status', 'jumlah'
    ];
    public function supplier()
    {
      return $this->belongsTo(Supplier::class, 'id_supplier');
    }
}
