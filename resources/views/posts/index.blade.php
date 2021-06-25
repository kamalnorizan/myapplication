@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>

                <div class="card-body">
                    {{ $post->description }}
                </div>

                <div class="card-footer">
                    <h5>Comment:</h5>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('script')

@endsection
