@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="{{ asset("storage/{$post->image}"); }}" alt="post image">
        </div>

        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div>
                        <img class="w-100 rounded-circle pr-3" style="max-width:50px" src="{{ asset($post->user->profile->profileImage()) }}" alt="profile image"/>
                    </div>

                    <div>
                        <div class="font-weight-bold">
                            <a class="text-dark" href="{{ route('profile.show', $post->user->profile->id) }}">
                                {{ $post->user->username }}
                            </a>

                            <a class="pl-3" href="#">Follow</a>
                        </div>
                    </div>
                </div>

                <hr/>

                <p>
                    <span class="font-weight-bold">
                        <a class="text-dark" href="{{ route('profile.show', $post->user->profile->id) }}">
                            {{ $post->user->username }}
                        </a>
                    </span>
                    <span>
                        {{ $post->caption }}
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
