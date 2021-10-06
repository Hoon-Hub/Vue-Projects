<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;


class Post extends Model
{
    use HasFactory;

// database 의 이름과 이 파일의 이름을 매칭시키기 위해
    // protected $table="posts";

    // protected $fillable = ['title','body','slug','user_id'];

    // protected $guarded = [];

    protected $fillable = ['user_id','name'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    // many to many relationship example
    public function tags () {
        return $this->belongsToMany(Tag::class);
    }

    
}
