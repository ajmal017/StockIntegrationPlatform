<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    protected $table ='news';
    protected $fillable = [
        'title', 'img', 'content','sort'
    ];

    public function news_img(){
        return $this->hasMany('App\News_img')->orderby('sort','desc');
    }
}
