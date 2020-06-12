<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_clients extends Model
{
    //table name
    protected $table = 'project_clients';

    //Primary key
    protected $primaryKey = 'id';


    //false time stamps
    public $timestamps = false;
}
