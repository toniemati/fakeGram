@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data" method="POST">
        @method('PUT')
        @csrf

        <div class="row">
          <div class="col-8 offset-2">

            <div class="row">
              <h1>Edit profile</h1>
            </div>

            <div class="form-group row">
              <label for="title" class="col-md-4 col-form-label">Title</label>

              <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $user->profile->title) }}" autocomplete="title" autofocus>

              @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group row">
              <label for="description" class="col-md-4 col-form-label">Description</label>

              <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $user->profile->description) }}" autocomplete="description" autofocus>

              @error('description')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group row">
              <label for="link" class="col-md-4 col-form-label">Link</label>

              <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link', $user->profile->link) }}" autocomplete="link" autofocus>

              @error('link')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group row">
              <label for="image" class="col-md-4 col-form-label">Profile Image</label>

              <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>

              @error('image')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="row pt-4">
                <button class="btn btn-primary">Save Profile</button>
            </div>

          </div>
        </div>
      </form>
</div>
@endsection
