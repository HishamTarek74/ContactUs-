<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact';
    protected $primaryKey =  'id';
 protected $fillable = ['id', 'name', 'email', 'message'];
}
