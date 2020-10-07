<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    //
    public static $rules = array(
        'My ニュース' => 'required',
        '名前' => 'required',
        '性別' => 'required',
        '趣味' => 'required',
        '自己紹介' => 'required',
        );
}
