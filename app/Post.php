<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; // 追加

class Post extends Model
{
    // 取得したいカラムを指定
    protected $fillable = ['user_id', 'title', 'content', 'image', ];
    /**
     * この投稿を所有するユーザー（ Userモデルとの多対1の関係を定義）。
     */
     public function user() 
     {
        // Userデータを引っ張ってくる
        return $this->belongsTo(User::class);
     }
}
