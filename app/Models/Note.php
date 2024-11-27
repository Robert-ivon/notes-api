<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
     // Define the table name if it's different from the plural form of the model
     protected $table = 'notes';

     // Define the fillable attributes
     protected $fillable = [
         'title',
         'author',
         'body',
         'classification'
     ];
}
