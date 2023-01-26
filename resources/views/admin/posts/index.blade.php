@extends('layouts.app')


@section('title')
    | admin
@endsection


@section('content')
<div class="container">
    <h1>Questa si stampano i Post!</h1>

    @dump($posts);
</div>
@endsection