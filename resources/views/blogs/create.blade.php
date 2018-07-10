@extends('layouts.app')
{{--our form template--}}
@section('content')

    <div class="container" style="width: 300px;margin:0 auto;margin-bottom: 20px;">
        <h1>Submit a Blog</h1>
        <div class="row">
            <form action="/create_blog" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Title</label>
                    <input type="text" style="width: 400px;margin: 0 auto;" id="title" name="title" placeholder="Title"
                           value="{{ old('title') }}">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('blog_content') ? ' has-error' : '' }}">
                    <label for="blog_content">Blog Content</label>
                    <textarea style="width: 400px;margin: 0 auto;" rows="10" id="blog_content" name="body"
                              placeholder="My Blog ...">{{ old('blog_content') }}</textarea>
                    @if($errors->has('blog_content'))
                        <span class="help-block">{{ $errors->first('blog_content') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection