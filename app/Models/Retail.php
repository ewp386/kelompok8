<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retail extends Model
{
    use HasFactory;
    protected $table = 'retails';
    protected $fillable = [
        'id_retail', 'email', 'notelpon', 'alamat',
    ];
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_retail');
    }
}
