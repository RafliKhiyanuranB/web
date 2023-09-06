<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function contacttype(){
        return $this->belongsTo(Contact_Type::class);
    }
}

