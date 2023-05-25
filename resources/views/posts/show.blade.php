<x-app-layout>
    <x-slot name="header">
        　show
    </x-slot>

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
    
</html>

</x-app-layout>