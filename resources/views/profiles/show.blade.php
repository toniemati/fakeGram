@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle p-2" style="width:100%; object-fit:contain; background:#efefef;" src="{{ asset($user->profile->profileImage()) }}" alt="profile img" />
        </div>

        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h3">{{ $user->username }}</div>

                    <follow-button userid="{{ $user->id }}" isfollowing="{{ $isfollowing }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="{{ route('post.create') }}">Add new post</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-4"><b>{{ $postsCount }}</b> posts</div>
                <div class="pr-4"><b>{{ $followersCount }}</b> followers</div>
                <div class="pr-4"><b>{{ $followingCount }}</b> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>

            <div>{{ $user->profile->description }}</div>

            <div>
                <a href="#">{{ $user->profile->link }}</a>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="{{ route('post.show', $post->id) }}">
                    <img class="w-100 pt-5" src="/storage/{{ $post->image }}" alt="post image">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
