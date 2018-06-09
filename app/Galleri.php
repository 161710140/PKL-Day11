<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galleri extends Model
{
    protected $fillable = ['nama','file_gambar'];

    public $timestamps = true;

}
