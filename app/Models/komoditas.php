<?php

namespace App\Models;

use App\Models\produksi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komoditas extends Model
{
    protected $keyType = 'string';
    // public $incrementing = false;

    public function produksi()
    {
        return $this->HasMany(produksi::class, 'komoditas_id', 'id');
    }
    use HasFactory;
    protected $table = 'komoditas';
    protected $fillable = ['id', 'komoditas_nama'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = self::generateId();
            }
        });
    }

    public static function generateId()
{
    $latest = self::latest('id')->first();

    if (!$latest) {
        return 'K001';
    }

    $lastId = $latest->id;
    $lastNumber = (int) substr($lastId, 1);
    $newNumber = $lastNumber + 1;

    return 'K' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
}
}
