<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BabyNameMeaning;

class BabyNames extends Model{
    public $timestamps=false;
    protected $table='names';

    public function name() {
        return $this->hasMany('App\BabyNameMeaning');
    }
}
