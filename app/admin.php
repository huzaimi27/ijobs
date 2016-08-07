<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public $table = 'admin';
//    protected $primaryKey = 'id_toko';
    protected $fillable = [
        'username',
        'password',
    ];

    public function produk()
    {
        return $this->hasMany('admin');
    }
}
