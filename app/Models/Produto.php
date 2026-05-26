<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //define os compos em massa
   protected $fillsble = ['nome', 'preco', 'estoque'];
}
