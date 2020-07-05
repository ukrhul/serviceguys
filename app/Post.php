<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Comment;

class Post extends Model
{
    protected $primaryKey = 'post_id';

    protected $fillable = ['post_title','post_description','post_min_price','post_image_url'];
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id', 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'comment_id', 'comment_id');
    }
}
