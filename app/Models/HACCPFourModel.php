<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HACCPFourModel extends Model
{
    protected $table = 'haccp04';

    static public function getAllRecord()
    {
        // $return = self::select('blog.*')->get();
        $return = self::select('haccp04.*')->orderBy('id', 'ASC')->paginate(15);
        return $return;
    }
}
