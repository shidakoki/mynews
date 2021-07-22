    {{-- layouts/admin.blabe.phpを読み込む --}}
    @extends('layouts.admin')
    {{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
    @section('title','ニュースの新規作成')
    {{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
    @section('content')
        <div class="container">
           <div class="row">
              <div class="col-md-8 mx-auto">
                  <h2>ニュースの新規作成</h2>
              </div>
           </div>
        </div>
    @endsection


{{--Laravel 11 Blade
課題1　@yield
課題2　BootstrapとはWebページの見え方を制御するためのフレームワーク。
　　　フォームやボタン、ナビゲーション、モーダルなど汎用的なウェブサイトのパーツのスタイルが
　　　提供されていす。このような汎用パーツは一から作ると手間がかかるもの。Bootstrapを使えば
　　　車輪の再発明をおさえられるので、生産性をあげられる。
　　　Sass は CSS を分割して管理したり、HTMLの構造に沿った直感的な記述ができるなど、
　　　高機能なフレームワーク。Sass を使うことによって、Webアプリケーションの表示を効率的に
　　　制御できるようになる。--}}


