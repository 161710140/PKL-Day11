<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panduan extends Model
{
    protected $fillable = ['judul','deskripsi'];

    public $timestamps = true;

}
