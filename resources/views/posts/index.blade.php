@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="{{ route('post.show', $post->id) }}">
                    <img class="w-100" src="{{ asset("storage/{$post->image}"); }}" alt="post image">
                </a>
            </div>
        </div>

        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div>
                    <p>
                        <span class="font-weight-bold">
                            <a class="text-dark" href="{{ route('profile.show', $post->user->profile->id) }}">{{ $post->user->username }}</a>
                        </span>
                        <span>{{ $post->caption }}</span>
                    </p>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
