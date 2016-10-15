<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;
use Hash;

class User extends Model
{
    protected $table = 'users';

    public function has_username_password()
    {
      $username = Request::input('username');
      $password = Request::input('password');
      if($password && $username)
        return [$username,$password];
      return false;
    }

    public function signup()
    {
      $has_username_password = $this->has_username_password();
      if(!$has_username_password)
        return ['status'=>0,'msg'=>'用户名密码都不为空'];
      $username = $has_username_password[0];
      $password = $has_username_password[1];
      $user_exists = $this->where('username',$username)->exists();
      // dd($this->where('username',$username)->exists());
      //
      if($user_exists)
        return ['status'=>0,'msg'=>'用户已存在'];

      $hash_pass = Hash::make($password);
      $user = $this;
      $user->password = $hash_pass;
      $user->username = $username;
      if($user->save())
        return ['status'=>1,'msg'=>'注册成功','id'=>$user->id];
    }

    public function login()
    {
      $has_username_password = $this->has_username_password();
      if(!$has_username_password)
        return ['status'=>0,'msg'=>'用户名密码都不为空'];
      $username = $has_username_password[0];
      $password = $has_username_password[1];


      $user = $this->where('username',$username)->first();
      if(!$user)
        return ['status'=>0,'msg'=>'用户不存在'];

      $hashed_password = $user->password;

      if(!Hash::check($password, $hashed_password))
        return ['status' =>0, 'msg'=>'密码错误'];

      session()->put('username', $user->username);
      session()->put('userid', $user->id);
      return ['status' =>1, $this->is_logged_in(), 'sessionid'=>session('userid')];
    }
    public function is_logged_in()
    {
      return session('userid')?: false;
    }

    public function logout()
    {
      session()->forget('username');
      session()->forget('userid');
      return ['status'=>1];
    }

}
