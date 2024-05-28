<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identidade extends Model
{
   // use HasFactory;
   protected $table = 'identidade';
   protected $primarykey = 'id';
   protected $keytype = 'int';
   public $incrementing = true;
   public $timestamps = true;

   protected $fillable = [
      'naran',
      'nre',
      'hela_fatin',
      'num_kontaktu'
   ];

}
