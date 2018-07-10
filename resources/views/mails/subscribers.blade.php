@extends('layouts.app')
@section('content')
    <div style="width: 600px;margin:0 auto;margin-bottom: 20px;">
        <h1>Email Subscribers</h1><br>
        <p style="color: #1e7e34;">{{$message}}</p><br><br>
        <form action="/send" method="post">
            <input type="email" style="width: 400px;height:50px;margin: 0 auto;" name="mail" placeholder="email address"/><br>
            <input type="text" style="width: 400px;height:50px;margin: 0 auto;" name="title" placeholder="Title"/><br>
            <input type="text" style="width: 400px;height:50px;margin: 0 auto;" name="body" placeholder="Body ..."/><br>
            <button type="submit">Send mail</button>
            {{csrf_field()}}
        </form>
    </div>
    @endsection