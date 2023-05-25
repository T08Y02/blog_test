<x-app-layout>
    <x-slot name="header">
        　index
    </x-slot>
        <div class = "movetoright">
            <h1>Blog Name</h1>
            
            <form action="/posts" method="POST">
            @csrf
                <div class="title">
                    <h2>Title</h2>
                    <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="body">
                    <h2>Body</h2>
                    <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <!-- input class = "submitbutton" type="submit" value="保存"/ -->
                <button class = "submitbutton" type="submit">ほぞん</button>
                <div class="category">
                    <h2>Category</h2>
                    <select name="post[category_id]">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
            <div class="footer">
                <a href="/home">戻る</a>
        </div>
        </div>

</x-app-layout>