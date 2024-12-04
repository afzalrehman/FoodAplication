<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SQFTreeModel extends Model
{
    protected $table = 'sqf03';

    static public function getAllRecord()
    {
        // $return = self::select('blog.*')->get();
        $return = self::select('sqf03.*')->orderBy('id', 'ASC')->paginate(15);
        return $return;
    }

}
