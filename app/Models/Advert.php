<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    public $cost;

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function getCost()
    {
        return $this->cost;
    }


 protected $table='adverts';

 protected  $fillable=['title','description','cost','categoryId','userId','image','phone','city'];
 public function user(){
     return $this->belongsTo(User::class,'userId');
 }
    public function category(){
        return $this->belongsTo(Category::class,'categoryId');
    }
}
