<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produksi extends Model
{
    public function komoditas()
    {

        return $this->BelongsTo(komoditas::class, 'komoditas_id', 'id');
    }

    use HasFactory;
    protected $table = 'produksi';
    protected $fillable = ['id', 'komoditas_id', 'jumlah_produksi','tanggal_produksi'];
}
