<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Game extends Model
{
    protected $fillable=['id','title','slug','developer','latest_version','status','summary','description','image','price','category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
