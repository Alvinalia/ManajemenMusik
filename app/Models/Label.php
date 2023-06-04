<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{

    use HasFactory;

    protected $fillabel = [
        'id',
        'nama',
        'alamat',
        'penyayi_id',
    ];
    protected $table = "label";
    protected $tamestamps = false;

    public function Penyanyi(){
        return $this->hasOne(Penyanyi::class, "id", "penyanyi_id");
    }
    public function Musik(){
        return $this->hasMany(Musik::class, "Label_id", "id");
    }

}
