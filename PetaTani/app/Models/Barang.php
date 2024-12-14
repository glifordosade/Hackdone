<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    /** @use HasFactory<\Database\Factories\BarangFactory> */
    use HasFactory;

    protected $table = 'Barangs';
    protected $primaryKey = 'ID_Barang';
    public $incrementing = false;
    protected $keyType = 'uuid';


    protected $fillable = [
        'ID_Barang',
        'ID_Toko',
        'ID_User',
        'Nama_Barang',
        'Gambar_Barang',
        'Harga',
        'Deskripsi',
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
