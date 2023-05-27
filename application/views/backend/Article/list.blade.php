@extends('template.backend.theme')
@section('content')
<br>
<a href="{{ site_url('backend/article/form') }}">Tambah Data</a >   
<br>
@if(isset($flashdata['notif']))
<br>
<div class="alert alert-warning">{{ $flashdata['notif'] }}</div>
@endif
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
              <th scope="col">Action</th>
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
              <td>
              <a class="btn btn-danger btn-sm" href="{{ site_url('backend/article/hapus/' . $post->id ) }}" role="button"><i class="bi bi-trash"></i></a>
              <a class="btn btn-success btn-sm" href="{{ site_url('backend/article/ubah/' . $post->id ) }}"><i class="bi bi-pencil-square"></i></a>
              </td>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
 @endsection