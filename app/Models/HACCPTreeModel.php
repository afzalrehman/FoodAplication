<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class HACCPTreeModel extends Model
{
    protected $table = 'haccp03';

    static public function getAllRecord()
    {
        return self::where('person_perform', Auth::user()->username)
            ->orderBy('id', 'ASC')
            ->paginate(15);
    }
}
