<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyanyi extends Model
{
    use HasFactory;

    protected $table = "penyanyi";

    public function Label(){
        return $this->belongsto(Label::class, "penyanyi_id", "id");
    }
}
