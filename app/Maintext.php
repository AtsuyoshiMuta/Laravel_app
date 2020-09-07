<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintext extends Model
{
    protected $table = 'maintext';
    protected $guarded = ['id'];

    public static function searchQuery($query){
        $query = explode(" ", str_replace("　", " ", $query)); //全角スペースを半角スペースに置き換えてから、半角スペースで分割。
        $result = collect([]);
        foreach ($query as $word) {
            $contents = self::where('title', 'like', "%$word%")
                ->orWhere('maintext', 'like', "%$word%")
                ->get();
            $result = $result->merge($contents);
        }
        return $result->unique('id')->all();
    }
}
