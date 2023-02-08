<x-app-layout>
    <x-slot name="header">
        　show
    </x-slot>

<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <!-- link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"-->
        <link rel="stylesheet" href="/css/style.css" >
    </head>
    
    <body>
        <div class = "movetoright">
            <div class = 'post'>
                <h1 class="title">
                    {{ $post->title }}
                </h1>
                <div class="content">
                    <div class="content__post">
                        <h3>本文</h3>
                        <p>{{ $post->body }}</p>    
                    </div>
                </div>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <p>writer : {{ $post->user->name }}</p>
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
                <div class="footer">
                    <a href="/home">戻る</a>
                </div>
            </div>
        </div>
    </body>
    
</html>

</x-app-layout>