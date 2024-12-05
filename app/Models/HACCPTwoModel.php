<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HACCPTwoModel extends Model
{
    protected $table = 'haccp02';

    static public function getAllRecord()
    {
        // $return = self::select('blog.*')->get();
        $return = self::select('haccp02.*')->orderBy('id', 'ASC')->paginate(15);
        return $return;
    }

}
