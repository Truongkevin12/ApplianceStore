<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = ['name','image', 'status','price','discount','detail'];
    use HasFactory;
}
?>
