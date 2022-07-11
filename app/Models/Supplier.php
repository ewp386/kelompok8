<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $fillable = [
        'id_supplier', 'email', 'notelpon', 'alamat',
    ];
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
