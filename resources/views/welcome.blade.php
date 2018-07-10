 @extends('layouts.app')
    @section('content')
        <div class="flex-center position-ref full-height" >

            <div class="content" style="width: 1000px;margin:0 auto;margin-bottom: 20px;">
                <div class="title m-b-md">
                    myBlog.me
                </div>
                <p>@isset($sucess){{$success}}@endisset</p><p>@isset($error){{$error}}@endisset</p><br><br>
                <div class="blogs" style="float: left">
                    @foreach ($blogs as $blog)
                        <div >

                            <div class="blog_head"><h2>{{ $blog->title }}</h2></div>
                            <div class="blog_body">{{ $blog->body }}</div>
                            <br>
                            {{$blog->id}}
                            <div class="blog_button"><a href="/welcome/blog/{{$blog->id}}" class="btn btn-primary">READ MORE</a> </div>
                        </div>
                        <hr style="width: 50px;">
                    @endforeach
                </div>
            </div>
        </div>
@endsection