<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class HACCPOneModel extends Model
{
    protected $table = 'haccp01';

    static public function getAllRecord()
    {
        return self::where('person_perform', Auth::user()->username)
            ->orderBy('id', 'ASC')
            ->paginate(15);
    }
}
