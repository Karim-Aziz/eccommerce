<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $table = 'videos';
    protected $fillable = [
        'video',
        'name',
        'name_ar',
        'info_1',
        'info_2',
        'info_3',
        'info_4',
        'info_5',
        'info_1_ar',
        'info_2_ar',
        'info_3_ar',
        'info_4_ar',
        'info_5_ar',
        'desc',
        'desc_ar',
    ];

    public static function rules($request)
    {
        $rules = [
            'video' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'info_1' => 'required|string|max:255',
            'info_2' => 'required|string|max:255',
            'info_3' => 'required|string|max:255',
            'info_4' => 'required|string|max:255',
            'info_5' => 'required|string|max:255',
            'info_1_ar' => 'required|string|max:255',
            'info_2_ar' => 'required|string|max:255',
            'info_3_ar' => 'required|string|max:255',
            'info_4_ar' => 'required|string|max:255',
            'info_5_ar' => 'required|string|max:255',
            'desc' => 'required|string',
            'desc_ar' => 'required|string',

        ];
        return $rules;
    }

    public static function credentials($request)
    {

        $credentials = [
            'video'                 => $request->video,
            'name'                  => $request->name,
            'name_ar'               => $request->name_ar,
            'info_1'                => $request->info_1,
            'info_2'                => $request->info_2,
            'info_3'                => $request->info_3,
            'info_4'                => $request->info_4,
            'info_5'                => $request->info_5,
            'info_1_ar'             => $request->info_1_ar,
            'info_2_ar'             => $request->info_2_ar,
            'info_3_ar'             => $request->info_3_ar,
            'info_4_ar'             => $request->info_4_ar,
            'info_5_ar'             => $request->info_5_ar,
            'desc_ar'               => $request->desc_ar,
            'desc'                  => $request->desc,
        ];
        return $credentials;
    }


}
