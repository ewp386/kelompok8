<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = [
        'name', 'harga', 'id_gudang', 'id_supplier', 'kategori', 'notelpon',
    ];
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
    public function gudang()
    {
        return $this->belongsTo(Gudang::class, 'id_gudang');
    }
}
