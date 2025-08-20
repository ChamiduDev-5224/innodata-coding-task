<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    protected $table = "user_information";
    protected $fillable = ['name','email','tel_no','address','birthday'];
    public $timestamps = true;
}




