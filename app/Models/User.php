<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Request;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public static function superadmin($request)
    {
        $return = self::select('users.*')->where('role', '!=', 0)->orderBy('id', 'DESC');
        
        // Check if the 'role' parameter exists in the request
        if (!empty($request->has('role')) && $request->role != 'all') {
         $return =   $return->where('role', $request->role);
        }
        elseif (!empty($request->get('search')) ) {
         $return =   $return->where('users.name', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.username', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.phone', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.employeeID', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.email', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.role', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.status', 'like', '%' . $request->get('search') .'%');
        }
        
        return $return->where('role', '!=', 0)->paginate(10);
    }
    public static function UserData($request)
    {
        $return = self::select('users.*')->where('role', '!=', 0)->where('role', '!=', 1)->orderBy('id', 'DESC');
        
        // Check if the 'role' parameter exists in the request
        if (!empty($request->has('role')) && $request->role != 'all') {
         $return =   $return->where('role', $request->role);
        }
        elseif (!empty($request->get('search')) ) {
         $return =   $return->where('users.name', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.username', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.phone', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.employeeID', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.email', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.role', 'like', '%' . $request->get('search') .'%')
         ->orWhere('users.status', 'like', '%' . $request->get('search') .'%');
        }
        
        return $return->where('role', '!=', 0)->where('role', '!=', 1)->paginate(10);
    }
    
    

}
