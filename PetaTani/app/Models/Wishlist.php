<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    
    use HasFactory;

    protected $table = 'wishlists';
    protected $primaryKey = 'ID_Wishlist';
    public $incrementing = false;
    protected $keyType = 'uuid';


    protected $fillable = [
        'ID_Wishlist',
        'ID_Barang',
        'ID_User',
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
