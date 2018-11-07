<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    protected $table= 'children';
    protected $fillable = [
        'Child_Name', 'Child_Class', 'DOB','Contact','Email'
    ];
}
