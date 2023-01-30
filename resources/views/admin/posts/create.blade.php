@extends('layouts.app')

@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">Aggiungi un nuov post</div>
    <div class="card-body">
         
        <form action="{{ url('student') }}" method="post">
          @csrf
          <label>ID</label></br>
          <input type="text" name="id" id="id" class="form-control"></br>
          <label>Titolo</label></br>
          <input type="text" name="title" id="title" class="form-control"></br>
          <label>Data</label></br>
          <input type="text" name="date" id="date" class="form-control"></br>
          <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
      
    </div>
  </div>
@endsection