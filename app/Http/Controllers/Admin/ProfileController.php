<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
  public function add()
  {
    return view('admin.profile.create');
  }
  
  public function create()
  {
    return redirect('admin/profile/create');
  }
  
  public function edit()
  {
    return view('admin.profile.edit');
  }
  
  public function update()
  {
    return redirect('admin/profile/edit');
  }
}

/*
PHP/Laravel　08　ControllerとRoutingの関係について理解しよう

課題2
Routingの役割
　特定のアドレスにアクセスしたとき、どの処理を呼び出して実行するか。
　それを管理するのがRoutingである。
Controllerの役割
　Modelの連携をとってデータベースからデータを取得したり、データを保存したりする。
　その後、Modelから取得したデータをViewと連携してブラウザに表示するデータを生成し、
　Viewにデータを送信するように指示を送る。

PHP/Laravel　09　Routingについて理解する
課題1　Routing
課題2　group化することでRoutingの設定を複数行うことが可能にうなるから
課題3　
Route::get('/XXX',
'AAAController@bbb');

PHP/Laravel 10 ControllerとViewが連携できるようにしよう
課題1　Controllerの指示によってアクセスしてきたユーザーに表示するデータを生成する
課題2　プログラマーが初めからHTMLを書くと決まったものを表示するHTMLしか出力できない。
課題3　Viewsのadminのprofileにcreate.blade.phpとedit.blade.phpファイルを設置する。
*/
