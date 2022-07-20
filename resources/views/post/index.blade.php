@extends('layout.layout')

@section('content-section')
    <link href="{{ url('css/post.css') }}" rel="stylesheet">
   <div class="container">
    <ul class="img-list">
        @foreach ($post as $list)
        <li>
           <div class="post-ttl"><h2><a href="#">{{ $list->name }}</a></h2>
            <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="post-content">
            <div class="img-blk">
                <img src="{{ url('images/default.jpg') }}" alt="">
            </div>
            <p class="text">{{ $list->description }}</p>
        </div>
        </li>
        @endforeach
    </ul>
   </div>
@endsection
