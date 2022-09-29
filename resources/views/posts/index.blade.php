<x-app-layout>
    <x-slot name="header">
        　index
    </x-slot>

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <!-- link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" -->
        <link rel="stylesheet" href="/css/style.css" >
    </head>
    
    <script>
        function deletePost(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
    
    <body>
        <div class = "movetoright">
            <h1>Blog Name</h1>
            <a class = 'sosobig' href='/posts/create'>create</a>
            <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h2 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p class='body'>{{ $post->body }}</p>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                        <p>writer : {{ $post->user->name }}</p>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class = 'link' type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                        </form>
                    </div>
                    
                @endforeach
            </div>
            <div class = 'paginate'>
                {{$posts -> links()}}
            </div>
            <div class = 'questions'>
                @foreach($questions as $question)
                    <div>
                      <a href="https://teratail.com/questions/{{ $question['id'] }}">
                        {{ $question['title'] }}
                      </a>
                     </div>
                @endforeach
            </div>
        </div>
    </body>
</html>

</x-app-layout>