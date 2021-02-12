<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

 protected $table='adverts';

 protected  $fillable=['title','description','cost','categoryId','userId','image','phone','city'];
 public function user(){
     return $this->belongsTo(User::class,'userId');
 }
    public function category(){
        return $this->belongsTo(Category::class,'categoryId');
    }
}
