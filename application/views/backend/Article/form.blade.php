@extends('template.backend.theme')

@section('content')
<br>
<br>
@if($notif != null)
<div class="alert alert-info" role="alert">
 {{ $notif }}
</div>
@endif

<form method="post" action="{{current_url()}}">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ $post->title ?? ''}}">
  </div>
  <div class="mb-3">
    <label for="article" class="form-label">Article</label>
    <textarea class="form-control" name="article">{{ $post->article ?? '' }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ site_url('backend/article/list') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection