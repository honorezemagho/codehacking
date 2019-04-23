@extends('adminlte::page');

@section('content');

@if(Session::has('deleted_user'))

    <p class="bg-danger"> {{session('deleted_user')}}</p>

@endif

<h1 class="text-center"> Posts</h1>

<table class = "table">

<thead>
<tr> 
<th> Id</th>
<th> Photo</th>
<th> Owner</th>
<th> Category</th>
<th>Title</th>
<th> Body</th>
<th> Created</th>
<th> Updated</th>
</tr>
</thead>

<tbody> 
@if($posts)

    @foreach($posts as $post)

<tr>
<td>{{$post->id}}</td>
<td><img height="50" src="{{$post->photo ? $post->photo->file: '/images/default.jpg'}}" alt=""></td>
    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
<td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
<td>{{$post->title}}</td>
<td>{{$post->body}}</td>
<td>{{$post->created_at->diffForhumans()}}</td>
<td>{{$post->updated_at->diffForhumans()}}</td>
</tr>

    @endforeach
  @endif  

</tbody>
</table>

@endsection