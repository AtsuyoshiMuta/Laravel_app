<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;

class Vote extends Model
{
    protected $table = 'vote';
    protected $guarded = ['id'];
}
