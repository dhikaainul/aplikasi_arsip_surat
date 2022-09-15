<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    public $table = 'arsip';
    protected $fillable = ['no_surat', 'kategori', 'judul', 'pdf'];
}
