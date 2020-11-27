<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{

    protected $table = 'settings';
    protected $fillable = ['phone', 'contact_us_ar', 'contact_us', 'email', 'location', 'logo_id', 'YouTube', 'Instegram', 'Twitter', 'Facebook', 'footer_text', 'footer_text_ar', 'logo_footer_id'];

    public function logo()
    {
        return $this->hasOne('App\Image', 'id', 'logo_id');
    }
    public function logoFooter()
    {
        return $this->hasOne('App\Image', 'id', 'logo_footer_id');
    }

    public function homeLogo()
    {
        return $this->hasOne('App\Image', 'id', 'homeLogo_id');
    }

    public static function rules($request)
    {
        $rules = [
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'location' => 'required|string|max:255',
            'YouTube' => 'required|string|max:255',
            'Instegram' => 'required|string|max:255',
            'Twitter' => 'required|string|max:255',
            'Facebook' => 'required|string|max:255',
            'contact_us' => 'required|string',
            'contact_us_ar' => 'required|string',
            'footer_text' => 'required|string',
            'footer_text_ar' => 'required|string',
        ];
        return $rules;
    }

    public static function credentials($request)
    {

        $credentials = [
            'phone' => $request->phone,
            'email' => $request->email,
            'location' => $request->location,
            'YouTube' => $request->YouTube,
            'Instegram' => $request->Instegram,
            'Twitter' => $request->Twitter,
            'Facebook' => $request->Facebook,
            'contact_us' => $request->contact_us,
            'contact_us_ar' => $request->contact_us_ar,
            'footer_text' => $request->footer_text,
            'footer_text_ar' => $request->footer_text_ar,
        ];
        if ($request->file('logo_id') != null) {
            $credentials['logo_id'] = self::file($request->file('logo_id'));
        }
        if ($request->file('logo_footer_id') != null) {
            $credentials['logo_footer_id'] = self::file($request->file('logo_footer_id'));
        }

        return $credentials;
    }

    public static function file($file)
    {

        $extension = $file->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $destinationPath = public_path() . '/img/logo/';
        $file->move($destinationPath, $fileName);
        $Image = Image::create(['name' => $fileName]);
        return $Image->id;
    }
}
