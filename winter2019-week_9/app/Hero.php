<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Hero extends Model
{
    protected $fillable = ['subject', 'description'];
    public function images()
    {
        return $this->belongsToMany('App\Image', 'hero_image');
    }
}