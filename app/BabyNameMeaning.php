<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BabyNames;

class BabyNameMeaning extends Model{
    public $timestamps= false;
    protected $table = "meaning";
}
