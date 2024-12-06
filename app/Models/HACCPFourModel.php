<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class HACCPFourModel extends Model
{
    protected $table = 'haccp04';

    static public function getAllRecord()
    {
        return self::where('person_perform', Auth::user()->username)
            ->orderBy('id', 'ASC')
            ->paginate(15);
    }
}
