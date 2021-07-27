@extends('layouts.admin')
@section('title', 'ニュースの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース新規作成</h2>
                <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
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


