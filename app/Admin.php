<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as Authen;

class Admin extends Model implements Authen
{
    //
    use Authenticatable;
}
