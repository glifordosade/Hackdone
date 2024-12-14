<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsis';
    protected $primaryKey = 'ID_Provinsi';
    public $incrementing = false;
    protected $keyType = 'uuid';


    protected $fillable = [
        'ID_Provinsi',
        'Provinsi',
    ];

    public function Pangan(){
        return $this->hasMany(Pangan::class);
    }
}
