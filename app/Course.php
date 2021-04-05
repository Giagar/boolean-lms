<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Chapter;

class Course extends Model
{
    public function chapters() {
        return $this->hasMany('App\Chapter');
    }
}
