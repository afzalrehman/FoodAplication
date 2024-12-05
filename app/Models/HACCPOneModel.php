<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HACCPOneModel extends Model
{
    protected $table = 'haccp01';

    static public function getAllRecord()
    {
        // $return = self::select('blog.*')->get();
        $return = self::select('haccp01.*')->orderBy('id', 'ASC')->paginate(15);
        return $return;
    }


}
