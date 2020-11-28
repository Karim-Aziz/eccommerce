<?php

namespace App;

use App\Image;
use App\places_images;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    //
    protected $table = 'places';
    protected $fillable = [
        'title',
        'title_ar',
        'sale',
        'price_after_discount_ar',
        'price_after_discount',
        'price_ar',
        'price',
        'desc',
        'desc_ar',
        'view',
        'page_id'
    ];

    public static function rules($request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'sale' => 'required|numeric',
            'price_after_discount_ar' => 'required|string|max:255',
            'price_after_discount' => 'required|string|max:255',
            'price_ar' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'desc' => 'required|string',
            'desc_ar' => 'required|string',
            'page_id' => 'required|integer',
            'images' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,gif,png,WebP',
        ];
        return $rules;
    }
    public static function rules_update($request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'sale' => 'required|numeric',
            'price_after_discount_ar' => 'required|string|max:255',
            'price_after_discount' => 'required|string|max:255',
            'price_ar' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'desc' => 'required|string',
            'desc_ar' => 'required|string',
            'page_id' => 'required|integer',
        ];
        if ($request->file('images') != null) {
            $rules2 = [
                'images' => 'required',
                'images.*' => 'image|mimes:jpg,jpeg,gif,png,WebP',
            ];
            $rules = array_merge($rules, $rules2);
        }
        return $rules;
    }


    public static function credentials($request)
    {
        $credentials = [
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'sale' => $request->sale,
            'price_after_discount_ar' => $request->price_after_discount_ar,
            'price_after_discount' => $request->price_after_discount,
            'price_ar' => $request->price_ar,
            'price' => $request->price,
            'desc_ar' => $request->desc_ar,
            'desc' => $request->desc,
            'page_id' => $request->page_id,
        ];
        return $credentials;
    }


    public function page()
    {
        return $this->hasOne('App\pages', 'id', 'page_id');
    }




    public static function files($files, $id)
    {
        $old_images = places_images::where('place_id', $id)->get();
        if ($old_images->count() > 0) {
            foreach ($old_images as $value) {
                places_images::destroy($value->id);
            }
        }
        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . rand(11111, 99999) . '.' . $extension;
            $destinationPath = public_path() . '/img/places_images/';
            $file->move($destinationPath, $fileName);
            $Image = Image::create(['name' => $fileName]);
            $data = ['place_id' => $id, 'image_id' => $Image->id];
            places_images::create($data);
        }
    }

    public function images()
    {
        return $this->belongsToMany('App\Image', 'places_images', 'place_id', 'image_id');
    }
}
