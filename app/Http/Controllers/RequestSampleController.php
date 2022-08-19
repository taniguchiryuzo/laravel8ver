<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestSampleController extends Controller
{
    public function form()
    {
      return view('form');
    }

    public function querystrings(Request $request)
    {
      $keyword = $request->get(key:'keyword',default:'未設定');
      return 'キーワードは「'.$keyword.'」です';
    }

    public function profile($id)
    {
        return 'ID:'.$id;
    }

    public function productsArchive(Request $request, $category,$year)
    {
      return 'category: '. $category. '<br>year: '. $year. '<br>page: '. $request->get(key:'page',default: 1);
    }

    public function routeLink()
    {
      $url = route('profile', ['id' => 1, 'photos' => 'yes']);
     
      return 'プロフィールページのURLは'.$url;
    }

public function loginform()
{
  return view('login');
}


public function login(Request $request)
{
    if ($request->get('email') === 'user@example.com' && $request->get('password') === '12345678') {
        return 'ログイン成功';
    }
    return 'ログイン失敗';
}
}
