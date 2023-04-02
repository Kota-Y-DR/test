<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
public function index(Post $post)

{
    return $post->get();//$postの中身を戻り値にする。
}


class PostController extends Controller
{
    //
}
