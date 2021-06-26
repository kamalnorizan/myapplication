@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $post->title }} ~ <i>{{ $post->user->name ?? '' }}</i></div>

                <div class="card-body">
                    {{ $post->description }}
                </div>

                <div class="card-footer bg-white">
                    <h5>{{ $post->comments->count() }} Comment(s):</h5>
                    @foreach ($post->comments as $comment)
                        <strong>{{ $comment->user->name ?? '' }}</strong>
                        <small>
                            {{-- carbonblade --}}
                            {{\Carbon\Carbon::parse($comment->created_at)->format('d-m-Y')}}
                        </small>
                        <br>
                        {{ $comment->content ?? '' }}
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <br>
    {{-- {{ $posts->links('pagination::bootstrap-4') }} --}}
</div>

@endsection

@section('script')

@endsection
