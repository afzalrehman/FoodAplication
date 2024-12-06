<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HACCPTreeModel extends Model
{
    protected $table = 'haccp03';

    static public function getAllRecord()
    {
        // $return = self::select('blog.*')->get();
        $return = self::select('haccp03.*')->orderBy('id', 'ASC')->paginate(15);
        return $return;
    }

}
