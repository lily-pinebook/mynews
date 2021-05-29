<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');

    //
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );

    // 以下を追記
    // Profile Modelに関連付けを行う
    public function profile_histories()
    {
      return $this->hasMany('App\ProfileHistory');

    }
}
