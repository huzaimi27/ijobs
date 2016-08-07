<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    //
    public $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $fillable = [
        'email',
        'password',
    ];

    public function pengguna()
    {
        return $this->hasMany('pengguna');
    }
}
