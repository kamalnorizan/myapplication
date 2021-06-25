@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $post->title }} ~ <i>{{ $post->user->name }}</i></div>

                <div class="card-body">
                    {{ $post->description }}
                </div>

                <div class="card-footer">
                    <h5>Comment:</h5>
                        <strong>{{ $post->comments->first()->user->name ?? '' }}</strong><br>
                        {{ $post->comments->first()->content ?? '' }}
                        <hr>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <br>
    {{ $posts->links('pagination::bootstrap-4') }}
</div>

@endsection

@section('script')

@endsection
