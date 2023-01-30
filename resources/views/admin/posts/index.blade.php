@extends('layouts.app')


@section('title')
    | admin
@endsection


@section('content')
<div class="container">
    <h1>Questa si stampano i Post!</h1>

    <!-- @dump($posts) -->

    <a href="{{url('/admin/posts/create')}}" class="btn btn-success btn-sm" title="Add New Post">Aggiungi Post</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->date}}</td>
                    <td>XXX</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection