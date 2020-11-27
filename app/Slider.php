<?php

namespace App;

use App\slider_images;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $table = 'sliders';
    protected $fillable = [];

    public static function rules($request)
    {
        $rules = [
            'images' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,gif,png,WebP',
        ];
        return $rules;
    }
    public static function rules_update($request)
    {
        $rules = [];
        if ($request->file('images') != null) {
            $rules = [
                'images' => 'required',
                'images.*' => 'image|mimes:jpg,jpeg,gif,png,WebP',
            ];
        }
        return $rules;
    }


    public static function files($files, $id)
    {
        $old_images = slider_images::where('slider_id', $id)->get();
        if ($old_images->count() > 0) {
            foreach ($old_images as $value) {
                slider_images::destroy($value->id);
            }
        }
        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . rand(11111, 99999) . '.' . $extension;
            $destinationPath = public_path() . '/img/slider_images/';
            $file->move($destinationPath, $fileName);
            $Image = Image::create(['name' => $fileName]);
            $data = ['slider_id' => $id, 'image_id' => $Image->id];
            slider_images::create($data);
        }
    }

    public function images()
    {
        return $this->belongsToMany('App\Image', 'slider_images', 'slider_id', 'image_id');
    }

}
