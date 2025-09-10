<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'message', 'status'];
    protected $guarded = ['id'];
    protected $table = 'contacts';
    protected $primaryKey = 'id';

}
