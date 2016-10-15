<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function add()
    {
      if(user_ins()->is_logged_in())
        return ['status'=>0, 'msg'=>'login required '];
      if(!Request::input('question_id') || !Request::input('content'))
        return ['status'=>0, 'msg'=>'content are requried'];

    }
}
