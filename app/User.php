<?php

namespace App;

use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'image_id', 'role', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function rules($request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|numeric',
        ];
        return $rules;
    }

    public static function rules_update($request, $id)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'. $id,
            'password' => 'nullable|string|min:6'
        ];
        if ($request->role != null) {
            $user = Auth::user();
            if ($user && $user->role == 1) {
                $rules+=[
                    'role' => 'required|numeric'
                ];
            }
        }

        return $rules;
    }

    public static function credentials($request)
    {

        $credentials = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
        if ($request->role != null) {
            $user = Auth::user();
            if ($user && $user->role == 1) {
                $credentials+=[
                    'role' => $request->role
                ];
            }
        }
        if ($request->password != null) {
            $credentials+=[
                'password' => bcrypt($request->password)
            ];
        }
        if ($request->file('img') != null) {
            $credentials['image_id'] = self::file($request->file('img'));
        }
        return $credentials;
    }



    public static function file($file)
    {

        $extension = $file->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $destinationPath = public_path() . '/img/users/';
        $file->move($destinationPath, $fileName);
        $Image = Image::create(['name' => $fileName]);
        return $Image->id;
    }

    public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }

    public function Favorites()
    {
        return $this->belongsToMany('App\places', 'favorites', 'user_id', 'place_id');
    }
    public function Carts()
    {
        return $this->belongsToMany('App\places', 'carts', 'user_id', 'place_id');
    }
}
