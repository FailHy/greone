<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama', 'slug'];
    public $timestamps = true;

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}