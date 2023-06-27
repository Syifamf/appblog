@extends('template.frontend.theme')

@section('content')
<article class="blog-post">
   <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->isoFormat('MMMM DD, YYYY - h:mm:ss a') }}</p>
    <p class="blog-post-meta">{{ $post->article }}</p>

     </article>
@endsection