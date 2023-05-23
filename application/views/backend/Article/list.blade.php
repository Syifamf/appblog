@extends('template.backend.theme')
@section('content')
<br>
<a href="{{ site_url('backend/article/form') }}">Tambah Data</a >   
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Article</th>
              <th scope="col">Created At</th>
              <th scope="col">Updated At</th>
            </tr>
          </thead>
          <tbody>
            @foreach($post_list as $post)
            <tr>
              <td></td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->article }}</td>
              <td>{{ $post->created_at }}</td>
              <td>{{ $post->updated_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
 @endsection