<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintext extends Model
{
    public function maintextToVote()
    {
        return $this->hasMany(Vote::class);
    }
}
