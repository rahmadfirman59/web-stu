<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioImage extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Kategori(){
        $this->belongsTo(Kategori::class);
    }

}
