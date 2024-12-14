<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pangan extends Model
{
    use HasFactory;

    protected $table = 'pangans';
    protected $primaryKey = 'ID_Pangan';
    public $incrementing = false;
    protected $keyType = 'uuid';


    protected $fillable = [
        'ID_Pangan',
        'ID_Provinsi',
        'Jenis_Pangan',
        'Jumlah',
        'Tahun',
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


    public function Provinsi(){
        return $this->belongsTo(Pangan::class);
    }
}
