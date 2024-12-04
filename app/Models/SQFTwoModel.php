<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SQFTwoModel extends Model
{
    protected $table = 'sqf02';

    static public function getAllRecord()
    {
        // $return = self::select('blog.*')->get();
        $return = self::select('sqf02.*')->orderBy('id', 'ASC')->paginate(15);
        return $return;
    }

}
