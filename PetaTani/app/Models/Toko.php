<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toko extends Model
{
    /** @use HasFactory<\Database\Factories\TokoFactory> */
    use HasFactory;

    protected $table = 'tokos';
    protected $primaryKey = 'ID_Toko';
    public $incrementing = false;
    protected $keyType = 'uuid';


    protected $fillable = [
        'ID_Toko',
        'ID_User',
        'Nama_Toko',
        'Daerah',
        'Alamat',
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
