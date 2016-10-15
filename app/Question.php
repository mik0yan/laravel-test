<?php

namespace App;
use Request;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    public  function add()
    {
      // dd(session()->all());
      // dd(user_ins()->is_logged_in());
      if(!user_ins()->is_logged_in())
        return ['status'=>0,'msg'=>'login required'];
      $is_title = Request::input('title');
      if(!$is_title)
        return ['status'=>0,'msg'=>'required title'];
      $question = $this;
      $question->title = $is_title;
      $question->user_id = session('userid');

      $is_desc = Request::input('desc');
      if($is_desc)
        $question->desc = $is_desc;
      if($question->push())
        return ['status'=>1, 'id'=>$this->id ];
      else
        return ['status'=>0, 'msg'=>'db insert failed'];
    }
}
