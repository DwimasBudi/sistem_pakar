<?php

namespace App\Models;

use App\Models\BasisAturan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecanduan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function rule()
    {
        return $this->hasMany(BasisAturan::class);
    }
}
