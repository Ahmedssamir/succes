<?php

namespace App;
use App\Traits\OfferTrait;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
   
    public $timestamps = false;
    protected $fillable=['name','price','adress','photo'];
    protected $hidden=['created_at','updated_at'];
}
