<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    public $table = 'profil_perusahaan';
    protected $primaryKey = 'id_profiperusahaan';
    protected $fillable = [
        'id_profilperusahaan',
        'id_perusahaan',
        'alamat',
        'website',
        'j_badanusaha',
        'telepon',
        'fax',
        'logo',
        'keterangan',
    ];
}
