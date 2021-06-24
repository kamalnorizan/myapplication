@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Title</div>

                <div class="card-body">
                    @foreach ($posts as $key=>$post)
                        {{ $key+1 }}. {{ $post->title }} - {{ $post->id }} <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Comment</div>

                <div class="card-body">
                    @foreach ($comments as $comment)
                        {{ $comment->content }}
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
