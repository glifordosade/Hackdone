<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keranjang extends Model
{
    /** @use HasFactory<\Database\Factories\KeranjangFactory> */
    use HasFactory;

    protected $table = 'keranjang';
    protected $primaryKey = 'ID_Keranjang';
    public $incrementing = false;
    protected $keyType = 'uuid';


    protected $fillable = [
        'ID_Keranjang',
        'ID_Barang',
        'ID_User',
        'Jumlah_Barang',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

}
