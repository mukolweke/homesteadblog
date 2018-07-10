@extends('layouts.app')
{{--our form template--}}
@section('content')
    <div style="width: 1000px;margin:0 auto;margin-bottom: 20px;">


        <div style="float: left; margin-right: 200px;margin-top: 10px;">
            <h3>All Blogs</h3>
            @foreach ($blogs as $blog)
                <a href="/welcome/blog/{{$blog->id}}">{{ $blog->title }}</a><br>
            @endforeach

        </div>

        <div style="float: left">
            <div style="width: 300px;margin:0 auto;margin-bottom: 20px;">
                <div class="blog_head"><h2>{{ $this_blog->title }}</h2></div>
                <div class="blog_body">{{ $this_blog->body }}</div>
                <br>
                <form action="/deleteBlog/{{ $this_blog->id }}" method="post">
                    @csrf
                    {!! method_field('delete') !!}
                    <button type="submit">DELETE</button>
                </form>
            </div>
        </div>
    </div>

@endsection