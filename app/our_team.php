<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class our_team extends Model
{
    //
    protected $table = 'our_team';
    protected $fillable = ['name', 'name_ar', 'postion', 'postion_ar', 'desc', 'desc_ar', 'image_id'];
    
    public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }

    public static function rules($request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'postion' => 'required|string|max:255',
            'postion_ar' => 'required|string|max:255',
            'desc' => 'required|string',
            'desc_ar' => 'required|string',
            
        ]; 
        return $rules;
    }

    public static function credentials($request)
    {
        
        $credentials = [
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'postion' => $request->postion,
            'postion_ar' => $request->postion_ar,
            'desc_ar' => $request->desc_ar,
            'desc' => $request->desc,
        ];
        if ($request->file('image_id') != null) {
            $credentials['image_id'] = self::file($request->file('image_id'));
        }
        return $credentials;
    }

    public static function file($file)
    {
        
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $destinationPath = public_path() . '/img/our_team/';
        $file->move($destinationPath, $fileName);
        $Image = Image::create(['name' => $fileName]);
        return $Image->id;
    }
    
}
