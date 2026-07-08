<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complains extends Model
{
    protected $table = 'complains';

    protected $fillable = [
        'user_id',
        'category_id',
        'no_aduan',
        'judul',
        'keterangan',
        'image',
        'lokasi',
        'tanggal_aduan',
        'status',
    ];

    public function response(){
        return $this->hasOne(Response::class, 'complain_id', 'id');
    }

    public function kate(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function namaPengadu(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
