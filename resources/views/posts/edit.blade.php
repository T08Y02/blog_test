<x-app-layout>
    <x-slot name="header">
        　index
    </x-slot>

<!DOCTYPE HTML>
<html lang = "{{ str_replace('_', '-' , app()->getLocale() )}}">
    <head>
        <meta charset="utf-8">
        <title>Blog edit</title>
        <!-- Fonts -->
        <!-- link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"-->
        <link rel="stylesheet" href="/css/style.css" >
    </head>
    <body>
        <div class = "movetoright">
            <h1 class="title">編集画面</h1>
            <div class="content">
                <form action="/posts/{{ $post->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='content__title'>
                        <h2>タイトル</h2>
                        <input type='text' name='post[title]' value="{{ $post->title }}">
                    </div>
                    <div class='content__body'>
                        <h2>本文</h2>
                        <input type='text' name='post[body]' value="{{ $post->body }}">
                    </div>
                    <input class = "submitbutton"  type="submit" value="保存">
                </form>
                <div class="footer">
                    <a href="/home">戻る</a>
                </div>
            </div>
        </div>
    </body>
</html>

</x-app-layout>
