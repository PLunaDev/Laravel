<?php

//App\Models\Universite.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;

class Universite extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}

