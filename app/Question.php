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

    public function change()
    {
      if(!user_ins()->is_logged_in())
        return ['status'=>0,'msg'=>'login required'];
      $id = Request::input('id');
      if(!$id)
        return ['status'=>0,'msg'=>'id is required'];
      $question = $this->where('id',$id)->first();
      // dd($question->user_id);
      if(!$question)
        return ['status'=>0,'msg'=>'question is not exist'];
      if($question->user_id != session('userid'))
        return ['status'=>0,'msg'=>'you dont have permission'];

      if(Request::input('title'))
        $question->title = Request::input('title');
      if(Request::input('desc'))
        $question->title = Request::input('desc');

      if($question->save())
        return ['status'=>1, 'id'=>$question->id ];
      else
        return ['status'=>0, 'msg'=>'db insert failed'];
    }
    public function read()
    {
      // dd(Request::input('id'));
      if(Request::input('id'))
        return ['status'=>1, 'data'=>$this->find(Request::input('id'))];
      $limit = Request::input('limit')?:15;
      // $skip = ((Request::input('page')?:1)-1) * $limit;
      $skip = (Request::input('page')?:1) * $limit- $limit;
      $requestion = $this
        ->orderBy('created_at')
        ->limit($limit)
        ->skip($skip)
        ->get()
        ->keyby('id');

      return ['status'=>1, 'data'=>$requestion];
    }

    public function remove()
    {
      if(!user_ins()->is_logged_in())
        return ['status'=>0,'msg'=>'login required'];
      if(!Request::input('id'))
        return ['status'=>0, 'msg'=>'id is required'];

      $question = $this->find(Request::input('id'));
      if(!$question)
        return ['status'=>0, 'msg'=>'question is not exist'];
      if(session('userid') != $question->user_id)
        return ['status'=>0,'msg'=>'you dont have permission'];
      return $question->delete() ?
        ['status'=>1]:
        ['status'=>0,'msg'=>'you dont have permission'];

    }
}
