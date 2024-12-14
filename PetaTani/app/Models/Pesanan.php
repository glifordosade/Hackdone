<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    /** @use HasFactory<\Database\Factories\PesananFactory> */
    use HasFactory;

    protected $table = 'Pesanans';
    protected $primaryKey = 'ID_Pesanan';
    public $incrementing = false;
    protected $keyType = 'uuid';


    protected $fillable = [
        'ID_Pesanan',
        'ID_User',
        'Jumlah_Pesanan',
        'Barang',
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
