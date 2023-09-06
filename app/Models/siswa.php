<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    
    use HasFactory;
    protected $guarded=[];
    protected $table = 'siswas';
    protected $fillable = ['name', 'about', 'photo'];

    public function project(){
        return $this->hasMany(Project::class);
    }

    public function contact(){
        return $this->hasMany(Contact::class);
    }
}
